<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Http\Requests\StoreMembreRequest;
use App\Http\Requests\UpdateMembreRequest;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Membre::orderby('nom')->get();
        return view('membre.index', ['membres' => $membres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $membre = new Membre();

        return view('membre.create', ['membre' => $membre]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMembreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $membre = Membre::create([
            'nom' => $request->nom,
            'etablissement' => $request->etablissement,
            'adresse_civique' => $request->adresse_civique,
            'rue' => $request->rue,
            'ville' => $request->ville,
            'num_telephone' => $request->num_telephone,
            'code_postal' => $request->code_postal,
            'site_web' => $request->site_web,
            'email' => $request->email,
            'mot_de_passe' => $request->mot_de_passe,
            'commodite' => $request->commodite,
            'type' => $request->type,
        ]);

        return redirect()->route('membre.index', $membre);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function show(Membre $membre)
    {
        return view('membre.show', ['membre' => $membre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    {
        return view('membre.edit', ['membre' => $membre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMembreRequest  $request
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMembreRequest $request, Membre $membre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membre $membre)
    {
        //
    }

    public function delete($id)
    {
        $membre = Membre::find($id);
        $membre->delete();
        return redirect()->route('membre.index');
    }
}
