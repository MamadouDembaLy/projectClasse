<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\equipe;
use App\Models\expertise;
use App\Models\page;
use App\Models\partenaire;
use App\Models\pub;
use App\Models\slide;
use App\Models\temoignage;
use Illuminate\Http\Request;

class Accueil2Controller extends Controller
{
    public function Accueil(){

        $slides = slide::all();//->where('etat',1);
        $equipes = equipe::all();
        $expertises = expertise::all();
        $partenaires = partenaire::all();
        $pubs = pub::all();
        $temoignages = temoignage::all();
        $pages = page::all();

        return view('Front2.page.main',compact('slides','partenaires','equipes','expertises','partenaires','pubs','temoignages','pages'));
    }

    public function about(){
        $pages = page::all();
        return view('Front2.a_propos',compact('pages'));
    }

    public function service(){

        $expertise = expertise::all()->where('etat',1);

        return view('Front2.service',compact('expertise'));
    }

    public function blog(){

        $blog = blog::all()->where('etat',1);

        return view('Front2.blog',compact('blog'));
    }

    public function contact(){

        return view('Front2.contact');
    }

}
