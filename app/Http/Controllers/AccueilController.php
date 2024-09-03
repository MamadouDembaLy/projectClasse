<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;
use App\Models\pub;
use App\Models\slide;
use App\Models\page;
class AccueilController extends Controller
{
    public function Accueil(){

        $Slides = slide::all()->where('etat',1);
        $categories=categorie::all()->where('etat',1);

        return view('Front.page.main',compact('Slides','categories'));
    }

    
}
