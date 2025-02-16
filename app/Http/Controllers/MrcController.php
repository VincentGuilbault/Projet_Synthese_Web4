<?php

namespace App\Http\Controllers;

use App\Models\Mrc;
use App\Http\Requests\StoreMrcRequest;
use App\Http\Requests\UpdateMrcRequest;
use Illuminate\Http\Request;

class MrcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mrcs = Mrc::orderby('nom')->get();
        return view('mrc.index', ['mrcs' => $mrcs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mrc = new Mrc();

        return view('mrc.create', ['mrc' => $mrc]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMrcRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mrc = Mrc::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'texte' => $request->texte,
            'region' => $request->region,
            'carte' => $request->carte,
        ]);

        return redirect()->route('mrc.index', $mrc);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function show(Mrc $mrc)
    {
        return view('mrc.show', ['mrc' => $mrc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function edit(Mrc $mrc)
    {
        return view('mrc.edit', ['mrc' => $mrc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMrcRequest  $request
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMrcRequest $request, Mrc $mrc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mrc $mrc)
    {
        //
    }

    public function delete($id)
    {
        $mrc = Mrc::find($id);
        $mrc->delete();
        return redirect()->route('mrc.index');
    }
}
