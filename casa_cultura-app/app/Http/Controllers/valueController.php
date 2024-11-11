<?php

namespace App\Http\Controllers;

use App\Models\value;
use RealRashid\SweetAlert\Facades\Alert;
use Request;

class valueController extends Controller
{
    public function store()
    {
        $values = new value();

        $values->First = Request::input('First');
        $values->Second = Request::input('Second');
        $values->Third = Request::input('Third');
        $values->id_user = Request::input('id_user');

        $values->save();

        Alert::success('Adicionado!', 'Nota de avaliacoes adicionada com sucesso!');

        return back();
    }
    public function update($id)
    {
        $values = value::findOrFail($id);

        $values->First = Request::input('First');
        $values->Second = Request::input('Second');
        $values->Third = Request::input('Third');
        $values->id_user = Request::input('id_user');

        $values->save();

        Alert::success('Actualizado!', 'Nota de avaliacoes actualizadas com sucesso!');

        return back();
    }
    public function delete($id)
    {
        $value = value::findOrFail($id);

        $value->delete();

        Alert::success('Eliminado!', 'A nota foi eliminada com sucesso!');

        return back();
    }
}
