<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\produit;
use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Laravel\Facades\Image;


//use Image;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $produits = produit::all(); //->where('etat',1);
        return view('Admin.produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        //
        $categories = categorie::all()->where('etat', 1);
        return view('Admin.produits.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creation de nouveau produit
        $savePro = new produit;

        //recuperation de l'annee en cours
        $exe = date('Y');

        //on prend les deux premier chiffre de lannee en cour
        $date = substr($exe, 2);

        //declaration dune variable
        $zero = '00000';

        //association du mot ref a la date
        $numero = "REF.$date";

        //requette pour compter le nombre de produit
        $nombre = produit::all()->count();

        $nombre++;

        if ($nombre < 10) {

            $zero = substr($zero, 0, strlen($zero) - 1);
        } elseif ($nombre > 100) {

            $zero = substr($zero, 0, strlen($zero) - 2);
        } else

            $zero = substr($zero, 0, strlen($zero) - 3);

        $numero .= $zero . $nombre;

        $savePro->reference = $numero;

        $savePro->nomProduit = $request->nomProduit;

        $savePro->categorie_id = $request->idCat;

        $savePro->qte = $request->quantite;

        $savePro->pu = $request->pu;

        $savePro->Description = $request->description;

        $savePro->seuil = $request->seuil;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/Produit');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(900, 500);

            //enregistrement dans le dossier upload/Produit avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/Produit');


            //Stockage dans la base de donne
            $savePro->image = $fileName;
        } else

            $savePro->image = '';

        //recuperation de  lemail de l'utilisateur connecte et de l'id
        $user = User::all()->where('email', '=', Auth::user()->email)->first();

        $savePro->user_id = $user->id;

        $savePro->save();

        return back()->with('message', 'LE PRODUIT A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $nomCategories = "";
        //affichage du categories
        $produit = produit::all()->where('id', $id)->first();

        $cat_id = $produit->categorie_id;

        $nomCat = categorie::all()->where('id', $cat_id)->first();


        $categoriesTout = categorie::all();

        if ($cat_id === 0) {

            $nomParent = "";
            return view('Admin.produits.view', compact('produit', 'nomParent', 'categoriesTout'));
        } else {

            $nomParent = $nomCat->nomCategories;
            return view('Admin.produits.view', compact('produit', 'nomParent', 'categoriesTout',));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $produitOne = produit::findOrfail($id);
        $categoriesT = categorie::all();

        return view('Admin.produits.edit', compact('produitOne', 'categoriesT'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $savePro = produit::find($id);

        $exe = date('Y');

        //on prend les deux premier chiffre de lannee en cour
        $date = substr($exe, 2);

        //declaration dune variable
        $zero = '00000';

        //association du mot ref a la date
        $numero = "REF.$date";

        //requette pour compter le nombre de produit
        $nombre = produit::all()->count();

        $nombre++;

        if ($nombre < 10) {

            $zero = substr($zero, 0, strlen($zero) - 1);
        } elseif ($nombre > 100) {

            $zero = substr($zero, 0, strlen($zero) - 2);
        } else

            $zero = substr($zero, 0, strlen($zero) - 3);

        $numero .= $zero . $nombre;

        $savePro->reference = $numero;

        $savePro->nomProduit = $request->nomProduit;

        $savePro->categorie_id = $request->idCat;

        $savePro->qte = $request->quantite;

        $savePro->pu = $request->pu;

        $savePro->Description = $request->description;

        $savePro->seuil = $request->seuil;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($savePro->image)) {
                $oldImagePath = public_path('/uploads/Produit/') . $savePro->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/Produit');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(900, 500);
            $resize_image->save($destinationPath . '/' . $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $savePro->image;
        }

        // Update the image field with the temporary variable
        $savePro->image = $tempImageName;

        //recuperation de  lemail de l'utilisateur connecte et de l'id
        $user = User::all()->where('email', '=', Auth::user()->email)->first();

        $savePro->user_id = $user->id;

        $savePro->save();

        $produits = produit::all();
        //$message='LE PRODUIT A ETE MODIFIER AVEC SUCCES';

        //return back()->with('message', 'LE PRODUIT A ÉTÉ AJOUTER AVEC SUCCÉS ');
        return view('Admin.produits.index', compact('produits'))->with('message', 'LE A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $produit = produit::find($id);

        if ($produit) {

            $imageFileName = $produit->image;

            // Vérifiez si l'image existe et supprimez-le du stockage
            if (!empty($imageFileName)) {
                $imagePath = public_path('/uploads/Produit/') . $imageFileName;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }


            $produit->delete();
            $message = "produit supprimer avec succes";
        } else {
            $erreur = "SUPPRÉSSION produit NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }

    public function active($id)
    {

        $produit = produit::findOrfail($id);

        if ($produit->etat == 0) {

            $produit->etat = 1;

            $message = "PRODUIT ACTIVER ";
        } else {

            $produit->etat = 0;

            $message = "PRODUIT DESACTIVER ";
        }

        $produit->save();

        return back()->with('message', $message);
    }
}
