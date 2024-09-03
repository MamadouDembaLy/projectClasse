<?php

namespace App\Http\Controllers;

use App\Models\partenaire;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $partenaires = partenaire::all(); //->where('etat',1);

        return view('Admin.partenaire.index', compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.partenaire.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $partenaire = new partenaire();

        $partenaire->nom = $request->nomPartenaire;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/Partenaire');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(1920, 600);

            //enregistrement dans le dossier upload/partenaire avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/Partenaire');


            //Stockage dans la base de donne
            $partenaire->image = $fileName;
        } else

            $partenaire->image = '';

        $partenaire->save();

        return back()->with('message', 'LE partenaire A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $partenaire = partenaire::all()->where('id', $id)->first();

        return view('Admin.partenaire.view', compact('partenaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $partenaire = partenaire::findOrfail($id);

        return view('Admin.partenaire.edit', compact('partenaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $partenaire = partenaire::find($id);

        $partenaire->nom = $request->nomPartenaire;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($partenaire->image)) {
                $oldImagePath = public_path('/uploads/Partenaire/') . $partenaire->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/Partenaire');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(1920, 600);
            $resize_image->save($destinationPath . '/' . $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $partenaire->image;
        }

        // Update the image field with the temporary variable
        $partenaire->image = $tempImageName;

        $partenaire->save();


        return back()->with('message', 'LE partenaire A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $partenaire = partenaire::find($id);

        if ($partenaire) {

            $imageFileName = $partenaire->image;
            // Vérifiez si l'image existe et supprimez-le du stockage
            if (!empty($imageFileName)) {
                $imagePath = public_path('/uploads/Partenaire/') . $imageFileName;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $partenaire->delete();
            $message = "partenaire supprimer avec succes";
        } else {
            $erreur = "SUPPRÉSSION partenaire NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }

    public function active($id)
    {

        $partenaire = partenaire::findOrfail($id);

        if ($partenaire->etat == 0) {

            $partenaire->etat = 1;

            $message = "partenaire ACTIVER ";
        } else {

            $partenaire->etat = 0;

            $message = "partenaire DESACTIVER ";
        }

        $partenaire->save();

        return back()->with('message', $message);
    }
}
