<?php

namespace App\Http\Controllers;

use App\Models\page;
use App\Models\pub;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;


class PubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pubs=pub::all();

        return view('Admin.pub.index',compact('pubs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pages=page::all();
        return view('Admin.pub.add',compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $savePub = new pub;

        $savePub->nom = $request->nompub;

        $savePub->position = $request->position;

        $savePub->page_id = $request->page_id;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/Pubs');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(900, 500);

            //enregistrement dans le dossier upload/slide avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/Pubs');


            //Stockage dans la base de donne
            $savePub->image = $fileName;
        } else

            $savePub->image = '';

        $savePub->save();

        return back()->with('message', 'LA PUB A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $pub = pub::all()->where('id', $id)->first();
        $page_id = $pub->page_id;
        $pageOne = page::all()->where('id',$page_id)->first();
        return view('Admin.pub.view', compact('pub','pageOne'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pub = pub::findOrFail($id);
        $page_id = $pub->page_id;
        $pageOne= page::all()->where('id',$page_id);
        $page=page::all();

        if($pub && $pageOne){
            return view('Admin.pub.edit', compact('pub','page','pageOne'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pub $pub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pub = pub::find($id);

        if ($pub) {

            $imageFileName = $pub->image;

            // Vérifiez si l'image existe et supprimez-le du stockage
            if (!empty($imageFileName)) {
                $imagePath = public_path('/uploads/Pubs/') . $imageFileName;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $pub->delete();
            $message = "page supprimer avec succes";
        } else {
            $erreur = "SUPPRÉSSION page NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }
    public function active($id)
    {

        $pub = pub::findOrfail($id);

        if ($pub->etat == 0) {

            $pub->etat = 1;

            $message = "PAGE ACTIVER ";
        } else {

            $pub->etat = 0;

            $message = "PAGE DESACTIVER ";
        }

        $pub->save();

        return back()->with('message', $message);
    }
}
