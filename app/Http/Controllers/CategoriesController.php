<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = categorie::all();//->WHERE('ETAT',1);
        return view('Admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //on retourne les categories dont letat est egal a 1
        $categories = categorie::all()->WHERE('etat', 1);
        return view('Admin.categories.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //on stocke les valeurs de notre table dans save
        $categories = new categorie;

        //enregistrement des donnes recuperer dans notre formulaire

        $categories->nomCategories = $request->nomCategories;

        if ($categories->parent = '') {

            $categories->parent = 0;

            $categories->type = 0;
        } else {

            $categories->parent = $request->parent;
            $categories->type = 1;
        }

        $categories->deletable = 0;

        $categories->etat = 0;



        //enregistrement dans la base
        $categories->save();

        //on retourne sur le formulaire en lui envoyant le messagee de 
        return back()->with('message', 'La categories a ete cree avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $nomParent="";
        //affichage du categories
        $categories = categorie::all()->where('id', $id)->first();

        $parent_id = $categories->parent;
        
        $nomParentId= categorie::all()->where('id',$parent_id)->first();

        if($parent_id===0){

            $nomParent="";
            return view('Admin.categories.view', compact('categories','nomParent'));
        }
        else{

            $nomParent = $nomParentId->nomCategories;
            return view('Admin.categories.view', compact('categories','nomParent'));
            
        }


       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        //recuperation du categories en fonction de l'id passer en paramètre
        $NomParent = "";

        $categories = categorie::findOrfail($id);

        $categoriesTout = categorie::all();

        $idparent = $categories->parent;

        $Parentall = categorie::all()->where('id', $idparent)->first();

        if ($idparent == 0) {

            $NomParent = "";

            return view('Admin.categories.edit', compact('categories', 'NomParent', 'categoriesTout'));

        } else {

            $NomParent = $Parentall->nomCategories;

            return view('Admin.categories.edit', compact('categories', 'NomParent', 'categoriesTout'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        //modification des valeur dont l'id = $id
        $categoriesID = categorie::find($id);

        $categoriesID->nomCategories = $request->nomCategories;

        if ($categoriesID->parent = "") {

            $categoriesID->parent = 0;

            $categoriesID->type = 0;
        } else {

            $categoriesID->parent = $request->parent;
            $categoriesID->type = 1;
        }

        //enregistrement dans la base
        $categoriesID->save();

        $categories = categorie::all();

        //on retourne sur le formulaire en lui envoyant le messagee de 
        //return back()->with('message', 'LA CATEGORIES A ÉTÉ MODIFIER AVEC SUCCÉS ');
        return view('Admin.categories.index', compact('categories'))->with('message', 'LA CATEGORIE A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        //recuperation du categories a partir de son id pour la suppression
        $categories = categorie::findOrfail($id);

        $message = "";
        $erreur = "";



        if ($categories->etat == 0) {

            $message = "categories SUPPRIMER AVEC SUCCÉS";
            $categories->delete();
        } else {
            $erreur = "SUPPRÉSSION categories NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }

    public function active($id)
    {

        $categories = categorie::findOrfail($id);

        if ($categories->etat == 0) {

            $categories->etat = 1;
            $message = "CATEGORIES ACTIVER ";
        } else {
            $categories->etat = 0;
            $message = "CATEGORIES DESACTIVER ";
        }
        $categories->save();

        return back()->with('message', $message);
    }
}
