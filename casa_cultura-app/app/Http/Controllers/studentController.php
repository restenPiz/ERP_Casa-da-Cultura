<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('studentPages.index', compact('users'));
    }
}
