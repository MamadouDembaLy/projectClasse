<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class ContactController extends Controller
{
    public function index()
    {
        //on recupére les différentes contacts dans notre model contact
        $contacts = contact::all();//->WHERE('etat',1);
        return view('Admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contacts = contact::all()->WHERE('ETAT',1);
        return view('Admin.contact.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //on stocke les valeurs de notre table dans save
        $contact = new contact;

        //enregistrement des donnes recuperer dans notre formulaire

        $contact->nom = $request->nom;

        $contact->email = $request->email;

        $contact->sujet = $request->sujet;

        $contact->message = $request->message;

        //enregistrement dans la base
        $contact->save();

        //on retourne sur le formulaire en lui envoyant le messagee de
        return back()->with('message', 'message envoyés avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //affichage du contact
        $contact = contact::all()->where('id', $id)->first();

        return view('Admin.contact.view', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //recuperation du contact en fonction de l'id passer en paramètre
        $contact = contact::findOrfail($id);

        return view('Admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //modification des valeur dont l'id = $id
        $contact = contact::find($id);

        $contact->nom = $request->nom;

        $contact->prenom = $request->prenom;

        $contact->email = $request->email;

        $contact->tel = $request->telephone;

        $contact->adresse = $request->adresse;

        //enregistrement dans la base
        $contact->save();

        //on retourne sur le formulaire en lui envoyant le messagee de
        return back()->with('message', 'LE FOURNISSEUR A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //recuperation du contact a partir de son id pour la suppression
        $contact = contact::findOrfail($id);

        $message = "";
        $erreur = "";



        if ($contact->etat==0) //1
        {

            $message = "contact SUPPRIMER AVEC SUCCÉS";
            $contact->delete();

        } else {
            $erreur = "SUPPRÉSSION contact NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }

    //CREATION D'UNE FONCTION POUR ACTIVÉ L'ETAT DU contact
    public function active($id)
    {

        $contact = contact::findOrfail($id);

        if ($contact->etat == 0) {

            $contact->etat = 1;
            $message = "contact ACTIVER ";
        } else {
            $contact->etat = 0;
            $message = "contact DESACTIVER ";
        }
        $contact->save();

        return back()->with('message',$message);
    }
}
