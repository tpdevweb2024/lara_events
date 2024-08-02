<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Event;
use App\Models\Category;
use App\Mail\eventInsertedMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Mail\eventUpdatedMail;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $per_page = request("per_page", 10);
        $events = Event::with(["category", "tags"])->paginate($per_page);
        return view("events.index", [
            "events" => $events
        ]);
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

        // On evoie un email si l'event a été créé
        Mail::to("admin@gmail.com")->send(new eventInsertedMail($event));

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

        Mail::to("admin@gmail.com")->send(new eventUpdatedMail());


        return redirect()->route("events.show", $event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route("events.index");
    }

    public function today()
    {
        $events = Event::where("date", "<", date("2024-08-03"))->paginate();
        return view("events.index", [
            "events" => $events
        ]);
    }

    public function tomorrow()
    {
        $events = Event::where("date", ">", date("2024-08-03 00:00:00"))->where("date", "<", date("2024-08-04 00:00:00"))->paginate();
        return view("events.index", [
            "events" => $events
        ]);
    }

    public function api()
    {
        $events = Event::with(["category", "tags"])->get();
        return response()->json($events);
    }
    public function apiShow(Event $event)
    {
        $events = Event::with(["category", "tags"])->find($event->id);
        return response()->json($events);
    }
}
