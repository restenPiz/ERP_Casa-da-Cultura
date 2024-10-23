<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\User;
use File;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;
use Storage;

class userController extends Controller
{
    public function storeUser(Request $request)
    {
        //* Inicio do metodo de validacao
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'Surname' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|string|min:8',
            'bi' => 'required|string|min:13',
            'Date_of_birth' => 'required|date',
            'Place' => 'required|string|max:255',
            'function' => 'required|string|max:255',
            'upload_file' => 'required|string|max:500',
            'user_type' => 'required|max:255',
            'status' => 'required|max:255',
            'contact' => 'required|integer|min:9'
        ]);

        $user = new User();

        switch ($request->input('user_type')) {
            case 'Employee':
                $role = 'employee';
                $successMessage = 'O usuário funcionário foi adicionado com sucesso!';
                break;
            case 'Trainer':
                $role = 'trainer';
                $successMessage = 'O usuário formador foi adicionado com sucesso!';
                break;
            case 'Users':
                $role = 'users';
                $successMessage = 'O aluno foi adicionado com sucesso!';
                break;
            default:
                $role = null;
                $successMessage = 'Usuário adicionado com sucesso!';
                break;
        }

        $user->name = $request->input('name');
        $user->Surname = $request->input('Surname');
        $user->email = $request->input('email');
        $user->user_type = $request->input('user_type');
        $user->password = $request->input('password');
        $user->Date_of_birth = $request->input('Date_of_birth');
        $user->bi = $request->input('bi');
        $user->contact = $request->input('contact');
        $user->upload_file = $request->input('upload_file');
        $user->function = $request->input('function');
        $user->place = $request->input('place');

        if ($request->hasFile('upload_file')) {
            $user['upload_file'] = $request->file('upload_file')->store('uploads/files', 'public');
        }

        $user->save();

        $user->addRole($role);

        Alert::success('Adicionado!', $successMessage);

        return back();
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        switch ($request->input('user_type')) {
            case 'Employee':
                $role = 'employee';
                $successMessage = 'O usuário funcionário foi actualizado com sucesso!';
                break;
            case 'Trainer':
                $role = 'trainer';
                $successMessage = 'O usuário formador foi actualizado com sucesso!';
                break;
            case 'Users':
                $role = 'users';
                $successMessage = 'O aluno foi actualizado com sucesso!';
                break;
            default:
                $role = null;
                $successMessage = 'Usuário actualizado com sucesso!';
                break;
        }

        $user->name = $request->input('name');
        $user->Surname = $request->input('Surname');
        $user->email = $request->input('email');
        $user->user_type = $request->input('user_type');
        $user->password = $request->input('password');
        $user->Date_of_birth = $request->input('Date_of_birth');
        $user->bi = $request->input('bi');
        $user->contact = $request->input('contact');
        $user->upload_file = $request->input('upload_file');
        $user->function = $request->input('function');
        $user->place = $request->input('place');

        if ($request->hasFile('upload_file')) {
            $user['upload_file'] = $request->file('upload_file')->store('uploads/files', 'public');
        }

        $user->save();

        $user->addRole('users');

        Alert::success('Actualizado!', $successMessage);

        return back();
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        Alert::success('Eliminado!', 'O usuario foi eliminado com sucesso!');

        return back();
    }
}
