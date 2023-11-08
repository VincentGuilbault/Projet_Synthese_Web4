@extends('layout')
@section('content')
    <h1>Créer un forfait</h1>
    <form action="{{ route('forfait.store') }}" method="post">
        @csrf
        @include('forfait.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>

        <div class="retour"><a href="{{route('forfait.index')}}" class="retour">Retour à la liste des forfaits</a></div>
    </form>
@endsection
