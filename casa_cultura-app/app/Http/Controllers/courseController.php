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
    public function store(Request $request)
    {
        $courses = new course();

        $courses->Course_name = Request::input('Course_name');
        $courses->Description = Request::input('Description');
        $courses->Price = Request::input('Price');
        $courses->Goals = Request::input('Goals');
        $courses->id_user = Request::input('id_user');

        if (Request::hasFile('upload_file')) {
            $courses['Upload_file'] = Request::file('Upload_file')->store('uploads/courses', 'public');
        }

        if (Request::hasFile('upload_video')) {
            $courses['Upload_video'] = Request::file('Upload_video')->store('uploads/courses', 'public');
        }

        $courses->save();

        $courses->users()->attach($courses['id_user']);

        Alert::success('Adicionado!', 'O curso foi adicionado com sucesso!');

        return back();
    }
    public function update()
    {
        
    }
    public function delete($id)
    {
        $courses = course::findOrFail($id);

        $courses->delete();

        Alert::success('Eliminado!', 'O curso foi eliminado com sucesso!');

        return back();
    }
}
