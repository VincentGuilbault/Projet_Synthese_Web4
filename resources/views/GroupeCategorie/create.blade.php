@extends('layout')
@section('content')
    <h1>Créer un groupe de catégories</h1>
    <form action="{{ route('GroupeCategorie.store') }}" method="post">
        @csrf
        @include('GroupeCategorie.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>

        <div class="retour"><a href="{{route('GroupeCategorie.index')}}" class="retour">Retour à la liste des groupes de catégories</a></div>
    </form>
@endsection

