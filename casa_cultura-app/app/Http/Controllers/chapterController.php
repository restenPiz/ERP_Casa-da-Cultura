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

        if ($request->hasFile('Chapter_file')) {
            $filePath = $request->file('Chapter_file')->store('uploads/chapters', 'public');
            $chapter->Chapter_file = $filePath;
        }

        $chapter->save();

        Alert::success('Adicionado!', 'O capitulo foi adicionado com sucesso!');

        return back();
    }
    public function update(Request $request, $id)
    {
        $chapter = Chapter::findOrFail($id);

        $chapter->Title = $request->input('Title');
        $chapter->Description = $request->input('Description');
        $chapter->id_course = $request->input('id_course');

        if ($request->hasFile('Chapter_file')) {
            $filePath = $request->file('Chapter_file')->store('uploads/chapters', 'public');
            $chapter->Chapter_file = $filePath;
        } else {
            $chapter->Chapter_file;
        }

        $chapter->save();

        Alert::success('Actualizado!', 'O capitulo foi actualizado com sucesso!');

        return back();
    }
    public function delete($id)
    {
        $chapter = Chapter::findOrFail($id);

        $chapter->delete();

        Alert::success('Eliminado!', 'O capitulo foi eliminado com sucesso!');

        return back();
    }
}
