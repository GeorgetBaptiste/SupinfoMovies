<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $film->title }}</title>
</head>
<body>
    @include('header')
    <main class="info-film">
        <h1>{{ $film->title }}</h1>
        <br> 
        <div class="content">
            <div class="image">
                <img src={{ asset($film->image) }} alt={{ $film->title }}>
            </div>
            <div class="info">
                <h2><b>Catégorie : {{ $film->categorie }}</b></h2>
                <br>
                <p><b>Date de sortie : </b>{{ $film->date }}</p>
                <br>
                <p><b>Rélaisateur : </b><a href="/realisateur/{{ $film->realisateur }}">{{ $film->realisateur }}</a></p>
                <br>
                <p><b>Acteurs :</b> {{ $film->acteurs }}</p>
                <br>
                <p><b>Description :</b></p>
                <p><i>"{{ $film->description }}"</i></p>
                <br>
                <p class="prix"><b>{{ $film->prix }}€</b></p>
                <button>Ajouter au panier</button>
            </div>
        </div>
    </main>
</body>
</html>