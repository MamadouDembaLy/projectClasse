<?php

namespace App\Http\Controllers;

use App\Models\expertise;
use App\Models\offres;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class OffreControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offres = offres::all();
        return view('Admin.offres.index',compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $expertises = expertise::all();
        return view('Admin.offres.add',compact('expertises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $offre = new offres();
        $offre->titre = $request->titre;
        $offre->prix = $request->prix;
        $offre->promotion = $request->promotion;
        $offre->date_limit = $request->date_limit;
        $offre->promotion = $request->promotion;
        $offre->detail = $request->detail;
        $offre->expertise_id = $request->expertise_id;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/offre');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(900, 500);

            //enregistrement dans le dossier upload/offre avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/offre');

            //Stockage dans la base de donne
            $offre->image = $fileName;

        } else

        $offre->image = '';

        $offre->save();

        return back()->with('message', 'L"OFFRE A ÉTÉ AJOUTER AVEC SUCCÉS ');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $offre = offres::findOrFail($id);
        return view('Admin.offres.view',compact('offre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $offre = offres::findOrFail($id);
        $expertises = expertise::all();
        return view('Admin.offres.edit',compact('offre','expertises'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $offre = offres::find($id);
        $offre->titre = $request->titre;
        $offre->prix = $request->prix;
        $offre->promotion = $request->promotion;
        $offre->date_limit = $request->date_limit;
        $offre->promotion = $request->promotion;
        $offre->detail = $request->detail;
        $offre->expertise_id = $request->expertise_id;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($offre->image)) {
                $oldImagePath = public_path('/uploads/offre/') . $offre->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/offre');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(1920, 600);
            $resize_image->save($destinationPath . '/' . $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $offre->image;
        }

        // Update the image field with the temporary variable
        $offre->image = $tempImageName;

        $offre->save();

        return back()->with('message', 'L\'Offre A ÉTÉ MODIFIER AVEC SUCCÉS ');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $offre = offres::find($id);

        if ($offre) {
            $imageFileName = $offre->image;

            // Vérifiez si l'image existe et supprimez-le du stockage
            if (!empty($imageFileName)) {
                $imagePath = public_path('/uploads/offre/') . $imageFileName;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $offre->delete();
            $message = "offre supprimer avec succes";
        } else {
            $erreur = "SUPPRÉSSION offre NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }
    public function active($id)
    {

        $offre = offres::findOrfail($id);

        if ($offre->etat == 0) {

            $offre->etat = 1;

            $message = "offre ACTIVER ";
        } else {

            $offre->etat = 0;

            $message = "offre DESACTIVER ";
        }

        $offre->save();

        return back()->with('message', $message);
    }
}
