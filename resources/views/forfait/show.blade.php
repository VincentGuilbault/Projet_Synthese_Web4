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
            <h2>Nom du forfait: {{$forfait->nom}}</h2>
            <h3>Informations du forfait:</h3>
            <ul>
                <li><span>Prix du forfait:</span> {{$forfait->prix}}</li>
                <li><span>Description du forfait:</span> {{$forfait->description}}</li>
                <li><span>Catégorie/type de forfait:</span> {{$forfait->categorie}}</li>
                <li><span>Emplacement du forfait:</span> {{$forfait->emplacement}}</li>
                <li><span>Date d'activation du forfait:</span> {{$forfait->date_activation}}</li>
                <li><span>Date d'expiration du forfait:</span> {{$forfait->date_expiration}}</li>
            </ul>

            <form action="{{route('forfait.destroy', $forfait->id)}}" method="post">
                @csrf
                @method('delete')
                <div><button type="submit">Supprimer le forfait</button></div>
            </form>

            <div class="retour"><a href="{{route('forfait.index')}}" class="retour">Retour à la liste des forfaits</a></div>
        </div>
    </div>
</body>
</html>
