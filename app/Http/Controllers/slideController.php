<?php

namespace App\Http\Controllers;

use App\Models\slide;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class slideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slides = slide::all(); //->where('etat',1);
        return view('Admin.slide.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $slides = slide::all()->where('etat', 1);

        return view('Admin.slide.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //creation de nouveau slide
        $saveSlide = new slide();

        $saveSlide->nom = $request->nomSlide;

        $saveSlide->message1 = $request->message1;

        $saveSlide->message2 = $request->message2;

        $saveSlide->url = $request->url;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/Slide');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(1920, 600);

            //enregistrement dans le dossier upload/slide avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/Slide');


            //Stockage dans la base de donne
            $saveSlide->image = $fileName;
        } else

        $saveSlide->image = '';

        $saveSlide->save();

        return back()->with('message', 'LE SLIDE A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $slide = slide::all()->where('id', $id)->first();

        return view('Admin.slide.view', compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $slide = slide::findOrfail($id);

        return view('Admin.slide.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $slide = slide::find($id);

        $slide->nom = $request->nomSlide;

        $slide->message1 = $request->message1;

        $slide->message2 = $request->message2;

        $slide->url = $request->url;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($slide->image)) {
                $oldImagePath = public_path('/uploads/Slide/') . $slide->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/Slide');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(1920, 600);
            $resize_image->save($destinationPath . '/' . $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $slide->image;
        }

        // Update the image field with the temporary variable
        $slide->image = $tempImageName;

        $slide->save();


        return back()->with('message', 'LE SLIDE A ÉTÉ MODIFIER AVEC SUCCÉS ');
        //return view('Admin.slide.index', compact('produits'))->with('message', 'LE A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $slide = slide::find($id);

        if ($slide) {

            $imageFileName = $slide->image;
            // Vérifiez si l'image existe et supprimez-le du stockage
            if (!empty($imageFileName)) {
                $imagePath = public_path('/uploads/Slide/') . $imageFileName;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }


            $slide->delete();
            $message = "slide supprimer avec succes";
        } else {

            $erreur = "SUPPRÉSSION SLIDE NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }

    public function active($id)
    {

        $slide = slide::findOrfail($id);

        if ($slide->etat == 0) {

            $slide->etat = 1;

            $message = "SLIDE ACTIVER ";
        } else {

            $slide->etat = 0;

            $message = "SLIDE DESACTIVER ";
        }

        $slide->save();

        return back()->with('message', $message);
    }
}
