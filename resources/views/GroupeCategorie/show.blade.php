<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="contenu">
            <h2>Nom du groupe de catégories: {{$groupeCategorie->nom}}</h2>
            <h3>Informations du groupe de catégories:</h3>
            <ul>
                <li><span>Nom:</span> {{$groupeCategorie->nom}}</li>
            </ul>

            {{-- <form action="{{route('GroupeCategorie.destroy', $groupeCategorie->id)}}" method=post>
                @csrf
                @method('delete')
                <div><button type="submit">Supprimer le groupe de catégories</button></div>
            </form> --}}

            <div><a href="{{route('GroupeCategorie.index')}}">Retour à la liste des groupes de catégories</a></div>
        </div>
    </div>
</body>
</html>
