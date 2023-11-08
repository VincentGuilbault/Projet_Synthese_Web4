<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style_show.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="contenu">
            <h2>Nom de la categorie: {{$categorie->nom}}</h2>
            <h3>Informations de la catégorie:</h3>
            <ul>
                <li><span>Id du groupe de la categorie:</span> {{$categorie->groupe_categorie_id}}</li>
            </ul>

            <form action="{{route('categorie.destroy', $categorie->id)}}" method="post">
                @csrf
                @method('delete')
                <div><button type="submit">Supprimer la categorie</button></div>
            </form>

            <div class="retour"><a href="{{route('categorie.index')}}" class="retour">Retour à la liste des catégories</a></div>
        </div>
    </div>
</body>
</html>
