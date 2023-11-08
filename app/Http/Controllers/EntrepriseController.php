<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Http\Requests\StoreEntrepriseRequest;
use App\Http\Requests\UpdateEntrepriseRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::orderby('nom')->get();
        return view('entreprise.index', ['entreprises' => $entreprises]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprise = new Entreprise();

        return view('entreprise.create', ['entreprise' => $entreprise]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEntrepriseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entreprise = Entreprise::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'email' => $request->email,
            'code_postal' => $request->code_postal,
            'num_telephone' => $request->num_telephone,
            'url_photo' => $request->url_photo,
            'url_logo' => $request->url_logo,
            'site_web' => $request->site_web,
            'description' => $request->description,
            //'categorie_id' => $request->categorie_id,
        ]);

        return redirect()->route('entreprise.index', $entreprise);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        return view('entreprise.show', ['entreprise' => $entreprise]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        return view('entreprise.edit', ['entreprise' => $entreprise]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntrepriseRequest  $request
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntrepriseRequest $request, Entreprise $entreprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        //
    }

    public function delete($id)
    {
        $entreprise = Entreprise::find($id);
        $entreprise->delete();
        return redirect()->route('entreprise.index');
    }
}
