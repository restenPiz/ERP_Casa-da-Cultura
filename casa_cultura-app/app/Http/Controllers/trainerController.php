<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;

class trainerController extends Controller
{
    public function index()
    {
        return view('trainerPages.index');
    }
    public function all()
    {
        $trainers = DB::table('users')
            ->where('user_type', '=', 'Trainer')
            ->get();

        return view('trainerPages.all', compact('trainers'));
    }
}
