<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    public function storeUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'Surname' => 'nullable|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email'),
            ],
            'password' => 'required|string|min:8|confirmed',
            'Date_of_birth' => 'nullable|date',
            'bi' => 'nullable|string|max:50',
            'place' => 'nullable|string|max:255',
            'contact' => 'nullable|string|max:20',
            'upload_file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:10240',
            'function' => 'nullable|string|max:255',
            'user_type' => [
                'required',
                'string',
                Rule::in(['Employee', 'Trainer', 'User']),
            ],
        ]);

        if ($request->hasFile('upload_file')) {
            $validatedData['upload_file'] = $request->file('upload_file')->store('uploads/files', 'public');
        }

        $user = User::create([
            'name' => $validatedData['name'],
            'Surname' => $validatedData['surname'] ?? null,
            'email' => $validatedData['email'],
            'user_type' => $validatedData['user_type'],
            'password' => Hash::make($validatedData['password']),
            'Date_of_birth' => $validatedData['Date_of_birth'] ?? null,
            'bi' => $validatedData['bi'] ?? null,
            'place' => $validatedData['place'] ?? null,
            'contact' => $validatedData['contact'] ?? null,
            'upload_file' => $validatedData['upload_file'] ?? null,
            'function' => $validatedData['function'] ?? null,
        ]);

        switch ($validatedData['user_type']) {
            case 'Employee':
                $role = 'employee';
                $successMessage = 'O usuário funcionário foi adicionado com sucesso!';
                break;
            case 'Trainer':
                $role = 'trainer';
                $successMessage = 'O usuário formador foi adicionado com sucesso!';
                break;
            case 'User':
                $role = 'user';
                $successMessage = 'O aluno foi adicionado com sucesso!';
                break;
            default:
                $role = null;
                $successMessage = 'Usuário adicionado com sucesso!';
                break;
        }

        $user->addRole($role);

        Alert::success('Adicionado', $successMessage);

        return redirect()->route('trainer.all');
    }
}
