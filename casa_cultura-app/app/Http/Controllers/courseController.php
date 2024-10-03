<?php

namespace App\Http\Controllers;

use App\Models\course;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class courseController extends Controller
{
    public function index()
    {
        $trainers = DB::table('users')
            ->where('user_type', '=', 'Trainer')
            ->get();

        return view('coursePages.index', compact('trainers'));
    }
    public function store(Request $request)
    {
        if ($request->hasFile('upload_file')) {
            $courses['Upload_file'] = $request->file('Upload_file')->store('uploads/courses', 'public');
        }

        if ($request->hasFile('upload_video')) {
            $courses['Upload_video'] = $request->file('Upload_video')->store('uploads/courses', 'public');
        }

        //*Inicio do metodo que vai inserir os dados
        $courses = course::create([
            'Course_name' => $courses['Course_name'],
            'Description' => $courses['Description'],
            'Price' => $courses['Price'],
            'Goals' => $courses['Goals'],
            'Upload_file' => $courses['Upload_file'],
            'Upload_video' => $courses['Upload_video'],
        ]);

        //*Conectando o user com o curso
        $courses->users()->attach($courses['id_user']);

        Alert::success('Adicionado!', 'O curso foi adicionado com sucesso!');

        return back();
    }
    public function update()
    {
        //*Inicio do metodo de actualizacao
    }
    public function delete($id)
    {
        $courses = course::findOrFail($id);

        $courses->delete();

        Alert::success('Eliminado!', 'O curso foi eliminado com sucesso!');

        return back();
    }
}
