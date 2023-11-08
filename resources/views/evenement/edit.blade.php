@extends('layout')
@section('content')
    <h1>Modifier l'événement</h1>
    <form action="{{ route('evenement.update', $evenement->id) }}" method="post">
        @csrf
        @method('post')
        @include('evenement.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>
    </form>
@endsection
