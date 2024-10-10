<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->where('user_type', 'Users')->get();
        $courses = course::all();
        return view('studentPages.index', compact('users', 'courses'));
    }
}
