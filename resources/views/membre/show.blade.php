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
            <h2>Nom du membre: {{$membre->nom}}</h2>
            <h3>Informations du membre:</h3>
            <ul>
                <li><span>Établissement:</span> {{$membre->etablissement}}</li>
                <li><span>Adresse civique:</span> {{$membre->adresse_civique}}</li>
                <li><span>Rue:</span> {{$membre->rue}}</li>
                <li><span>Ville:</span> {{$membre->ville}}</li>
                <li><span>Téléphone:</span> {{$membre->num_telephone}}</li>
                <li><span>Code postal:</span> {{$membre->code_postal}}</li>
                <li><span>Site web:</span>{{$membre->site_web}}</li>
                <li><span>Email:</span>{{$membre->email}}</li>
                <li><span>Mot de passe:</span>{{$membre->mot_de_passe}}</li>
                <li><span>Commodite:</span>{{$membre->commodite}}</li>
                <li><span>Type:</span>{{$membre->type}}</li>
            </ul>

            <form action="{{route('membre.destroy', $membre->id)}}" method=post>
                @csrf
                @method('delete')
                <div><button type="submit">Supprimer le membre</button></div>
            </form>

            <div class="retour"><a href="{{route('membre.index')}}" class="retour">Retour à la liste des membres</a></div>
        </div>
    </div>
</body>
</html>
