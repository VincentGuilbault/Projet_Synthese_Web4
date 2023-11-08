@extends('layout')
@section('content')
    <h1>Créer une MRC</h1>
    <form action="{{ route('mrc.store') }}" method="post">
        @csrf
        @include('mrc.form')
        <div><button type="submit" class="btn btn-primary">Valider</button></div>

        <div class="retour"><a href="{{route('mrc.index')}}" class="retour">Retour à la liste des MRCS</a></div>
    </form>
@endsection
