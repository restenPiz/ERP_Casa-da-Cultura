<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\event;
use DB;
use Illuminate\Http\Request;

class redirectController extends Controller
{
    public function index()
    {
        $course = course::all();

        return view('dashboard', compact('course'));
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

        $users = course::with([
            'users' => function ($query) {
                $query->where('user_type', 'Trainer');
            }
        ])->findOrFail($id);

        //*Inicio das consultas de retorno de count
        $countChapter = DB::table('chapters')->where('id_course', $id)
            ->count('id');

        $countStudent = course::with([
            'users' => function ($query) {
                $query->where('user_type', '!=', 'Trainer');
            }
        ])->count('id');

        return view('websitePages.courseDetail', compact('course', 'chapters', 'users', 'countChapter', 'countStudent'));
    }
    public function eventDetails($id)
    {
        $event = event::findOrFail($id);

        return view('websitePages.eventDetail', compact('event'));
    }
}
