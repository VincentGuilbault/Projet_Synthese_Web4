@extends('layout')
@section('content')
    <h1>Modifier le mrc</h1>
    <form action="{{ route('mrc.update', $mrc->id) }}" method="post">
        @csrf
        @method('post')
        @include('mrc.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>
    </form>
@endsection
