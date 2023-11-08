<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\FavoriController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\GroupeCategorieController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => 'membre',
    'controller' => MembreController::class,
    'where' => ['membre' => '[0-9]+'],
], function () {
    Route::get('', 'index')->name('index');
    Route::get('{membre}', 'show')->name('show');
    Route::post('', 'store')->name('store');
    Route::post('{membre}', 'update')->name('update');
    Route::delete('{membre}', 'delete')->name('destroy');
});

Route::group([
    'prefix' => 'activite',
    'controller' => ActiviteController::class,
    'where' => ['activite' => '[0-9]+'],
    'as' => 'activite.',
], function () {
    Route::get('', 'index')->name('index');
    Route::get('{activite}', 'show')->name('show');
    Route::delete('{activite}', 'delete')->name('destroy');

    //Formulaire
    Route::get('create', 'create')->name('create');
    Route::get('{activite}/edit', 'edit')->name('edit');

    //Traitement
    Route::post('', 'store')->name('store');
    Route::post('{activite}', 'update')->name('update');
});

//Suppression d'une activité
Route::get('delete/{id}', [ActiviteController::class, 'delete']);

Route::group([
    'prefix' => 'categorie',
    'controller' => CategorieController::class,
    'where' => ['categorie' => '[0-9]+'],
    'as' => 'categorie.',
], function () {
    Route::get('', 'index')->name('index');
    Route::get('{categorie}', 'show')->name('show');
    Route::delete('{categorie}', 'delete')->name('destroy');

    //Formulaire
    Route::get('create', 'create')->name('create');
    Route::get('{categorie}/edit', 'edit')->name('edit');

    //Traitement
    Route::post('', 'store')->name('store');
    Route::post('{categorie}', 'update')->name('update');
});

//Suppression d'une categorie
Route::get('delete/{id}', [CategorieController::class, 'delete']);

Route::group([
    'prefix' => 'entreprise',
    'controller' => EntrepriseController::class,
    'where' => ['entreprise' => '[0-9]+'],
    'as' => 'entreprise.',
], function () {
    Route::get('', 'index')->name('index');
    Route::get('{entreprise}', 'show')->name('show');
    Route::delete('{entreprise}', 'delete')->name('destroy');

    //Formulaire
    Route::get('create', 'create')->name('create');
    Route::get('{entreprise}/edit', 'edit')->name('edit');

    //Traitement
    Route::post('', 'store')->name('store');
    Route::post('{entreprise}', 'update')->name('update');
});

//Suppression d'une entreprise
Route::get('delete/{id}', [EntrepriseController::class, 'delete']);

Route::group([
    'prefix' => 'evenement',
    'controller' => EvenementController::class,
    'where' => ['evenement' => '[0-9]+'],
    'as' => 'evenement.',
], function () {
    Route::get('', 'index')->name('index');
    Route::get('{evenement}', 'show')->name('show');
    Route::delete('{evenement}', 'delete')->name('destroy');

    //Formulaire
    Route::get('create', 'create')->name('create');
    Route::get('{evenement}/edit', 'edit')->name('edit');

    //Traitement
    Route::post('', 'store')->name('store');
    Route::post('{evenement}', 'update')->name('update');
});

//Suppression d'un evenement
Route::get('delete/{id}', [EvenementController::class, 'delete']);

Route::group([
    'prefix' => 'produit',
    'controller' => ProduitController::class,
    'where' => ['produit' => '[0-9]+'],
    'as' => 'produit.',
], function () {
    Route::get('', 'index')->name('index');
    Route::get('{produit}', 'show')->name('show');
    Route::delete('{produit}', 'delete')->name('destroy');

    //Formulaire
    Route::get('create', 'create')->name('create');
    Route::get('{produit}/edit', 'edit')->name('edit');

    //Traitement
    Route::post('', 'store')->name('store');
    Route::post('{produit}', 'update')->name('update');
});

//Suppression d'un produit
Route::get('delete/{id}', [ProduitController::class, 'delete']);

Route::group([
    'prefix' => 'GroupeCategorie',
    'controller' => GroupeCategorieController::class,
    'where' => ['GroupeCategorie' => '[0-9]+'],
    'as' => 'GroupeCategorie.',
], function () {
    Route::get('', 'index')->name('index');
    Route::get('{GroupeCategorie}', 'show')->name('show');
    Route::delete('{GroupeCategorie}', 'delete')->name('destroy');

    //Formulaire
    Route::get('create', 'create')->name('create');
    Route::get('{GroupeCategorie}/edit', 'edit')->name('edit');

    //Traitement
    Route::post('', 'store')->name('store');
    Route::post('{GroupeCategorie}', 'update')->name('update');
});

//Suppression d'un groupe de categorie
Route::get('delete/{id}', [GroupeCategorieController::class, 'delete']);

Route::group([
    'prefix' => 'favori',
    'controller' => FavoriController::class,
    'where' => ['favori' => '[0-9]+'],
], function () {
    Route::get('', 'index')->name('index');
    Route::get('{favori}', 'show')->name('show');
    Route::post('', 'store')->name('store');
    Route::post('{favori}', 'update')->name('update');
    Route::delete('{favori}', 'delete')->name('destroy');
});

Route::group([
    'prefix' => 'forfait',
    'controller' => ForfaitController::class,
    'where' => ['forfait' => '[0-9]+'],
    'as' => 'forfait.',
], function () {
    Route::get('', 'index')->name('index');
    Route::get('{forfait}', 'show')->name('show');
    Route::delete('{forfait}', 'delete')->name('destroy');

    //Formulaire
    Route::get('create', 'create')->name('create');
    Route::get('{forfait}/edit', 'edit')->name('edit');

    //Traitement
    Route::post('', 'store')->name('store');
    Route::post('{forfait}', 'update')->name('update');
});

//Suppression d'un forfait
Route::get('delete/{id}', [ForfaitController::class, 'delete']);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


View::composer("categorie.selectGroupe", function ($view) {
    $view->with('groupeCategories', \App\Models\GroupeCategorie::orderby("nom")->get());
});

View::composer("entreprise.selectCategorie", function ($view) {
    $view->with('categories', \App\Models\Categorie::orderby("nom")->get());
});

View::composer("produit.selectEntreprise", function ($view) {
    $view->with('entreprises', \App\Models\Entreprise::orderby("nom")->get());
});

View::composer("activite.selectEntreprise", function ($view) {
    $view->with('entreprises', \App\Models\Entreprise::orderby("nom")->get());
});

View::composer("evenement.selectEntreprise", function ($view) {
    $view->with('entreprises', \App\Models\Entreprise::orderby("nom")->get());
});
