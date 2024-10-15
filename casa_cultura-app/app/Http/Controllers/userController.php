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

        if ($request->hasFile('upload_file')) {
            $user['upload_file'] = $request->file('upload_file')->store('uploads/files', 'public');
        }

        $user->save();

        $user->addRole('users');

        Alert::success('Adicionado!', $successMessage);

        return back();
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

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

        if ($request->hasFile('upload_file')) {
            $user['upload_file'] = $request->file('upload_file')->store('uploads/files', 'public');
        }

        $user->save();

        $user->addRole('users');

        Alert::success('Adicionado!', $successMessage);

        return back();
    }
}
