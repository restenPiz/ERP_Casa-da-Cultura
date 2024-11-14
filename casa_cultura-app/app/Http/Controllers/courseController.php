<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\course;
use App\Models\Course_user;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class courseController extends Controller
{
    public function getTrainer()
    {
        $user = Auth::user();

        $courses = $user->courses()->get();

        if ($courses->isEmpty()) {
            return abort(404, 'Nenhum curso vinculado ao formador.');
        }

        return view('coursePages.all', compact('courses'));
    }
    public function edit($id)
    {
        $trainers = User::all();
        $course = course::findOrFail($id);

        return view('coursePages.edit', compact('course', 'trainers'));
    }
    public function detail($id)
    {
        //*Selecionando o usuario formador relacionado a um curso
        $course = course::with([
            'users' => function ($query) {
                $query->where('user_type', 'Trainer');
            }
        ])->findOrFail($id);

        //*Retornando os capitulos de um curso em especifico
        $chapters = Chapter::where('id_course', $id)->get();

        //*Selecionando todos os usuarios inscritos nesse curso
        $users = course::with([
            'users' => function ($query) {
                $query->where('user_type', '!=', 'Trainer');
            }
        ])->findOrFail($id);

        //?Inicio do metodo que faz o count de dados dos estudantes de cada curso
        $cours = Course::findOrFail($id);

        // Contar os usuários vinculados ao curso que tenham 'user_type' igual a 'Users'
        $countStudent = $cours->users()->where('user_type', 'Users')->count();

        return view('coursePages.detail', compact('course', 'chapters', 'users', 'countStudent'));
    }
    public function all()
    {
        //*Inicio da selecao de cursos
        $courses = course::all();
        $courseUsers = Course_user::with('user');

        //*Inicio do retorno de dados na view
        return view('coursePages.all', compact('courses', 'courseUsers'));
    }
    public function index()
    {
        $course = course::all();

        $trainers = DB::table('users')
            ->where('user_type', '=', 'Trainer')
            ->get();

        return view('coursePages.index', compact('trainers', 'course'));
    }
    public function store(Request $request)
    {
        //?Inicio do metodo de validacao
        $validatedData = $request->validate([
            'Course_name' => 'required|string|max:255',
            'Description' => 'required|string|max:5000',
            'Price' => 'required|string|max:255',
            'id_user' => 'required|array',
            'id_user.*' => 'exists:users,id',
            'Upload_file' => 'required|file|mimes:pdf,doc,docx,jpg,png|max:10240',
        ]);

        if ($request->hasFile('Upload_file')) {
            $validatedData['Upload_file'] = $request->file('Upload_file')->store('uploads/courses', 'public');
        }

        if ($request->hasFile('Upload_video')) {
            $validatedData['Upload_video'] = $request->file('Upload_video')->store('uploads/courses', 'public');
        }

        //*Inicio do metodo que vai inserir os dados
        $courses = course::create([
            'Course_name' => $validatedData['Course_name'],
            'Description' => $validatedData['Description'],
            'Price' => $validatedData['Price'],
            'Upload_file' => $validatedData['Upload_file'],
        ]);

        //*Conectando o user com o curso
        if (isset($validatedData['id_user'])) {
            $courses->users()->attach($validatedData['id_user']);
        }
        Alert::success('Adicionado!', 'O curso foi adicionado com sucesso!');

        return redirect()->route('course.all');
    }
    public function update(Request $request, $id)
    {
        //*Encontrando o curso */
        $course = course::findOrFail($id);

        $validatedData = $request->validate([
            'Course_name' => 'required|string|max:255',
            'Description' => 'required|string|max:1000',
            'Price' => 'required|string|max:255',
            'Upload_file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:10240',
        ]);

        if ($request->hasFile('Upload_file')) {
            $validatedData['Upload_file'] = $request->file('Upload_file')->store('uploads/courses', 'public');
        } else {
            $validatedData['Upload_file'] = $course->Upload_file;
        }

        if ($request->hasFile('Upload_video')) {
            $validatedData['Upload_video'] = $request->file('Upload_video')->store('uploads/courses', 'public');
        } else {
            $validatedData['Upload_video'] = $course->Upload_video;
        }

        $course->update([
            'Course_name' => $validatedData['Course_name'],
            'Description' => $validatedData['Description'],
            'Price' => $validatedData['Price'],
            'Upload_file' => $validatedData['Upload_file'],
        ]);

        if (isset($validatedData['id_user'])) {
            $course->users()->sync($validatedData['id_user']);
        }

        Alert::success('Atualizado!', 'O curso foi atualizado com sucesso!');

        return redirect()->route('course.all');
    }
    public function delete($id)
    {
        $courses = course::findOrFail($id);

        $courses->delete();

        Alert::success('Eliminado!', 'O curso foi eliminado com sucesso!');

        return back();
    }
}
