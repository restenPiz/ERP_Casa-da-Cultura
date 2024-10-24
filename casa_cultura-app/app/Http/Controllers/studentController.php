<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\User;
use Auth;
use DB;
use Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Storage;

class studentController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->where('user_type', 'Users')->get();
        $courses = course::all();
        return view('studentPages.index', compact('users', 'courses'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'Surname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'upload_file' => 'nullable|file|mimes:jpg,jpeg,png,gif,docx,pdf,txt|max:2048',
            'contact' => 'required|numeric|digits_between:9,12',
            'Date_of_birth' => 'required|date',
            'bi' => 'required|string|min:15|max:20|unique:users,bi',
            'id_course' => 'required|exists:courses,id',
        ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->Surname = $request->input('Surname');
        $user->email = $request->input('email');
        $user->user_type = $request->input('user_type');
        $user->password = $request->input('password');
        $user->Date_of_birth = $request->input('Date_of_birth');
        $user->bi = $request->input('bi');
        $user->contact = $request->input('contact');
        $user->upload_file = $request->input('upload_file');
        $user->status = $request->input('status');

        if ($request->hasFile('upload_file')) {
            $user['upload_file'] = $request->file('upload_file')->store('uploads/files', 'public');
        }

        $user->save();

        //*Metodo de adicao de roles no usuario
        $user->addRole('users');

        //*Metodo de adicao de relacionamento na tabela intermediaria
        $user->courses()->attach($request->input('id_course'));

        Alert::success('Adicionado', 'O aluno foi adicionado com sucesso!');

        return back();
    }
    public function manual(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'Surname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'upload_file' => 'nullable|file|mimes:jpg,jpeg,png,gif,docx,pdf,txt|max:2048',
            'contact' => 'required|numeric|digits_between:9,12',
            'Date_of_birth' => 'required|date',
            'bi' => 'required|string|min:15|max:20|unique:users,bi',
            'id_course' => 'required|exists:courses,id',
        ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->Surname = $request->input('Surname');
        $user->email = $request->input('email');
        $user->user_type = $request->input('user_type');
        $user->password = $request->input('password');
        $user->Date_of_birth = $request->input('Date_of_birth');
        $user->bi = $request->input('bi');
        $user->contact = $request->input('contact');
        $user->upload_file = $request->input('upload_file');
        $user->status = $request->input('status');

        if ($request->hasFile('upload_file')) {
            $user['upload_file'] = $request->file('upload_file')->store('uploads/files', 'public');
        }

        $user->save();

        //*Metodo de adicao de roles no usuario
        $user->addRole('users');

        event(new Registered($user));

        Auth::login($user);

        Alert::success('Bem Vindo!', 'O aluno foi adicionado com sucesso!');

        return redirect()->route('dashboard');
    }
    public function update(Request $request, $id)
    {
        //*Finding an user
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->Surname = $request->input('Surname');
        $user->email = $request->input('email');
        $user->user_type = $request->input('user_type');
        $user->password = $request->input('password');
        $user->Date_of_birth = $request->input('Date_of_birth');
        $user->bi = $request->input('bi');
        $user->contact = $request->input('contact');
        $user->upload_file = $request->input('upload_file');

        if ($request->hasFile('upload_file')) {
            $user['upload_file'] = $request->file('upload_file')->store('uploads/files', 'public');
        }

        $user->save();

        $user->addRole('users');
        $user->courses()->attach($request->input('id_course'));

        Alert::success('Actualizado!', 'O aluno foi actualizado com sucesso!');

        return back();
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        Alert::success('Eliminado!', 'O aluno foi eliminado com sucesso!');

        return back();
    }
    public function register()
    {
        return 0;
    }
}
