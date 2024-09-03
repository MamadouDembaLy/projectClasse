<?php

namespace App\Http\Controllers;

use App\Models\coordonne;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class CoordonneController extends Controller
{
    public function index()
    {
        $coordonnees = coordonne::all();//->WHERE('ETAT',1);
        return view('Admin.coordonne.index',compact('coordonnees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.coordonne.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //creation de nouveau coordonne
        $coordonne = new coordonne;

        $coordonne->tel = $request->telephone;

        $coordonne->email = $request->email;

        $coordonne->adresse = $request->adresse;

        $coordonne->localisation = $request->localisation;

        $coordonne->save();

        return back()->with('message', 'coordonne A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $coordonne = coordonne::findOrfail($id);
        return view('Admin.coordonne.view', compact('coordonne'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $coordonnes = coordonne::all()->where('id', $id)->first();
        return view('Admin.coordonne.edit', compact('coordonnes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $coordonne = coordonne::find($id);

        $coordonne->tel = $request->telephone;

        $coordonne->email = $request->email;

        $coordonne->adresse = $request->adresse;

        $coordonne->localisation = $request->localisation;

        $coordonne->save();

        return back()->with('message', 'COORDONNES A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //recuperation du coordonne a partir de son id pour la suppression
        $coordonne = coordonne::findOrfail($id);
        $message = "";
        $erreur = "";
        if ($coordonne->etat == 0) {

            $message = "COORDONNES SUPPRIMER AVEC SUCCÉS";
            $coordonne->delete();
        } else {
            $erreur = "SUPPRÉSSION COORDONNES NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }
    public function active($id)
    {

        $coordonne = coordonne::findOrfail($id);

        if ($coordonne->etat == 0) {
            $coordonne->etat = 1;
            $message = "COORDONNES ACTIVER ";
        } else {
            $coordonne->etat = 0;
            $message = "COORDONNES DESACTIVER ";
        }
        $coordonne->save();

        return back()->with('message', $message);
    }
}
