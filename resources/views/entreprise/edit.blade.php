@extends('layout')
@section('content')
    <h1>Modifier l'entreprise</h1>
    <form action="{{ route('entreprise.update', $entreprise->id) }}" method="post">
        @csrf
        @method('post')
        @include('entreprise.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>
    </form>
@endsection
