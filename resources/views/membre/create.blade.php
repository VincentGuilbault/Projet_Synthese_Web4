@extends('layout')
@section('content')
    <h1>Ajouter un membre</h1>
    <form action="{{ route('membre.store') }}" method="post">
        @csrf
        @include('membre.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>

        <div class="retour"><a href="{{route('membre.index')}}" class="retour">Retour à la liste des membres</a></div>
    </form>
@endsection
