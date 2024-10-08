<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index()
    {
        return view('employeePages.index');
    }
    public function all()
    {
        $trainers = DB::table('users')
            ->where('user_type', '=', 'Employee')
            ->get();

        return view('employeePages.all', compact('users'));
    }
}
