<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = blog::all();//->WHERE('ETAT',1);
        return view('Admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creation de nouveau blog
        $blog = new blog;

        $blog->titre = $request->titreBlog;

        $blog->detail = $request->detailBlog;

        if ($request->hasFile('image')) {

            //recuperation de limage envoye quon stocke sur $file
            $file = $request->file('image');

            //recuperation de lextension de limage
            $extension = $file->getClientOriginalExtension();

            //formatage du nom
            $fileName = '-img-' . time() . '.' . $extension;

            //destination ou on va stocker le fichier
            $destinationPath = public_path('/uploads/blog');

            //Ajout du chemin

            $resize_image = Image::read($file->getRealPath());

            //redimension de limage
            $resize_image->resize(1920, 600);

            //enregistrement dans le dossier upload/blog avec le methode store
            $resize_image->save($destinationPath . '/' . $fileName);

            //la variable en dessous stocke le chemin dacces relatif au fichier
            $destinationPath = $request->file('image')->store('uploads/blog');


            //Stockage dans la base de donne
            $blog->image = $fileName;
        } else

            $blog->image = '';

        $blog->save();

        return back()->with('message', 'LE BLOG A ÉTÉ AJOUTER AVEC SUCCÉS ');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $blog = blog::all()->where('id', $id)->first();
        return view('Admin.blog.view', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $blog = blog::findOrfail($id);
        return view('Admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $blog = blog::find($id);

        $blog->titre = $request->titreBlog;

        $blog->detail = $request->detailBlog;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($blog->image)) {
                $oldImagePath = public_path('/uploads/blog/') . $blog->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and process the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = '-img-' . time() . '.' . $extension;
            $destinationPath = public_path('/uploads/blog');

            $resize_image = Image::read($file->getRealPath());
            $resize_image->resize(1920, 600);
            $resize_image->save($destinationPath . '/' . $fileName);

            // Assign the new file name to a temporary variable
            $tempImageName = $fileName;
        } else {
            // No new image uploaded, keep the existing image
            $tempImageName = $blog->image;
        }

        // Update the image field with the temporary variable
        $blog->image = $tempImageName;

        $blog->save();

        return back()->with('message', 'LE blog A ÉTÉ MODIFIER AVEC SUCCÉS ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //recuperation du blog a partir de son id pour la suppression
        $blog = blog::findOrfail($id);
        $message = "";
        $erreur = "";
        if ($blog->etat == 0) {

            $message = "BLOG SUPPRIMER AVEC SUCCÉS";
            $blog->delete();
        } else {
            $erreur = "SUPPRÉSSION BLOG NON AUTORISÉ";
        }

        if ($message != '') {
            return back()->with('message', $message);
        } else {
            return back()->with('erreur', $erreur);
        }
    }

    public function active($id)
    {

        $blog = blog::findOrfail($id);

        if ($blog->etat == 0) {
            $blog->etat = 1;
            $message = "BLOG ACTIVER ";
        } else {
            $blog->etat = 0;
            $message = "BLOG DESACTIVER ";
        }
        $blog->save();

        return back()->with('message', $message);
    }
}
