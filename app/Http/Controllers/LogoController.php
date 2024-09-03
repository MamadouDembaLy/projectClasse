<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class LogoController extends Controller
{
    public function index()
    {
        $logos = logo::all();//->WHERE('ETAT',1);
        return view('Admin.logo.index',compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.logo.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creation de nouveau logo
        $logo = new logo;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/logo');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(1920, 600);

            //enregistrement dans le dossier upload/logo avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/logo');


            //Stockage dans la base de donne
            $logo->image = $fileName;
        } else

            $logo->image = '';

        $logo->save();

        return back()->with('message', 'LE logo A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $logo = logo::all()->where('id', $id)->first();
        return view('Admin.logo.view', compact('logo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $logo = logo::findOrfail($id);
        return view('Admin.logo.edit', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $logo = logo::find($id);

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($logo->image)) {
                $oldImagePath = public_path('/uploads/logo/') . $logo->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/logo');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(1920, 600);
            $resize_image->save($destinationPath . '/' . $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $logo->image;
        }

        // Update the image field with the temporary variable
        $logo->image = $tempImageName;

        $logo->save();

        return back()->with('message', 'LE logo A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //recuperation du logo a partir de son id pour la suppression
        $logo = logo::findOrfail($id);
        $message = "";
        $erreur = "";
        if ($logo->etat == 0) {

            $message = "logo SUPPRIMER AVEC SUCCÉS";
            $logo->delete();
        } else {
            $erreur = "SUPPRÉSSION logo NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }

    public function active($id)
    {

        $logo = logo::findOrfail($id);

        if ($logo->etat == 0) {
            $logo->etat = 1;
            $message = "logo ACTIVER ";
        } else {
            $logo->etat = 0;
            $message = "logo DESACTIVER ";
        }
        $logo->save();

        return back()->with('message', $message);
    }
}
