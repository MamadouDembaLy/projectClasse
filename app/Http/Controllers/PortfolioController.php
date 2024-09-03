<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
class PortfolioController extends Controller
{

    public function index()
    {
        $portfolios = portfolio::all();//->WHERE('ETAT',1);
        return view('Admin.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.portfolio.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creation de nouveau portfolio
        $portfolio = new portfolio;

        $portfolio->titre = $request->titre;

        $portfolio->catégorie = $request->categorie;

        $portfolio->tags = $request->tags;

        $portfolio->client = $request->client;

        $portfolio->date = $request->date;

        $portfolio->detail = $request->detail;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/portfolio');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(1920, 600);

            //enregistrement dans le dossier upload/portfolio avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/portfolio');


            //Stockage dans la base de donne
            $portfolio->image = $fileName;
        } else

            $portfolio->image = '';

        $portfolio->save();

        return back()->with('message', 'AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $portfolio = portfolio::all()->where('id', $id)->first();
        return view('Admin.portfolio.view', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $portfolio = portfolio::findOrfail($id);
        return view('Admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $portfolio = portfolio::find($id);

        $portfolio->titre = $request->titre;

        $portfolio->catégorie = $request->categorie;

        $portfolio->tags = $request->tags;

        $portfolio->client = $request->client;

        $portfolio->date = $request->date;

        $portfolio->detail = $request->detail;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($portfolio->image)) {
                $oldImagePath = public_path('/uploads/portfolio/') . $portfolio->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/portfolio');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(1920, 600);
            $resize_image->save($destinationPath . '/' . $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $portfolio->image;
        }

        // Update the image field with the temporary variable
        $portfolio->image = $tempImageName;

        $portfolio->save();

        return back()->with('message', 'LE portfolio A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //recuperation du portfolio a partir de son id pour la suppression
        $portfolio = portfolio::findOrfail($id);
        $message = "";
        $erreur = "";
        if ($portfolio->etat == 0) {

            $message = "portfolio SUPPRIMER AVEC SUCCÉS";
            $portfolio->delete();
        } else {
            $erreur = "SUPPRÉSSION portfolio NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }

    public function active($id)
    {

        $portfolio = portfolio::findOrfail($id);

        if ($portfolio->etat == 0) {
            $portfolio->etat = 1;
            $message = "portfolio ACTIVER ";
        } else {
            $portfolio->etat = 0;
            $message = "portfolio DESACTIVER ";
        }
        $portfolio->save();

        return back()->with('message', $message);
    }
}
