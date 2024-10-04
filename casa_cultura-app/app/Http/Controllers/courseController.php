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
        // dd($request->all());
        //?Inicio do metodo de validacao
        $validatedData = $request->validate([
            'Course_name' => 'required|string|max:255',
            'Description' => 'required|string|max:1000',
            'Price' => 'required|string|max:255',
            'Goals' => 'required|string|max:1000',
            'Upload_file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:10240',
            'Upload_video' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:10240',
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
            'Goals' => $validatedData['Goals'],
            'Upload_file' => $validatedData['Upload_file'],
            'Upload_video' => $validatedData['Upload_video'],
        ]);

        // //*Conectando o user com o curso
        if (isset($validatedData['id_user'])) {
            $courses->users()->attach($validatedData['id_user']);  // Isso agora deve funcionar
        }
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
