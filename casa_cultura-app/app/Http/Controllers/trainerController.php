<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trainerController extends Controller
{
    public function index()
    {
        return view('trainerPages.index');
    }
}
