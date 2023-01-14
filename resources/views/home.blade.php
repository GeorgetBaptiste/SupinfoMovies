<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    @include('header')
    <main class="home">
        <h1>Bienvenue sur Supinfo Movies</h1>
        <p>Supinfo Movies est site d'achat de films. Vous pouvez consulter les films en sélectionnant une catégorie ou en recherchant un film dans la barre de recherche.</p>
        <br>
        <br>
        <br>
        <h2>Sortie récemment</h2>
        <div class="wrapper">
            @foreach ($films as $film)
            <div class="element-film">
                <a href="/film/{{ $film->id }}"><img src={{ asset($film->image) }} alt={{ $film->title }}></a>
                <br>
                <div class="content">
                    <div class="top">
                        <h3>{{ $film->title }}</h3>
                        <p>{{ $film->prix }}€</p>
                    </div>
                    <form methode="POST" action="">
                        <button>Ajouter au panier</button>
                    </form>
                </div>
            </div>
            @endforeach
		</div>
    </main>
</body>
</html>