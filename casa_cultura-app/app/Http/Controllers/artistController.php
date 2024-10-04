<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artistController extends Controller
{
    public function index()
    {
        return view('artistPage.index');
    }
}
