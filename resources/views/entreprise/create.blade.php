@extends('layout')
@section('content')
    <h1>Créer une entreprise</h1>
    <form action="{{ route('entreprise.store') }}" method="post">
        @csrf
        @include('entreprise.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>

        <div class="retour"><a href="{{route('entreprise.index')}}" class="retour">Retour à la liste des entreprises</a></div>
    </form>
@endsection

