<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mrc;
use App\Http\Requests\StoreMrcRequest;
use App\Http\Requests\UpdateMrcRequest;

class MrcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mrc::all();
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
     * @param  \App\Http\Requests\StoreMrcRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMrcRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function show(Mrc $mrc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function edit(Mrc $mrc)
    {
        //
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
}
