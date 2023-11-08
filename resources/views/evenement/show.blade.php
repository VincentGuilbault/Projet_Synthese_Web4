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
            <h2>Nom de l'évènement: {{$evenement->nom}}</h2>
            <h3>Informations de l'évènement:</h3>
            <ul>
                <li><span>Description:</span> {{$evenement->description}}</li>
                <li><span>Id de l'entreprise:</span> {{$evenement->entreprise_id}}</li>
                <li><span>Prix:</span> {{$evenement->prix}}</li>
                <li><span>Ville:</span> {{$evenement->ville}}</li>
                <li><span>Date début:</span> {{$evenement->date_debut}}</li>
                <li><span>Date fin:</span> {{$evenement->date_fin}}</li>
            </ul>

            {{-- <h3>Formulaire pour modifier l'évènement</h3>
            //TODO: Pouvoir modifier un évènement (Erreur: 403)
            <div><a href="{{route('evenement.edit', $evenement->id)}}">Modifier l'évènement</a></div> --}}

            <form action="{{route('evenement.destroy', $evenement->id)}}" method="post">
                @csrf
                @method('delete')
                <div><button type="submit">Supprimer l'évènement</button></div>
            </form>

            <div class="retour"><a href="{{route('evenement.index')}}" class="retour">Retour à la liste des évènements</a></div>
        </div>
    </div>
</body>
</html>
