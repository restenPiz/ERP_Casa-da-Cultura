<?php

namespace App\Http\Controllers;

use App\Models\artist;
use Request;
use RealRashid\SweetAlert\Facades\Alert;

class artistController extends Controller
{
    public function index()
    {
        $artists = artist::all();

        return view('artistPage.index', compact('artists'));
    }
    public function store()
    {
        $artist = new artist();

        $artist->Name = Request::input('Name');
        $artist->Address = Request::input('Address');
        $artist->Cell_number = Request::input('Cell_number');
        $artist->Activity = Request::input('Activity');

        $artist->save();

        Alert::success('Adicionado', 'O artista foi adicionado com sucesso!');

        return back();
    }
    public function update($id)
    {
        $artist = artist::findOrFail($id);

        $artist->Name = Request::input('Name');
        $artist->Address = Request::input('Address');
        $artist->Cell_number = Request::input('Cell_number');
        $artist->Activity = Request::input('Activity');

        $artist->save();

        Alert::success('Actualizado!', 'O artista foi actualizado com sucesso!');

        return back();
    }
    public function delete($id)
    {
        $artist = artist::findOrFail($id);

        $artist->delete();

        Alert::success('Eliminado!', 'O artista foi eliminado com sucesso!');

        return back();
    }
}
