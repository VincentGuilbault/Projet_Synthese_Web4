@extends('layout')
@section('content')
    <h1>Modifier le produit</h1>
    <form action="{{ route('produit.update', $produit->id) }}" method="post">
        @csrf
        @method('post')
        @include('produit.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>
    </form>
@endsection
