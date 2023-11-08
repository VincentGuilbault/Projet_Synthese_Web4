@extends('layout')
@section('content')
    <h1>Créer une catégorie</h1>
    <form action="{{ route('categorie.store') }}" method="post">
        @csrf
        @include('categorie.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>

        <div class="retour"><a href="{{route('categorie.index')}}" class="retour">Retour à la liste des catégories</a></div>
    </form>
@endsection

