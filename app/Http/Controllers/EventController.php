<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

use Flashy;

//pour avoir un controller avec toutes les methodes predefinis

//php artisan make:controller NomControllern -r
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $events = Event::paginate(2);

        return view('events.index',['events'=>$events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = new Event(); 
        return view('events.create', ['events'=>$events]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $events = new Event();

        $events->titre =  $request->titre;
        $events->description = $request->description;
       //le slug est gere au niveau du modele Event
        $events->save();

        Flashy::message("l'evenement a ete cree avec succés");

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show', ['events'=>$event]);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit',['events'=>$event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Event $event)
    {
        $event->update([
            'titre'=> $request->titre,
            'description'=>$request->description,
             //le slug est gere au niveau du modele Event
        ]);

        Flashy::message("l'evenement a ete modifier avec succés");
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        
        Flashy::error("l'evenement a ete supprimer avec succés");
        return $this->index();
    }
}
