<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redirectController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
