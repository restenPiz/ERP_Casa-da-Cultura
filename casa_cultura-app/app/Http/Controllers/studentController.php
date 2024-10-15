<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\User;
use DB;
use Hash;
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
