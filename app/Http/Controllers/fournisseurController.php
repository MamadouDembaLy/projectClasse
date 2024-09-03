<?php

namespace App\Http\Controllers;

use App\Models\fournisseur;
use Illuminate\Http\Request;

class fournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fournisseurs =fournisseur::all();//->WHERE('ETAT',1);
        return view('Admin.fournisseur.index',compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.fournisseur.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        //on stocke les valeurs de notre table dans save
        $fournisseur = new fournisseur;

        //enregistrement des donnes recuperer dans notre formulaire

        $fournisseur->nom = $request->nom;  

        $fournisseur->prenom = $request->prenom;

        $fournisseur->email = $request->email;

        $fournisseur->tel = $request->telephone;

        $fournisseur->adresse = $request->adresse;

        $fournisseur->nom_entreprise = $request->nom_entreprise;

        $fournisseur->specialite = $request->specialite;

        $fournisseur->deletable = 0;

        $fournisseur->etat = 0;



        //enregistrement dans la base
        $fournisseur->save();

        //on retourne sur le formulaire en lui envoyant le messagee de 
        return back()->with('message','Le fournisseur a ete cree avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $fournisseur = fournisseur::all()->where('id',$id)->first();

        return view('Admin.fournisseur.view',compact('fournisseur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $fournisseur = fournisseur::findOrfail($id);

        return view('Admin.fournisseur.edit',compact('fournisseur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id )
    {
        //
        $fournisseur = fournisseur::find($id);

        $fournisseur->nom = $request->nom;  

        $fournisseur->prenom = $request->prenom;

        $fournisseur->email = $request->email;

        $fournisseur->tel = $request->telephone;

        $fournisseur->adresse = $request->adresse;

        $fournisseur->nom_entreprise = $request->nom_entreprise;

        $fournisseur->specialite = $request->specialite;

        $fournisseur->deletable = 0;

        $fournisseur->etat = 0;

        $fournisseur->save();

        //on retourne sur le formulaire en lui envoyant le messagee de 
        return back()->with('message','LE fournisseur A ÉTÉ MODIFIER AVEC SUCCÉS ');
        //return view('Admin.fournisseur.index',compact('fournisseur'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $fournisseur = fournisseur::findOrfail($id);
        $message="";
        $erreur="";

        

        if($fournisseur)//->etat==0)
        {
            $message="FOURNISSEUR SUPPRIMER AVEC SUCCÉS";
            $fournisseur->delete();

        }
        else{
            $erreur="SUPPRÉSSION FOURNISSEUR NON AUTORISÉ";
        }

        if($message !=''){
            return back()->with('message', $message);
        }else{
            return back()->with('erreur',$erreur);
        }

    }

    public function active($id)
    {

        $fournisseur = fournisseur::findOrfail($id);

        if ($fournisseur->etat == 0) {

            $fournisseur->etat = 1;

            $message = "fournisseur ACTIVER ";
        } else {
            $fournisseur->etat = 0;
            
            $message = "fournisseur DESACTIVER ";
        }
        $fournisseur->save();
        
        return back()->with('message',$message);
    }
}
