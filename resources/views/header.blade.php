<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href={{ asset('css/reset.css') }}>
	<link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>
<body>
	<header>
		<div class="logo">
			<a href="/"><img src={{ asset("img/logo.png") }} alt="logo"></a>
		</div>
		<nav class="nav-left">
			<a href={{ url('/') }}>Accueil</a>
			<a href={{ url('action') }}>Action</a>
			<a href={{ url('drame') }}>Drame</a>
		</nav>
		<div class="searchbar">
			<form action={{ url('recherche') }}>
				<input type="text" name="q" placeholder="Rechercher un film...">
			</form>
		</div>
		@if (auth()->check())
		<nav class="nav-right">
			<a href={{ route('logout') }}>Déconnexion</a>
			<a class="inscription" href={{ route('basket.show') }}>Panier</a>
		</nav>
		@else
		<nav class="nav-right">
			<a href={{ url('login') }}>Connexion</a>
			<a class="inscription" href={{ url('register') }}>Inscription</a>
		</nav>
		@endif
		
	</header>
</body>
</html>