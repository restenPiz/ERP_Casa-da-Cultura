<?php

namespace App\Http\Controllers;

use App\Models\artist;
use App\Models\event;
use Request;
use RealRashid\SweetAlert\Facades\Alert;

class eventController extends Controller
{
    public function index()
    {
        $artists = artist::all();
        $events = event::all();
        return view('eventPages.index', compact('artists', 'events'));
    }
    public function detail($id)
    {
        $events = event::findOrFail($id);

        return view('eventPages.details', compact('events'));
    }
    public function store()
    {
        $event = new event();

        $event->Name = Request::input('Name');
        $event->Date = Request::input('Date');
        $event->Location = Request::input('Location');
        $event->Number_of_speaker = Request::input('Number_of_speaker');
        $event->Hour = Request::input('Hour');
        $event->Price = Request::input('Price');
        $event->Description = Request::input('Description');
        $event->Event_picture = Request::input('Event_picture');
        $event->id_artist = Request::input('id_artist');

        if (Request::hasFile('Event_picture')) {
            Request::file('Event_picture')->store('uploads/events', 'public');
        }

        $event->save();

        Alert::success('Adicionado!', 'O Evento foi adicionado com sucesso!');

        return back();
    }
    public function update($id)
    {
        $event = event::findOrFail($id);

        $event->Date = Request::input('Date');
        $event->Location = Request::input('Location');
        $event->Number_of_speaker = Request::input('Number_of_speaker');
        $event->Hour = Request::input('Hour');
        $event->Description = Request::input('Description');
        $event->Event_picture = Request::input('Event_picture');
        $event->id_artist = Request::input('id_artist');

        $event->save();

        Alert::success('Actualizado!', 'O Evento foi actualizado com sucesso!');

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
