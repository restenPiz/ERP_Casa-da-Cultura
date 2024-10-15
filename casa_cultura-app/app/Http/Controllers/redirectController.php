<?php

namespace App\Http\Controllers;

use App\Models\course;
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
        return view('websitePages.index');
    }
}
