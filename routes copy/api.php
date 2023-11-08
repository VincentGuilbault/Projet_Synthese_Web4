<?php

use App\Http\Controllers\Api\ActiviteController;
use App\Http\Controllers\Api\CategorieController;
use App\Http\Controllers\Api\EntrepriseController;
use App\Http\Controllers\Api\EvenementController;
use App\Http\Controllers\Api\FavoriController;
use App\Http\Controllers\Api\ForfaitController;
use App\Http\Controllers\Api\GroupeCategorieController;
use App\Http\Controllers\Api\MembreController;
use App\Http\Controllers\Api\ProduitController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'as' => 'api.'

], function () {
    Route::group([
        'prefix' => 'membre',
        'controller' => MembreController::class,
        'where' => ['membre' => '[0-9]+'],
        'as' => 'membre.'
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
        'as' => 'activite.'
    ], function () {
        Route::get('', 'index')->name('index');
        Route::get('{activite}', 'show')->name('show');
        Route::post('', 'store')->name('store');
        Route::post('{activite}', 'update')->name('update');
        Route::delete('{activite}', 'delete')->name('destroy');
    });

    Route::group([
        'prefix' => 'categorie',
        'controller' => CategorieController::class,
        'where' => ['categorie' => '[0-9]+'],
        'as' => 'categorie.'
    ], function () {
        Route::get('', 'index')->name('index');
        Route::get('{categorie}', 'show')->name('show');
        Route::post('', 'store')->name('store');
        Route::post('{categorie}', 'update')->name('update');
        Route::delete('{categorie}', 'delete')->name('destroy');
    });

    Route::group([
        'prefix' => 'entreprise',
        'controller' => EntrepriseController::class,
        'where' => ['entreprise' => '[0-9]+'],
        'as' => 'entreprise.'
    ], function () {
        Route::get('', 'index')->name('index');
        Route::get('{entreprise}', 'show')->name('show');
        Route::post('', 'store')->name('store');
        Route::post('{entreprise}', 'update')->name('update');
        Route::delete('{entreprise}', 'delete')->name('destroy');
    });

    Route::group([
        'prefix' => 'evenement',
        'controller' => EvenementController::class,
        'where' => ['evenement' => '[0-9]+'],
        'as' => 'evenement.'
    ], function () {
        Route::get('', 'index')->name('index');
        Route::get('{evenement}', 'show')->name('show');
        Route::post('', 'store')->name('store');
        Route::post('{evenement}', 'update')->name('update');
        Route::delete('{evenement}', 'delete')->name('destroy');
    });

    Route::group([
        'prefix' => 'produit',
        'controller' => ProduitController::class,
        'where' => ['produit' => '[0-9]+'],
        'as' => 'produit.'
    ], function () {
        Route::get('', 'index')->name('index');
        Route::get('{produit}', 'show')->name('show');
        Route::post('', 'store')->name('store');
        Route::post('{produit}', 'update')->name('update');
        Route::delete('{produit}', 'delete')->name('destroy');
    });

    Route::group([
        'prefix' => 'GroupeCategorie',
        'controller' => GroupeCategorieController::class,
        'where' => ['GroupeCategorie' => '[0-9]+'],
        'as' => 'GroupeCategorie.'
    ], function () {
        Route::get('', 'index')->name('index');
        Route::get('{GroupeCategorie}', 'show')->name('show');
        Route::post('', 'store')->name('store');
        Route::post('{GroupeCategorie}', 'update')->name('update');
        Route::delete('{GroupeCategorie}', 'delete')->name('destroy');
    });

    Route::group([
        'prefix' => 'favori',
        'controller' => FavoriController::class,
        'where' => ['favori' => '[0-9]+'],
        'as' => 'favori.'
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
        'as' => 'forfait.'
    ], function () {
        Route::get('', 'index')->name('index');
        Route::get('{forfait}', 'show')->name('show');
        Route::post('', 'store')->name('store');
        Route::post('{forfait}', 'update')->name('update');
        Route::delete('{forfait}', 'delete')->name('destroy');
    });
});

Route::group([
    "prefix" => "entreprise",
    "controller" => EntrepriseController::class,
    "where" => ["entreprise" => "[0-9]+"],
    "as" => "entreprise.",
    "middleware" => ["auth"], // authentification
], function () {
    Route::get("", "index")->name("index");
    Route::post("", "store")->name("store");
    Route::get("{entreprise}", "show")->name("show");
    Route::put("{entreprise}", "update")->name("update");
    Route::delete("{entreprise}", "destroy")->name("destroy");
    Route::get("{entreprise}/aimer", "aimer")->name("aimer");
});
