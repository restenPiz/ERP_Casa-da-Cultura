<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        //*Inicio da seeder responsavel pelo registro de dados do utilizador
        $user = User::create([
            'name' => 'Administrador',
            'email' => 'picardo@gmail.com',
            'password' => Hash::make('admin@123'),
        ]);

        $user->addRole('admin');
    }
}
