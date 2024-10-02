<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\User;
use File;
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
            'Surname' => $validatedData['surname'],
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

        //*Inicio do metodo para verificar a existencia do ficheiro
        if (File::exists($request->file('upload_file'))) {
            File::delete($request->file('upload_file'));
        }

        //*Caso nao exista ele adiciona o ficheiro novo
        if ($request->hasFile('upload_file')) {
            $validatedData['upload_file'] = $request->file('upload_file')->store('uploads/files', 'public');
        }

        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->Surname = $request->input('Surname');
        $user->email = $request->input('email');
        $user->user_type = $request->input('user_type');
        $user->password = bcrypt($request->input('password'));
        $user->Date_of_birth = $request->input('Date_of_birth');
        $user->bi = $request->input('bi');
        $user->place = $request->input('place');
        $user->contact = $request->input('contact');
        $user->upload_file = $request->input('upload_file');
        $user->function = $request->input('function');
        $user->save();

        switch ($validatedData['user_type']) {
            case 'Employee':
                $role = 'employee';
                $successMessage = 'O usuário funcionário foi actualizado com sucesso!';
                break;
            case 'Trainer':
                $role = 'trainer';
                $successMessage = 'O usuário formador foi actualizado com sucesso!';
                break;
            case 'User':
                $role = 'user';
                $successMessage = 'O aluno foi actualizado com sucesso!';
                break;
            default:
                $role = null;
                $successMessage = 'Usuário actualizado com sucesso!';
                break;
        }

        //*Quando se esta a editar um dado, nao precisa adicionar mais a role
        // $user->addRole($role);

        Alert::success('Actualizado', $successMessage);

        return redirect()->route('trainer.all');
    }
}
