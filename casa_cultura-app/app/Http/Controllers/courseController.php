<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class courseController extends Controller
{
    public function index()
    {
        return view('coursePages.index');
    }
    public function storeCourse()
    {
        $courses = new course();

        $courses->Course_name = Request::input('Course_name');
        $courses->Description = Request::input('Description');
        $courses->Price = Request::input('Price');
        $courses->Goals = Request::input('Goals');

        if (Request::hasFile('Upload_file')) {
            $validatedData['Upload_file'] = Request::file('Upload_file')->store('files');
        }

        if (Request::hasFile('Upload_video')) {
            $validatedData['Upload_video'] = Request::file('Upload_video')->store('videos');
        }

        $courses->save();

        Alert::success('Adicionado!', 'O curso foi adicionado com sucesso!');
    }
}
