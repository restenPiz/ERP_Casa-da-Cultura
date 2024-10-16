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

    }
    public function eventDetails($id)
    {

    }
}
