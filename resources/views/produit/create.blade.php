@extends('layout')
@section('content')
    <h1>Créer un produit</h1>
    <form action="{{ route('produit.store') }}" method="post">
        @csrf
        @include('produit.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>

        <div class="retour"><a href="{{route('produit.index')}}" class="retour">Retour à la liste des produits</a></div>
    </form>
@endsection
