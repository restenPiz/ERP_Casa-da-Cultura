<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

        return view('employeePages.all', compact('trainers'));
    }
    public function delete($id)
    {
        $employee = User::findOrFail($id);

        $employee->delete();

        Alert::success('Eliminado!', 'O usuario foi eliminado com sucesso!');

        return back();
    }
}
