<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Event;
use App\Models\Category;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::with(["category", "tags"])->paginate(9);
        return view("events.index", ["events" => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view("events.create", [
            "categories" => $categories,
            "tags" => $tags
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        // On peut aussi utiliser $request->validate() plutôt que le StoreEventRequest
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->category_id = $request->category_id;
        $event->save();

        // Il est nécessaire de posséder un id de $event avant de générer les FK avec les tags
        // Donc on le save puis on attach les mots clés associés
        $event->tags()->attach($request->tags);
        return redirect()->route("events.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view("events.show", [
            "event" => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view("events.edit", [
            "event" => $event,
            "categories" => $categories,
            "tags" => $tags
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->category_id = $request->category_id;
        $event->save();
        $event->tags()->sync($request->tags);
        return redirect()->route("events.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route("events.index");
    }
}
