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
            'Surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //?Inicio da condicao
        if (Request::input('user_type') === 'Attendant') {
            $role = 'attendant';
            $successMessage = 'O usuário atendente foi adicionado com sucesso!';
        } elseif (Request::input('user_type') === 'Stock_manager') {
            $role = 'stock_manager';
            $successMessage = 'O usuário gestor de estoque foi adicionado com sucesso!';
        } elseif (Request::input('user_type') === 'Accountant') {
            $role = 'accountant';
            $successMessage = 'O usuário contabilista foi adicionado com sucesso!';
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
