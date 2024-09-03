<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CoordonneController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\fournisseurController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\PubController;
use App\Http\Controllers\slideController;
use App\Models\slide;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Accueil2Controller;
use App\Http\Controllers\Accueil3Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\formationController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\OffreControllers;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\typeEventController;
use App\Models\partenaire;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* front1 */
Route::get('/shop',  [Accueil3Controller::class,'accueil'])->name('accueil');
/* front1 */

/* front/
Route::get('/',  [Accueil2Controller::class,'accueil'])->name('accueil');
Route::get('/about',  [Accueil2Controller::class,'about'])->name('about');
Route::get('/services',  [Accueil2Controller::class,'service'])->name('service');
Route::get('/blog',  [Accueil2Controller::class,'blog'])->name('blog');
Route::get('/contact',  [Accueil2Controller::class,'contact'])->name('contact');
/* front2 */

/*front3*/
Route::get('/', [Accueil3Controller::class,'accueil'])->name('accueil');
Route::get('/about',  [Accueil3Controller::class,'about'])->name('about');
Route::get('/service',  [Accueil3Controller::class,'service'])->name('service');
Route::get('/contact',  [Accueil3Controller::class,'contact'])->name('contact');
Route::get('/portfolio',  [Accueil3Controller::class,'portfolio'])->name('contact');
Route::get('/blog',  [Accueil3Controller::class,'blog'])->name('blog');
Route::get('/blog/{id}',  [Accueil3Controller::class,'Postblog'])->name('Postblog');
Route::get('/produit', [Accueil3Controller::class,'produit'])->name('accueil');



/* Front3 */

Route::prefix('Admin/')->group(function () {
    Route::middleware(['auth:web'])->group(function () {
        Route::view('/', 'Admin.pages.main')->name('dashboard');
        //debut client
        Route::resource('/client', ClientController::class);
        Route::get('client/active/{id}', [ClientController::class,'active'] )->name('client.active') ;
        //fin client

        //debut fournisseur
        Route::resource('/fournisseur', fournisseurController::class);
        Route::get('fournisseur/active/{id}', [fournisseurController::class,'active'] )->name('fournisseur.active') ;
        //fin fournisseur

        //debut categories
        Route::resource('/categories',CategoriesController::class);
        Route::get('categories/active/{id}',[CategoriesController::class,'active'])->name('categories.active');
        //fin categories

        //debut produit
        Route::resource('/produits',ProduitController::class);
        Route::get('produits/active/{id}',[ProduitController::class,'active'])->name('produits.active');
        //fin produit

        //debut slide
        Route::resource('/slide',slideController::class);
        Route::get('slide/active/{id}',[slideController::class,'active'])->name('slide.active');
        //fin slide

        //debut page
        Route::resource('/page',pagesController::class);
        Route::get('page/active/{id}',[pagesController::class,'active'])->name('page.active');
        //fin page

        //debut pub
        Route::resource('/pub',PubController::class);
        Route::get('pub/active/{id}',[PubController::class,'active'])->name('pub.active');
        //fin pub


        //debut partenaire
        Route::resource('/partenaire',PartenaireController::class);
        Route::get('partenaire/active/{id}',[PartenaireController::class,'active'])->name('partenaire.active');
        //fin ppartenaireub

        //debut blog
        Route::resource('/blog',BlogController::class);
        Route::get('blog/active/{id}',[BlogController::class,'active'])->name('blog.active');
        //fin blog

        //debut equipe
        Route::resource('/equipe',EquipeController::class);
        Route::get('equipe/active/{id}',[EquipeController::class,'active'])->name('equipe.active');
        //fin equipe

        //debut expertise
        Route::resource('/expertise',ExpertiseController::class);
        Route::get('expertise/active/{id}',[ExpertiseController::class,'active'])->name('expertise.active');
        //fin expertise

        //debut temoignage
        Route::resource('/temoignage',TemoignageController::class);
        Route::get('temoignage/active/{id}',[TemoignageController::class,'active'])->name('temoignage.active');
        //fin temoignage

        //debut offres
        Route::resource('/offre',OffreControllers::class);
        Route::get('offre/active/{id}',[OffreControllers::class,'active'])->name('offre.active');
        //fin offres

        //debut offres
        Route::resource('/formation',formationController::class);
        Route::get('formation/active/{id}',[formationController::class,'active'])->name('formation.active');
        //fin offres

        //debut type event
        Route::resource('/type_event',typeEventController::class);
        Route::get('type_event/active/{id}',[typeEventController::class,'active'])->name('type_event.active');
        //fin type event

        //debut type event
        Route::resource('/evenement',EvenementController::class);
        Route::get('evenement/active/{id}',[EvenementController::class,'active'])->name('evenement.active');
        //fin type event

        //debut type event
        Route::resource('/portfolio',PortfolioController::class);
        Route::get('portfolio/active/{id}',[PortfolioController::class,'active'])->name('portfolio.active');
        //fin type event

        //debut type event
        Route::resource('/coordonnee',CoordonneController::class);
        Route::get('coordonne/active/{id}',[CoordonneController::class,'active'])->name('coordonne.active');
        //fin type event

         //debut type event
        Route::resource('/logo',LogoController::class);
        Route::get('logo/active/{id}',[LogoController::class,'active'])->name('logo.active');
         //fin type event

        //debut type event
        Route::resource('/contact',ContactController::class);
        Route::get('contact/active/{id}',[ContactController::class,'active'])->name('contact.active');
        //fin type event

    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/ClientAuth.php';

