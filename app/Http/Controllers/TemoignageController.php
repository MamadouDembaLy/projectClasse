<?php

namespace App\Http\Controllers;

use App\Models\temoignage;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $temoignage = temoignage::all();//->WHERE('ETAT',1);
        return view('Admin.temoignage.index',compact('temoignage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.temoignage.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creation de nouveau temoignage
        $temoignage = new temoignage;

        $temoignage->nom = $request->nom;

        $temoignage->poste = $request->poste;

        $temoignage->entreprise = $request->entreprise;

        $temoignage->detail = $request->detail;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/temoignage');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(1920, 900);

            //enregistrement dans le dossier upload/temoignage avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/temoignage');


            //Stockage dans la base de donne
            $temoignage->image = $fileName;
        } else

            $temoignage->image = '';

        $temoignage->save();

        return back()->with('message', 'LE TEMOIGNAGE A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $temoignage = temoignage::findOrfail($id);
        return view('Admin.temoignage.view', compact('temoignage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $temoignage = temoignage::findOrfail($id);

        return view('Admin.temoignage.edit', compact('temoignage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $temoignage = temoignage::find($id);

        $temoignage->nom = $request->nom;

        $temoignage->poste = $request->poste;

        $temoignage->entreprise = $request->entreprise;

        $temoignage->detail = $request->detail;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($temoignage->image)) {
                $oldImagePath = public_path('/uploads/temoignage/') . $temoignage->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/temoignage');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(1920, 600);
            $resize_image->save($destinationPath . '/' . $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $temoignage->image;
        }

        // Update the image field with the temporary variable
        $temoignage->image = $tempImageName;

        $temoignage->save();


        return back()->with('message', 'LE temoignage A ÉTÉ MODIFIER AVEC SUCCÉS ');
        //return view('Admin.temoignage.index', compact('produits'))->with('message', 'LE A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $temoignage = temoignage::find($id);

        if ($temoignage) {

            $imageFileName = $temoignage->image;
            // Vérifiez si l'image existe et supprimez-le du stockage
            if (!empty($imageFileName)) {
                $imagePath = public_path('/uploads/temoignage/') . $imageFileName;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }


            $temoignage->delete();
            $message = "temoignage supprimer avec succes";
        } else {

            $erreur = "SUPPRÉSSION temoignage NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }

    public function active($id)
    {

        $temoignage = temoignage::findOrfail($id);

        if ($temoignage->etat == 0) {

            $temoignage->etat = 1;

            $message = "temoignage ACTIVER ";
        } else {

            $temoignage->etat = 0;

            $message = "temoignage DESACTIVER ";
        }

        $temoignage->save();

        return back()->with('message', $message);
    }
}
