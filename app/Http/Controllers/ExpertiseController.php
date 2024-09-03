<?php

namespace App\Http\Controllers;

use App\Models\expertise;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class ExpertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $expertises = expertise::all();//->WHERE('ETAT',1);
        return view('Admin.expertise.index',compact('expertises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.expertise.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creation de nouveau expertise
        $expertise = new expertise;

        $expertise->titre = $request->titre;

        $expertise->detail = $request->detail;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/expertise');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(1920, 900);

            //enregistrement dans le dossier upload/expertise avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/expertise');


            //Stockage dans la base de donne
            $expertise->image = $fileName;
        } else

            $expertise->image = '';

        $expertise->save();

        return back()->with('message', 'L"EXPERTISE A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {

        $expertise = expertise::findOrfail($id);
        return view('Admin.expertise.view', compact('expertise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $expertise = expertise::findOrfail($id);

        return view('Admin.expertise.edit', compact('expertise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $expertise = expertise::find($id);

        $expertise->titre = $request->titre;

        $expertise->detail = $request->detail;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($expertise->image)) {
                $oldImagePath = public_path('/uploads/expertise/') . $expertise->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/expertise');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(1920, 600);
            $resize_image->save($destinationPath . '/' . $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $expertise->image;
        }

        // Update the image field with the temporary variable
        $expertise->image = $tempImageName;

        $expertise->save();

        return back()->with('message', 'L"EXPERTISE A ÉTÉ MODIFIER AVEC SUCCÉS ');
        //return view('Admin.expertise.index', compact('produits'))->with('message', 'LE A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //recuperation du expertise a partir de son id pour la suppression
        $expertise = expertise::findOrfail($id);
        $message = "";
        $erreur = "";
        if ($expertise->etat == 0) {

            $message = "EXPERTISE SUPPRIMER AVEC SUCCÉS";
            $expertise->delete();
        } else {
            $erreur = "SUPPRÉSSION EXPERTISE NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }
    public function active($id)
    {

        $expertise = expertise::findOrfail($id);

        if ($expertise->etat == 0) {
            $expertise->etat = 1;
            $message = "EXPERTISE ACTIVER ";
        } else {
            $expertise->etat = 0;
            $message = "EXPERTISE DESACTIVER ";
        }
        $expertise->save();

        return back()->with('message', $message);
    }
}
