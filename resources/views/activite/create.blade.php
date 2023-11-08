@extends('layout')
@section('content')
    <h1>Créer une activité</h1>
    <form action="{{ route('activite.store') }}" method="post">
        @csrf
        @include('activite.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>

        <div class="retour"><a href="{{route('activite.index')}}" class="retour">Retour à la liste des activités</a></div>
    </form>
@endsection
