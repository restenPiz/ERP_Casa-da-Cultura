<?php

namespace App\Http\Controllers;

use App\Models\artist;
use Illuminate\Http\Request;

class artistController extends Controller
{
    public function index()
    {
        $artists = artist::all();

        return view('artistPage.index', compact('artists'));
    }
}
