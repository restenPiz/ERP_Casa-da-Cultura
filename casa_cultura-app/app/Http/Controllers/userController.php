<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    public function storeUser()
    {
        $validatedData = Request::validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //?Inicio da condicao
        if (Request::input('user_type') === 'Employee') {
            $role = 'employee';
            $successMessage = 'O usuário funcionario foi adicionado com sucesso!';
        } elseif (Request::input('user_type') === 'Trainer') {
            $role = 'trainer';
            $successMessage = 'O usuário formador foi adicionado com sucesso!';
        } elseif (Request::input('user_type') === 'users') {
            $role = 'users';
            $successMessage = 'O aluno foi adicionado com sucesso!';
        } else {
            $role = null;
        }

        //?Metodo de insercao
        $user = User::create([
            'name' => Request::input('name'),
            'email' => Request::input('email'),
            'Surname' => Request::input('Surname'),
            'user_type' => Request::input('user_type'),
            'password' => Hash::make(Request::input('password')),
        ]);

        $user->addRole($role);
        Alert::success('Adicionado', $successMessage);

        return redirect()->back();
    }
}
