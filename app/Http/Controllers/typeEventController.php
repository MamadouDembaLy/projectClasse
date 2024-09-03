<?php

namespace App\Http\Controllers;

use App\Models\type_event;
use Illuminate\Http\Request;

class typeEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeEvents = type_event::all();
        return view('Admin.Type Event.index',compact('typeEvents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Admin.Type Event.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type_event = new type_event();
        $type_event->titre = $request->titre;

        $type_event->save();

        return back()->with('message', 'TYPE EVENT A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $type_event = type_event::findOrFail($id);
        return view('Admin.Type Event.view',compact('type_event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $type_event = type_event::findOrfail($id);
        return view('Admin.Type Event.edit', compact('type_event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $temoignage = type_event::find($id);
        $temoignage->titre = $request->titre;
        $temoignage->save();
        return back()->with('message', 'LE TYPE D\'EVENT A ÉTÉ MODIFIER AVEC SUCCÉS ');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //recuperation du type_event a partir de son id pour la suppression
        $type_event = type_event::findOrfail($id);

        $message = "";
        $erreur = "";



        if ($type_event->etat==0) //1
        {

            $message = "type_event SUPPRIMER AVEC SUCCÉS";
            $type_event->delete();

        } else {
            $erreur = "SUPPRÉSSION type_event NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }

    //CREATION D'UNE FONCTION POUR ACTIVÉ L'ETAT DU type_event
    public function active($id)
    {

        $type_event = type_event::findOrfail($id);

        if ($type_event->etat == 0) {

            $type_event->etat = 1;
            $message = "type_event ACTIVER ";
        } else {
            $type_event->etat = 0;
            $message = "type_event DESACTIVER ";
        }
        $type_event->save();

        return back()->with('message',$message);
    }
}
