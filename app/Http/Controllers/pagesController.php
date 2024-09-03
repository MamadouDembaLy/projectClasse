<?php

namespace App\Http\Controllers;

use App\Models\page;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class pagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pages = page::all();
        return view('Admin.pageAdm.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.pageAdm.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //creation de nouveau slide
        $savePage = new page();

        $savePage->nom = $request->nomPage;

        $savePage->contenu = $request->contenu;

        $savePage->url = $request->url;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/Page');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(1920, 600);

            //enregistrement dans le dossier upload/blog avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/Page');


            //Stockage dans la base de donne
            $savePage->image = $fileName;
        } else

            $savePage->image = '';

        $savePage->save();

        return back()->with('message', 'LA PAGE A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $page = page::all()->where('id', $id)->first();

        return view('Admin.pageAdm.view', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $page = page::findOrFail($id);
        return view('Admin.pageAdm.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        //creation de nouveau slide
        $savePage = page::find($id);

        $savePage->nom = $request->nomPage;

        $savePage->contenu = $request->contenu;

        $savePage->url = $request->url;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($savePage->image)) {
                $oldImagePath = public_path('/uploads/Page/'). $savePage->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/Page');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(1920, 600);
            $resize_image->save($destinationPath .'/'. $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $savePage->image;
        }

        // Update the image field with the temporary variable
        $savePage->image = $tempImageName;

        $savePage->save();

        return back()->with('message', 'LA PAGE A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $page = page::find($id);

        if ($page) {

            $imageFileName = $page->image;

            // Vérifiez si l'image existe et supprimez-le du stockage
            if (!empty($imageFileName)) {
                $imagePath = public_path('/uploads/Page/') . $imageFileName;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $page->delete();
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

        $page = page::findOrfail($id);

        if ($page->etat == 0) {

            $page->etat = 1;

            $message = "PAGE ACTIVER ";
        } else {

            $page->etat = 0;

            $message = "PAGE DESACTIVER ";
        }

        $page->save();

        return back()->with('message', $message);
    }
}
