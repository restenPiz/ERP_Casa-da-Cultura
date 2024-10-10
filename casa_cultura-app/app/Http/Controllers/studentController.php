<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\User;
use DB;
use Hash;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class studentController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->where('user_type', 'Users')->get();
        $courses = course::all();
        return view('studentPages.index', compact('users', 'courses'));
    }
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
                'unique:users,email', // Evita duplicatas de email
            ],
            'password' => 'required|string|min:8|confirmed',
            'Date_of_birth' => 'nullable|date',
            'bi' => 'nullable|string|max:50',
            'contact' => 'nullable|string|max:20',
            'upload_file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:10240',
            'user_type' => [
                'required',
                'string',
                'in:Employee,Trainer,Users', // Valida os tipos de usuário permitidos
            ],
            'id_course' => 'required_if:user_type,User|exists:courses,id', // Validação condicional
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
            'Date_of_birth' => $validatedData['Date_of_birth'],
            'bi' => $validatedData['bi'],
            'contact' => $validatedData['contact'],
            'upload_file' => $validatedData['upload_file'],
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
            case 'Users':
                $role = 'users';
                $successMessage = 'O aluno foi adicionado com sucesso!';
                break;
            default:
                $role = null;
                $successMessage = 'Usuário adicionado com sucesso!';
                break;
        }

        //*Metodo de adicao de roles no usuario
        $user->addRole($role);

        //*Metodo de adicao de relacionamento na tabela intermediaria
        $user->courses()->attach($validatedData['id_course']);

        Alert::success('Adicionado', $successMessage);

        return back();
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
                'unique:users,email', // Evita duplicatas de email
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
                'in:Employee,Trainer,Users', // Valida os tipos de usuário permitidos
            ],
            'id_course' => 'required_if:user_type,User|exists:courses,id', // Validação condicional
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

        return back();
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        Alert::success('Eliminado!', 'O aluno foi eliminado com sucesso!');

        return back();
    }
}
