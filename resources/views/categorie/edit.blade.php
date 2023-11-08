@extends('layout')
@section('content')
    <h1>Modifier une catégorie</h1>
    <form action="{{ route('categorie.update', $categorie->id) }}" method="post">
        @csrf
        @method('post')
        @include('categorie.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>
    </form>
@endsection
