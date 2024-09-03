<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //on recupére les différentes clients dans notre model client
        $clients = Client::all();//->WHERE('etat',1);
        return view('Admin.Client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all()->WHERE('ETAT',1);
        return view('Admin.Client.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //on stocke les valeurs de notre table dans save
        $client = new Client;

        //enregistrement des donnes recuperer dans notre formulaire

        $client->nom = $request->nom;

        $client->prenom = $request->prenom;

        $client->email = $request->email;

        $client->tel = $request->telephone;

        $client->adresse = $request->adresse;

        //enregistrement dans la base
        $client->save();

        //on retourne sur le formulaire en lui envoyant le messagee de 
        return back()->with('message', 'Le client a ete cree avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //affichage du client
        $client = Client::all()->where('id', $id)->first();

        return view('Admin.Client.view', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //recuperation du client en fonction de l'id passer en paramètre
        $client = Client::findOrfail($id);

        return view('Admin.Client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //modification des valeur dont l'id = $id
        $client = Client::find($id);

        $client->nom = $request->nom;

        $client->prenom = $request->prenom;

        $client->email = $request->email;

        $client->tel = $request->telephone;

        $client->adresse = $request->adresse;

        //enregistrement dans la base
        $client->save();

        //on retourne sur le formulaire en lui envoyant le messagee de 
        return back()->with('message', 'LE FOURNISSEUR A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //recuperation du client a partir de son id pour la suppression
        $client = Client::findOrfail($id);

        $message = "";
        $erreur = "";



        if ($client->etat==0) //1
        {

            $message = "CLIENT SUPPRIMER AVEC SUCCÉS";
            $client->delete();
            
        } else {
            $erreur = "SUPPRÉSSION CLIENT NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }

    //CREATION D'UNE FONCTION POUR ACTIVÉ L'ETAT DU CLIENT
    public function active($id)
    {

        $client = Client::findOrfail($id);

        if ($client->etat == 0) {

            $client->etat = 1;
            $message = "CLIENT ACTIVER ";
        } else {
            $client->etat = 0;
            $message = "CLIENT DESACTIVER ";
        }
        $client->save();
        
        return back()->with('message',$message);
    }
}
