<?php

namespace App\Http\Controllers;

use App\Models\GroupeCategorie;
use App\Http\Requests\StoreGroupeCategorieRequest;
use App\Http\Requests\UpdateGroupeCategorieRequest;
use Illuminate\Http\Request;

class GroupeCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupeCategories = GroupeCategorie::orderby('nom')->get();
        return view('GroupeCategorie.index', ['groupeCategories' => $groupeCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupeCategorie = new GroupeCategorie();

        return view('GroupeCategorie.create', ['groupeCategorie' => $groupeCategorie]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGroupeCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groupeCategorie = GroupeCategorie::create([
            'nom' => $request->nom,
        ]);

        return redirect()->route('GroupeCategorie.index', $groupeCategorie);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GroupeCategorie  $groupeCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(GroupeCategorie $groupeCategorie)
    {
        //return $groupeCategorie->nom;
        //dd($groupeCategorie);
        return view('GroupeCategorie.show', ['groupeCategorie' => $groupeCategorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupeCategorie  $groupeCategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupeCategorie $groupeCategorie)
    {
        return view('GroupeCategorie.edit', ['groupeCategorie' => $groupeCategorie]);
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
        // return view('GroupeCategorie.update', ['groupeCategorie' => $groupeCategorie]);
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

    public function delete($id)
    {
        $groupeCategorie=GroupeCategorie::find($id);
        $groupeCategorie->delete();
        return redirect()->route('GroupeCategorie.index');
    }
}
