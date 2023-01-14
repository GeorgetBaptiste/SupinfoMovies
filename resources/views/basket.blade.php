<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panier</title>
</head>
<body>
    @include('header')
    <main class="basket">
        @foreach ($films as $film)
            <div class="element">
                <img src={{ $film->image }} alt={{ $film->title }}>
                <h3>{{ $film->title }}</h3>
                <p>{{ $film->prix }}€</p>
                <form action="">
                    <button>Supprimer</button>
                </form>
            </div>
        @endforeach
        <div class="total">
            <p>Total de la commande : <b>{{ $total }}€</b></p>
            <form action="">
                <button>Vider le panier</button>
            </form>
        </div>
    </main>
</body>
</html>