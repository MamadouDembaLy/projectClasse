<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\type_event;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evenements = Evenement::all();
        return view('Admin.evenement.index',compact('evenements'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typeEvents = type_event::all();
        return view('Admin.evenement.add',compact('typeEvents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evenement = new evenement();
        $evenement->titre_event = $request->titre;
        $evenement->detail = $request->detail;
        $evenement->lieu = $request->lieu;
        $evenement->prix = $request->prix;
        $evenement->date_debut = $request->date_debut;
        $evenement->date_fin = $request->date_fin;
        $evenement->type_event_id = $request->type_event_id;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/evenement');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(900, 500);

            //enregistrement dans le dossier upload/evenement avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/evenement');

            //Stockage dans la base de donne
            $evenement->image = $fileName;
        } else

        $evenement->image = '';

        $evenement->save();

        return back()->with('message', 'L\'evenement A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $evenements = evenement::findOrFail($id);
        $typeEvents = type_event::all();
        return view('Admin.evenement.view',compact('evenements','typeEvents'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $evenement = evenement::findOrFail($id);
        $typeEvents = type_event::all();
        return view('Admin.evenement.edit',compact('evenement','typeEvents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $evenement = evenement::find($id);
        $evenement->titre_event = $request->titre;
        $evenement->detail = $request->detail;
        $evenement->lieu = $request->lieu;
        $evenement->prix = $request->prix;
        $evenement->date_debut = $request->date_debut;
        $evenement->date_fin = $request->date_fin;
        $evenement->type_event_id = $request->type_event_id;
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($evenement->image)) {
                $oldImagePath = public_path('/uploads/evenement/') . $evenement->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/evenement');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(1920, 600);
            $resize_image->save($destinationPath . '/' . $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $evenement->image;
        }

        // Update the image field with the temporary variable
        $evenement->image = $tempImageName;

        $evenement->save();

        return back()->with('message', 'L\' EVENEMENT A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $evenement = evenement::find($id);
        if ($evenement) {
            $imageFileName = $evenement->image;
            // Vérifiez si l'image existe et supprimez-le du stockage
            if (!empty($imageFileName)) {
                $imagePath = public_path('/uploads/evenement/') . $imageFileName;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $evenement->delete();
            $message = "evenement supprimer avec succes";
        } else {
            $erreur = "SUPPRÉSSION evenement NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }
    public function active($id)
    {
        $evenement = evenement::findOrfail($id);
        if ($evenement->etat == 0) {
            $evenement->etat = 1;
            $message = "evenement ACTIVER ";
        } else {
            $evenement->etat = 0;
            $message = "evenement DESACTIVER ";
        }
        $evenement->save();
        return back()->with('message', $message);
    }
}
