@extends('layout')
@section('content')
    <h1>Modifier le membre</h1>
    <form action="{{ route('membre.update', $membre->id) }}" method="post">
        @csrf
        @method('post')
        @include('membre.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>
    </form>
@endsection
