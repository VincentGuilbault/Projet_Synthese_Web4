<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Activite;
use App\Http\Requests\StoreActiviteRequest;
use App\Http\Requests\UpdateActiviteRequest;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Activite::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActiviteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActiviteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show(Activite $activite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function edit(Activite $activite)
    {
        //
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
}
