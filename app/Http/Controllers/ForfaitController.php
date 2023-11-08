<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use App\Http\Requests\StoreForfaitRequest;
use App\Http\Requests\UpdateForfaitRequest;
use Illuminate\Http\Request;

class ForfaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forfaits = Forfait::orderby('nom')->get();
        return view('forfait.index', ['forfaits' => $forfaits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forfait = new Forfait();

        return view('forfait.create', ['forfait' => $forfait]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreForfaitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forfait = Forfait::create([
            'nom' => $request->nom,
            'prix' => $request->prix,
            'description' => $request->description,
            'categorie' => $request->categorie,
            'emplacement' => $request->emplacement,
            'date_activation' => $request->date_activation,
            'date_expiration' => $request->date_expiration,
        ]);

        return redirect()->route('forfait.index', $forfait);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function show(Forfait $forfait)
    {
        return view('forfait.show', ['forfait' => $forfait]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function edit(Forfait $forfait)
    {
        return view('forfait.edit', ['forfait' => $forfait]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateForfaitRequest  $request
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForfaitRequest $request, Forfait $forfait)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forfait $forfait)
    {
        //
    }

    public function delete($id)
    {
        $forfait = Forfait::find($id);
        $forfait->delete();
        return redirect()->route('forfait.index');
    }
}
