@extends('layout')
@section('content')
    <h1>Créer un évènement</h1>
    <form action="{{ route('evenement.store') }}" method="post">
        @csrf
        @include('evenement.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>

        <div class="retour"><a href="{{route('evenement.index')}}" class="retour">Retour à la liste des évènements</a></div>
    </form>
@endsection
