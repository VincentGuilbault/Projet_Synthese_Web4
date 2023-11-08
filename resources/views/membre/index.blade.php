<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="menu_nav">
            <h1 class="nav_titre">Menu</h1>
            <nav class="nav_principale">
                <ul>
                    <li><a href="{{route('GroupeCategorie.index')}}" method="post">Groupes de catégories</a></li>
                    <li><a href="{{route('categorie.index')}}" method="post">Catégories</a></li>
                    <li><a href="{{route('entreprise.index')}}" method="post">Entreprises</a></li>
                    <li><a href="{{route('activite.index')}}" method="post">Activités</a></li>
                    <li><a href="{{route('evenement.index')}}" method="post">Évènements</a></li>
                    <li><a href="{{route('produit.index')}}" method="post">Produits</a></li>
                    <li><a href="{{route('forfait.index')}}" method="post">Forfaits</a></li>
                    <li><a href="{{route('mrc.index')}}" method="post">Municipalités régionales de comté (MRC)</a></li>
                    <li><a href="{{route('membre.index')}}" method="post">Membres</a></li>
                </ul>
            </nav>
        </div>
        <div class="contenu">
            <h1>Tableau de bord</h1>
            <h2>Membres</h2>
            <h3>Formulaire pour ajouter un nouveau membre</h3>
            <div class="formualaire_boite"><a href="{{route('membre.create')}}" class="formulaire">Ajouter un membre</a></div>

            <h3>Liste des membres existants</h3>
            <ul>
                @foreach ($membres as $membre)
                    <li><a href="{{route('membre.show', $membre->id)}}" class="boites">{{$membre->nom}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
