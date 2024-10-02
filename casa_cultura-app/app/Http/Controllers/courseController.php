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

        if (Request::hasFile('Upload_file')) {
            $courses['Upload_file'] = Request::file('Upload_file')->store('files');
        }

        if (Request::hasFile('Upload_video')) {
            $courses['Upload_video'] = Request::file('Upload_video')->store('videos');
        }

        $courses->save();

        //* Associar os formadores ao curso
        $courses->users()->attach($courses['formador_ids']);

        Alert::success('Adicionado!', 'O curso foi adicionado com sucesso!');
    }
}
