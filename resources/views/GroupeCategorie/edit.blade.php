@extends('layout')
@section('content')
    <h1>Modifier le groupe de catégories</h1>
    <form action="{{ route('GroupeCategorie.update', $groupeCategorie->id) }}" method="post">
        @csrf
        @method('post')
        @include('GroupeCategorie.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>
    </form>
@endsection
