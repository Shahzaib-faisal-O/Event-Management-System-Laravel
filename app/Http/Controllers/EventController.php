<?php

namespace App\Http\Controllers;

use App\Models\Event; // Import the Event model
use App\Models\EventImage; // Import the EventImage model
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $events = Event::with('images')->paginate(10);
        return view('events.index', compact('events'));
    }
    
    public function create() {
        return view('events.create');
    }
    
    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'location' => 'required|string',
            'category' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $event = Event::create($validated);
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('event_images', 'public');
                EventImage::create(['event_id' => $event->id, 'image_path' => $path]);
            }
        }
    
        return redirect()->route('events.index');
    }
    
}
