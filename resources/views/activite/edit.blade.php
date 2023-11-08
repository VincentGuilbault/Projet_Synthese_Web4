@extends('layout')
@section('content')
    <h1>Modifier l'activité</h1>
    <form action="{{ route('activite.update', $activite->id) }}" method="post">
        @csrf
        @method('post')
        @include('activite.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>
    </form>
@endsection
