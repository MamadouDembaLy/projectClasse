<?php

namespace App\Http\Controllers;

use App\Models\expertise;
use App\Models\formations;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
class formationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = formations::all();
        return view('Admin.formations.index',compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $expertises = expertise::all();
        return view('Admin.formations.add',compact('expertises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formation = new formations();
        $formation->titre = $request->titre;
        $formation->prix = $request->prix;
        $formation->date_debut = $request->date_debut;
        $formation->date_fin = $request->date_fin;
        $formation->detail = $request->detail;
        $formation->expertise_id = $request->expertise_id;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/formation');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(900, 500);

            //enregistrement dans le dossier upload/formation avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/formation');

            //Stockage dans la base de donne
            $formation->image = $fileName;
        } else

        $formation->image = '';

        $formation->save();

        return back()->with('message', 'LA FORMATION A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $formation = formations::findOrFail($id);
        return view('Admin.formations.view',compact('formation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $formation = formations::findOrFail($id);
        $expertises = expertise::all();
        return view('Admin.formations.edit',compact('formation','expertises'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $formation = formations::find($id);
        $formation->titre = $request->titre;
        $formation->prix = $request->prix;
        $formation->date_debut = $request->date_debut;
        $formation->date_fin = $request->date_fin;
        $formation->detail = $request->detail;
        $formation->expertise_id = $request->expertise_id;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($formation->image)) {
                $oldImagePath = public_path('/uploads/formation/') . $formation->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/formation');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(1920, 600);
            $resize_image->save($destinationPath . '/' . $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $formation->image;
        }

        // Update the image field with the temporary variable
        $formation->image = $tempImageName;

        $formation->save();

        return back()->with('message', 'LA FORMATION A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $formation = formations::find($id);

        if ($formation) {
            $imageFileName = $formation->image;

            // Vérifiez si l'image existe et supprimez-le du stockage
            if (!empty($imageFileName)) {
                $imagePath = public_path('/uploads/formation/') . $imageFileName;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $formation->delete();
            $message = "formation supprimer avec succes";
        } else {
            $erreur = "SUPPRÉSSION formation NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }
    public function active($id)
    {

        $formation = formations::findOrfail($id);

        if ($formation->etat == 0) {

            $formation->etat = 1;

            $message = "formation ACTIVER ";
        } else {

            $formation->etat = 0;

            $message = "formation DESACTIVER ";
        }

        $formation->save();

        return back()->with('message', $message);
    }
}
