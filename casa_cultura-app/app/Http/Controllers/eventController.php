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
        $artists = artist::all();

        return view('eventPages.details', compact('event', 'artists'));
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
    public function update(Request $request, $id)
    {
        $event = event::findOrFail($id);

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
        } else {
            $event->Event_picture;
        }

        $event->save();

        Alert::success('Actualizado!', 'O Evento foi actulizado com sucesso!');

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
