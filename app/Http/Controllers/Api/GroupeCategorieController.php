<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GroupeCategorie;
use App\Http\Requests\StoreGroupeCategorieRequest;
use App\Http\Requests\UpdateGroupeCategorieRequest;

class GroupeCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GroupeCategorie::all();
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
     * @param  \App\Http\Requests\StoreGroupeCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupeCategorieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GroupeCategorie  $groupeCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(GroupeCategorie $groupeCategorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupeCategorie  $groupeCategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupeCategorie $groupeCategorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupeCategorieRequest  $request
     * @param  \App\Models\GroupeCategorie  $groupeCategorie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupeCategorieRequest $request, GroupeCategorie $groupeCategorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupeCategorie  $groupeCategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupeCategorie $groupeCategorie)
    {
        //
    }
}
