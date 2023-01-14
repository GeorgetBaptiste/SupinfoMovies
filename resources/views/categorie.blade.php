<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $films[0]->categorie }}</title>
</head>
<body>
    @include('header')
    <main>
        <h1>{{ $films[0]->categorie }}</h1>
        <p>Vous retrouverez ici tous les films appartenant à la catégorie {{ $films[0]->categorie }}.</p>
        <br>
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
                    <button>Ajouter au panier</button>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</body>
</html>