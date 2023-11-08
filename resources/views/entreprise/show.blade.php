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
            <h2>Nom de l'entreprise: {{$entreprise->nom}}</h2>
            <h3>Informations de l'entreprise:</h3>
            <ul>
                <li><span>Adresse:</span> {{$entreprise->adresse}}</li>
                <li><span>Ville:</span> {{$entreprise->ville}}</li>
                <li><span>Couriel:</span> {{$entreprise->email}}</li>
                <li><span>Code postal:</span> {{$entreprise->code_postal}}</li>
                <li><span>Téléphone:</span> {{$entreprise->num_telephone}}</li>
                <li><span>Url photo:</span> {{$entreprise->url_photo}}</li>
                <li><span>Url logo:</span> {{$entreprise->url_logo}}</li>
                <li><span>Site web:</span> {{$entreprise->site_web}}</li>
                <li><span>Description:</span> {{$entreprise->description}}</li>
                <li><span>Id de la catégorie:</span> {{$entreprise->categorie_id}}</li>
            </ul>

            <form action="{{route('entreprise.destroy', $entreprise->id)}}" method="post">
                @csrf
                @method('delete')
                <div><button type="submit">Supprimer l'entreprise</button></div>
            </form>

            <div class="retour"><a href="{{route('entreprise.index')}}" class="retour">Retour à la liste des entreprises</a></div>
        </div>
    </div>
</body>
</html>
