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
            <h2>Nom de la MRC: {{$mrc->nom}}</h2>
            <h3>Informations de la MRC</h3>
            <ul>
                <li><span>Description:</span> {{$mrc->description}}</li>
                <li><span>Texte à intégrer:</span> {{$mrc->texte}}</li>
                <li><span>Région reconnue pour:</span> {{$mrc->region}}</li>
                <li><span>Carte de la MRC:</span> {{$mrc->carte}}</li>
            </ul>

            <form action="{{route('mrc.destroy', $mrc->id)}}" method="post">
                @csrf
                @method('delete')
                <div><button type="submit">Supprimer la MRC</button></div>
            </form>

            <div class="retour"><a href="{{route('mrc.index')}}" class="retour">Retour à la liste des MRCS</a></div>
        </div>
    </div>
</body>
</html>
