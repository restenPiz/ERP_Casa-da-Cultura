<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function delete($id)
    {
        $trainer = User::findOrFail($id);

        $trainer->delete();

        Alert::success('Eliminado!', 'O formador foi eliminado com sucesso!');

        return back();
    }
}
