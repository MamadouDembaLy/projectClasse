<?php

namespace App\Http\Controllers;

use App\Models\equipe;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipes = equipe::all();//->WHERE('ETAT',1);
        return view('Admin.equipe.index',compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.equipe.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //creation de nouveau equipe
        $equipe = new equipe;

        $equipe->nom = $request->nom;

        $equipe->prenom = $request->prenom;

        $equipe->poste = $request->poste;


        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/equipe');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(1920, 600);

            //enregistrement dans le dossier upload/equipe avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/equipe');


            //Stockage dans la base de donne
            $equipe->image = $fileName;
        } else

            $equipe->image = '';

        $equipe->save();

        return back()->with('message', 'L"EQUIPE A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $equipe = equipe::findOrfail($id);
        return view('Admin.equipe.view', compact('equipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $equipe = equipe::all()->where('id', $id)->first();
        return view('Admin.equipe.edit', compact('equipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $equipe = equipe::find($id);

        $equipe->nom = $request->nom;

        $equipe->prenom = $request->prenom;

        $equipe->poste = $request->poste;


        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($equipe->image)) {
                $oldImagePath = public_path('/uploads/equipe/') . $equipe->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/equipe');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(1920, 600);
            $resize_image->save($destinationPath . '/' . $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $equipe->image;
        }

        // Update the image field with the temporary variable
        $equipe->image = $tempImageName;

        $equipe->save();

        return back()->with('message', 'L"EQUIPE A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //recuperation du equipe a partir de son id pour la suppression
        $equipe = equipe::findOrfail($id);
        $message = "";
        $erreur = "";
        if ($equipe->etat == 0) {

            $message = "EQUIPE SUPPRIMER AVEC SUCCÉS";
            $equipe->delete();
        } else {
            $erreur = "SUPPRÉSSION EQUIPE NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }
    public function active($id)
    {

        $equipe = equipe::findOrfail($id);

        if ($equipe->etat == 0) {
            $equipe->etat = 1;
            $message = "EQUIPE ACTIVER ";
        } else {
            $equipe->etat = 0;
            $message = "EQUIPE DESACTIVER ";
        }
        $equipe->save();

        return back()->with('message', $message);
    }
}
