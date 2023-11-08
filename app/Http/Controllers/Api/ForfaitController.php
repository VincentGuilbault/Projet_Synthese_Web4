<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Forfait;
use App\Http\Requests\StoreForfaitRequest;
use App\Http\Requests\UpdateForfaitRequest;

class ForfaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Forfait::all();
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
     * @param  \App\Http\Requests\StoreForfaitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForfaitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function show(Forfait $forfait)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function edit(Forfait $forfait)
    {
        //
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
}
