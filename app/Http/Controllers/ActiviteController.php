<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Http\Requests\StoreActiviteRequest;
use App\Http\Requests\UpdateActiviteRequest;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activites = Activite::orderby('nom')->get();
        return view('activite.index', ['activites' => $activites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activite = new Activite();

        return view('activite.create', ['activite' => $activite]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActiviteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activite = Activite::create([
            'nom' => $request->nom,
            'description' => $request->description,
            //'entreprise_id' => $request->entreprise_id,
            'prix' => $request->prix,
            'date_activite' => $request->date_activite,
        ]);

        return redirect()->route('activite.index', $activite);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show(Activite $activite)
    {
        return view('activite.show', ['activite' => $activite]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function edit(Activite $activite)
    {
        return view('activite.edit', ['activite' => $activite]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActiviteRequest  $request
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActiviteRequest $request, Activite $activite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activite $activite)
    {
        //
    }

    public function delete($id)
    {
        $activite = Activite::find($id);
        $activite->delete();
        return redirect()->route('activite.index');
    }
}
