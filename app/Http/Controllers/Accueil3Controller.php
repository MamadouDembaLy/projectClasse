<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\coordonne;
use App\Models\equipe;
use App\Models\expertise;
use App\Models\logo;
use App\Models\page;
use App\Models\partenaire;
use App\Models\portfolio;
use App\Models\produit;
use App\Models\pub;
use App\Models\slide;
use App\Models\temoignage;

use Illuminate\Http\Request;

class Accueil3Controller extends Controller
{
    public function Accueil(){
        
        $slides = slide::all();//->where('etat',1);

        $equipes = equipe::all();

        $expertises = expertise::all()->take(3);

        $expertisesFooter = expertise::all()->take(4);

        $partenaires = partenaire::all();

        $pubs = pub::all();

        $temoignages = temoignage::all();

        $pages = page::all()->where('etat',1);

        $pagesFooter = page::all()->take(4);

        $teams = equipe::all()->where('etat',1);

        $portfolios = portfolio::all();//->where('etat',1);

        $coordonnes = coordonne::all();

        $logos=logo::all();

        $blogs = blog::all()->where('etat',1)->take(3);

        $temoignages = temoignage::all();

        $pageAbout = page::where('nom','A Propos')->first();

        return view('Front3.pages.main',compact('slides','partenaires',
        'equipes','expertises','partenaires','pubs','temoignages',
        'pages','teams','portfolios','coordonnes','pagesFooter',
        'expertisesFooter','logos','blogs','temoignages','pageAbout'));
    }

    public function about(){
        $pages = page::all();
        $slidesTout = slide::all();//->where('etat',1);
        $pageAbout = page::where('nom','A Propos')->first();
        //$slides = slide::where('nom','plan1')->first();
        $teams = equipe::all()->where('etat',1);
        $coordonnes = coordonne::all();
        $logos=logo::all();
        $pagesFooter = page::all()->take(4);
        $expertisesFooter = expertise::all()->take(4);

        return view('Front3.about',compact('pages','pageAbout','slidesTout',
        'teams','pagesFooter','expertisesFooter','coordonnes','logos'));
    }

    public function service(){
        //$expertise = expertise::all()->where('etat',1);
        $pages = page::all()->where('etat',1);
        $pageService = page::where('nom','service')->first();
        $expertises = expertise::all();

        $expertisesFooter = expertise::all()->take(4);
        $pagesFooter = page::all()->take(4);
        $logos=logo::all();
        $coordonnes = coordonne::all();
        return view('Front3.service',compact('pages','pageService','expertises','pagesFooter'
        ,'expertisesFooter','coordonnes','logos'));
    }

    public function blog(){
        $pages = page::all()->where('etat',1);
        $blog = page::where('nom','blog')->first();
        $blogs = blog::all()->where('etat',1);

        $expertisesFooter = expertise::all()->take(4);
        $pagesFooter = page::all()->take(4);
        $coordonnes = coordonne::all();
        $logos=logo::all();

        return view('Front3.blog',compact('blog','blogs','pages','pagesFooter',
        'expertisesFooter','coordonnes','logos'));
    }

    public function Postblog($id){
        $pages = page::all()->where('etat',1);
        $blog = blog::findOrFail($id);
        $blogs = blog::all()->take(4)->except($id);

        $expertisesFooter = expertise::all()->take(4);
        $pagesFooter = page::all()->take(4);
        $coordonnes = coordonne::all();
        $logos=logo::all();

        return view('Front3.blog-single',compact('blog','blogs','pages','pagesFooter',
        'expertisesFooter','coordonnes','logos'));
    }
    public function contact(){
        $pages = page::all()->where('etat',1);
        $contact = page::where('nom','Contact')->first();

        $expertisesFooter = expertise::all()->take(4);
        $pagesFooter = page::all()->take(4);
        $coordonnes = coordonne::all();
        $logos=logo::all();

        return view('Front3.contact',compact('pages','contact','pagesFooter',
        'expertisesFooter','coordonnes','logos'));
    }

    public function portfolio(){
        $portfolios = portfolio::all();//->where('etat',1);

        $pagePortfolio = page::where('nom','portfolio')->first();

        $pages = page::all()->where('etat',1);

        $expertisesFooter = expertise::all()->take(4);

        $pagesFooter = page::all()->take(4);

        $coordonnes = coordonne::all();

        $logos=logo::all();

        return view('Front3.portfolio',compact('pages','portfolios','pagePortfolio',
        'pagesFooter','expertisesFooter','coordonnes','logos'));
    }

    public function produit(){
        //$expertise = expertise::all()->where('etat',1);
        $pages = page::all()->where('etat',1);
        $expertisesFooter = expertise::all()->take(4);
        $pagesFooter = page::all()->take(4);
        $logos=logo::all();
        $coordonnes = coordonne::all();
        $produits =produit::all();
        return view('Front3.produit',compact('pages','pagesFooter'
        ,'expertisesFooter','coordonnes','logos','produits'));
    }

}
