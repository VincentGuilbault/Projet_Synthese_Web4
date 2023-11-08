<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements = Evenement::orderby('nom')->get();
        return view('evenement.index', ['evenements' => $evenements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evenement = new Evenement();

        return view('evenement.create', ['evenement' => $evenement]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEvenementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evenement = Evenement::create([
            'nom' => $request->nom,
            'description' => $request->description,
            //'entreprise_id' => $request->entreprise_id,
            'emplacement' => $request->emplacement,
            'ville' => $request->ville,
            'prix' => $request->prix,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
        ]);

        return redirect()->route('evenement.index', $evenement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $evenement)
    {
        return view('evenement.show', ['evenement' => $evenement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit(Evenement $evenement)
    {
        return view('evenement.edit', ['evenement' => $evenement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEvenementRequest  $request
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEvenementRequest $request, Evenement $evenement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evenement $evenement)
    {
        //
    }

    public function delete($id)
    {
        $evenement = Evenement::find($id);
        $evenement->delete();
        return redirect()->route('evenement.index');
    }
}
