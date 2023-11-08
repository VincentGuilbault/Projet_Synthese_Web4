@extends('layout')
@section('content')
    <h1>Modifier un forfait</h1>
    <form action="{{ route('forfait.update', $forfait->id) }}" method="post">
        @csrf
        @method('post')
        @include('forfait.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>
    </form>
@endsection
