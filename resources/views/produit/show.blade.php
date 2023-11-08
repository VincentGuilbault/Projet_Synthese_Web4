<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style_show.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="contenu">
            <h2>Nom du produit: {{$produit->nom}}</h2>
            <h3>Informations du produit:</h3>
            <ul>
                <li><span>Description du produit:</span>{{$produit->description}}</li>
                <li><span>Prix du produit:</span>{{$produit->prix}}</li>
            </ul>

            <form action="{{route('produit.destroy', $produit->id)}}" method="post">
                @csrf
                @method('delete')
                <div><button type="submit">Supprimer le produit</button></div>
            </form>

            <div class="retour"><a href="{{route('produit.index')}}" class="retour">Retour à la liste des produits</a></div>
        </div>
    </div>
</body>
</html>
