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
        $user = User::create([
            'name' => 'Administrador',
            'email' => 'picardo@gmail.com',
            'password' => Hash::make('admin@123'), // Define uma senha segura
        ]);

        $user->addRole('admin');
    }
}
