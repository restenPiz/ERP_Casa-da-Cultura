<?php

namespace App\Http\Controllers;

use App\Models\artist;
use App\Models\event;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class eventController extends Controller
{
    public function index()
    {
        $artists = artist::all();
        return view('eventPages.index', compact('artists'));
    }
    public function store()
    {
        $event = new event();

        $event->Date = Request::input('Date');
        $event->Location = Request::input('Location');
        $event->Number_of_speaker = Request::input('Number_of_speaker');
        $event->Hour = Request::input('Hour');
        $event->Description = Request::input('Description');
        $event->Event_picture = Request::input('Event_picture');
        $event->id_artist = Request::input('id_artist');

        $event->save();

        Alert::success('Adicionado!', 'O Evento foi adicionado com sucesso!');

        return back();
    }
    public function delete($id)
    {
        $events = event::findOrFail($id);

        $events->delete();

        Alert::success('Eliminado!', 'O Evento foi eliminado com sucesso!');

        return back();
    }
}
