<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class chapterController extends Controller
{
    public function store(Request $request)
    {
        $chapter = new Chapter();

        $chapter->Title = $request->input('Title');
        $chapter->Description = $request->input('Description');
        $chapter->id_course = $request->input('id_course');

        $chapter->save();

        Alert::success('Adicionado!', 'O capitulo foi adicionado com sucesso!');

        return back();
    }
}
