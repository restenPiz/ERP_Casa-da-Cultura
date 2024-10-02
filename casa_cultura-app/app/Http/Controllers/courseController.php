<?php

namespace App\Http\Controllers;

use App\Models\course;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class courseController extends Controller
{
    public function index()
    {
        $trainers = DB::table('users')
            ->where('user_type', '=', 'Trainer')
            ->get();

        return view('coursePages.index', compact('trainers'));
    }
    public function storeCourse()
    {
        $courses = new course();

        $courses->Course_name = Request::input('Course_name');
        $courses->Description = Request::input('Description');
        $courses->Price = Request::input('Price');
        $courses->Goals = Request::input('Goals');

        if (Request::hasFile('upload_file')) {
            $validatedData['upload_file'] = Request::file('upload_file')->store('uploads/courses', 'public');
        }

        if (Request::hasFile('upload_video')) {
            $validatedData['upload_video'] = Request::file('upload_video')->store('uploads/courses', 'public');
        }

        $courses->save();

        //* Associar os formadores ao curso
        $courses->users()->attach($courses['formador_ids']);

        Alert::success('Adicionado!', 'O curso foi adicionado com sucesso!');
    }
}
