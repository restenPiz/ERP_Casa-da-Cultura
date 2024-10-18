<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\course;
use App\Models\event;
use Auth;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class redirectController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {

            $course = course::all();
            $countCourse = DB::table('courses')
                ->count('id');

            $countStudent = DB::table('users')->where('user_type', 'Users')
                ->count('id');

            $countTrainer = DB::table('users')->where('user_type', 'Trainer')
                ->count('id');

            return view('dashboard', compact('course', 'countStudent', 'countCourse', 'countTrainer'));

        } elseif (Auth::user()->hasRole('users')) {

            $events = event::all();
            $courses = course::all();
            $users = DB::table('users')->where('user_type', 'Trainer')->get();
            return view('websitePages.index', compact('events', 'courses', 'users'));

        } elseif (Auth::user()->hasRole('trainer')) {

            $user = Auth::user();

            // Obter os cursos vinculados ao usuário
            $courses = $user->courses;

            // Verificar se o usuário tem cursos
            if ($courses->isEmpty()) {
                return abort(404, 'Usuário não tem cursos vinculados');
            }

            // Obter os capítulos do primeiro curso, por exemplo
            $course = $courses->first(); // Aqui você pode ajustar para selecionar o curso que precisa
            $chapters = Chapter::where('id_course', $course->id)->get();

            // Obter todos os usuários inscritos no curso, excluindo o Trainer
            $users = $course->users()->where('user_type', '!=', 'Trainer')->get();

            // Retornar para a view com os dados necessários
            return view('trainerDashboard', compact('course', 'chapters', 'users'));

        } elseif (Auth::user()->hasRole('employee')) {
            //*Inicio da rota mae para os funcionarios
        } else {

            Alert::error('Falha!', 'Tente logar-se novamento...');

            return redirect()->route('login');
        }
    }
    public function main()
    {
        return view('auth.login');
    }
    public function web()
    {
        $events = event::all();
        $courses = course::all();
        $users = DB::table('users')->where('user_type', 'Trainer')->get();
        return view('websitePages.index', compact('events', 'courses', 'users'));
    }
    public function courseDetails($id)
    {
        $course = course::findOrFail($id);
        $chapters = DB::table('chapters')->where('id_course', $id)->get();

        //*Usuarios
        $users = course::with([
            'users' => function ($query) {
                $query->where('user_type', 'Trainer');
            }
        ])->findOrFail($id);

        //* Retornando o numero total de Capitulos e Estudantes vinculados ao curso
        $countChapter = DB::table('chapters')->where('id_course', $id)
            ->count('id');

        $countStudent = $course->users()->where('user_type', 'Users')->count();

        return view('websitePages.courseDetail', compact('course', 'chapters', 'users', 'countChapter', 'countStudent'));
    }
    public function eventDetails($id)
    {
        $event = event::findOrFail($id);

        return view('websitePages.eventDetail', compact('event'));
    }
}
