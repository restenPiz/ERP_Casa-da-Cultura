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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'Surname' => 'required|string|max:255',
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
            'Surname' => $validatedData['Surname'],
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
    public function update(Request $request, $id)
    {
        //*Finding an user
        $user = User::findOrFail($id);
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'Surname' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'password' => 'nullable|string|min:8|confirmed',
            'Date_of_birth' => 'nullable|date',
            'bi' => 'nullable|string|max:50',
            'place' => 'nullable|string|max:255',
            'contact' => 'nullable|string|max:20',
            'upload_file' => 'nullable|file|mimes:jpg,jpeg,png,gif|max:10240', // 10MB
            'function' => 'nullable|string|max:255',
            'user_type' => [
                'required',
                'string',
                Rule::in(['Employee', 'Trainer', 'User']),
            ],
        ]);

        if ($request->hasFile('upload_file')) {
            if ($user->upload_file && Storage::disk('public')->exists($user->upload_file)) {
                Storage::disk('public')->delete($user->upload_file);
            }

            $validatedData['upload_file'] = $request->file('upload_file')->store('uploads/files', 'public');
        }

        //*Inicio do metodo de actualizacao
        $user->update([
            'name' => $validatedData['name'],
            'Surname' => $validatedData['Surname'],
            'email' => $validatedData['email'],
            'user_type' => $validatedData['user_type'],
            'password' => $validatedData['password'] ? Hash::make($validatedData['password']) : $user->password,
            'Date_of_birth' => $validatedData['Date_of_birth'] ?? $user->Date_of_birth,
            'bi' => $validatedData['bi'] ?? $user->bi,
            'place' => $validatedData['place'] ?? $user->place,
            'contact' => $validatedData['contact'] ?? $user->contact,
            'upload_file' => $validatedData['upload_file'] ?? $user->upload_file,
            'function' => $validatedData['function'] ?? $user->function,
        ]);

        switch ($validatedData['user_type']) {
            case 'Employee':
                $role = 'employee';
                $successMessage = 'O usuário funcionário foi atualizado com sucesso!';
                break;
            case 'Trainer':
                $role = 'trainer';
                $successMessage = 'O usuário formador foi atualizado com sucesso!';
                break;
            case 'User':
                $role = 'user';
                $successMessage = 'O aluno foi atualizado com sucesso!';
                break;
            default:
                $role = null;
                $successMessage = 'Usuário atualizado com sucesso!';
                break;
        }
    
        Alert::success('Atualizado', $successMessage);

        return redirect()->route('trainer.all');
    }
}
