<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class chapterController extends Controller
{
    public function store()
    {
        $chapter = new Chapter();
    }
}
