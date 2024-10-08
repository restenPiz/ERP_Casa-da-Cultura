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
        $events = event::all();
        return view('eventPages.index', compact('artists', 'events'));
    }
    public function detail($id)
    {
        $event = event::findOrFail($id);

        return view('eventPages.details', compact('event'));
    }
    public function store(Request $request)
    {
        $event = new event();

        $event->Name = $request->input('Name');
        $event->Date = $request->input('Date');
        $event->Location = $request->input('Location');
        $event->Number_of_speaker = $request->input('Number_of_speaker');
        $event->Hour = $request->input('Hour');
        $event->Price = $request->input('Price');
        $event->Description = $request->input('Description');
        $event->id_artist = $request->input('id_artist');

        if ($request->hasFile('Event_picture')) {
            $filePath = $request->file('Event_picture')->store('uploads/events', 'public');
            $event->Event_picture = $filePath;
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

        return redirect()->route('event.index');
    }
}
