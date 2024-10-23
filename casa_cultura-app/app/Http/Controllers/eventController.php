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
        $event = event::with('artists')->findOrFail($id);
        $artists = artist::all();

        return view('eventPages.details', compact('event', 'artists'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required|string|max:255',
            'id_artist' => 'required|exists:artists,id',
            'Location' => 'required|string|max:255',
            'Number_of_speaker' => 'required|integer',
            'Date' => 'required|date',
            'Hour' => 'required|date_format:H:i',
            'Event_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480',
            'Price' => 'nullable|numeric|min:0',
            'Description' => 'nullable|string|max:1000',
        ]);

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
        $validatedData = $request->validate([
            'Name' => 'required|string|max:255',
            'id_artist' => 'required|exists:artists,id',
            'Location' => 'required|string|max:255',
            'Number_of_speaker' => 'required|integer',
            'Date' => 'required|date',
            'Hour' => 'required|date_format:H:i',
            'Event_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Price' => 'nullable|numeric|min:0',
            'Description' => 'nullable|string|max:1000',
        ]);

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
