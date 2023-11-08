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
            <h2>Nom de l'activité: {{$activite->nom}}</h2>
            <h3>Informations de l'activité:</h3>
            <ul>
                <li><span>Description:</span> {{$activite->description}}</li>
                <li><span>Id de l'entreprise:</span> {{$activite->entreprise_id}}</li>
                <li><span>Prix:</span> {{$activite->prix}}</li>
                <li><span>Date de l'activité:</span> {{$activite->date_activite}}</li>
            </ul>

            <form action="{{route('activite.destroy', $activite->id)}}" method="post">
                @csrf
                @method('delete')
                <div><button type="submit">Supprimer l'activité</button></div>
            </form>

            <div class="retour"><a href="{{route('activite.index')}}" class="retour">Retour à la liste des activités</a></div>
        </div>
    </div>
</body>
</html>
