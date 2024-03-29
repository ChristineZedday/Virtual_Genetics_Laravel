<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>Competition</title>
</head>
<body>

<div class='bandeau'>
<h1>{{$elevage->nom_elevage}}</h1>
<h3>{{$elevage->nom_eleveur}}</h3>

<?php
$game =  App\Gamedata::Find(1);
$date = $game->date();
?>

	<nav>
			<ul>
				<li class='deroule'><a href="{{route('competitions', [$elevage, 'toutes'])}}">Compétitions à venir</a>
					<ul class='sousmenu'>
						<li><a href="{{route('competitions', [$elevage, 'Modèle et Allures'])}}">Modèles et allures</a></li>
						<li><a href="{{route('competitions', [$elevage,'dressage'])}}">Dressage</a></li>
						
					</ul>
				</li>
				<li class='deroule'><a href="{{route('inscrits', [$elevage, 'tous'])}}">Vos animaux inscrits</a>
					<ul class='sousmenu'>
						<li><a href="{{route('inscrits', [$elevage,'Modèle et Allures'])}}">Modèle et allures</a></li>		
					</ul>
					<ul class='sousmenu'>
						<li><a href="{{route('inscrits', [$elevage,'Dressage'])}}">Dressage</a></li>
					</ul>
				</li>
				<li class='deroule'><a href="{{route('resultats', [$elevage, 'toutes'])}}">Résultats de mes chevaux en compétitions</a>
					<ul class='sousmenu'>
						<li><a href="{{route('resultats', [$elevage, 'Modèle et Allures'])}}">Modèles et allures</a></li>
						
					</ul>
					<ul class='sousmenu'>
						<li><a href="{{route('resultats', [$elevage, 'Dressage'])}}">Dressage</a></li>
						
					</ul>
				</li>
				<li class='deroule'><a href="{{route('tous_resultats', [$elevage, 'toutes'])}}">Tous les résultats</a>
					<ul class='sousmenu'>
						<li><a href="{{route('tous_resultats', [$elevage, 'Modèle et Allures'])}}">Modèles et allures</a></li>
						
					</ul>
					<ul class='sousmenu'>
						<li><a href="{{route('tous_resultats', [$elevage, 'Dressage'])}}">Dressage</a></li>
						
					</ul>
				</li>
				<li class='deroule'><a href="{{route('reprises', [$elevage])}}">Liste des reprises de dressage</a></li>
				<li><a href="{{route('budget',[$elevage])}}">Voir mon budget</a></li>
			
				<li><a href="{{route('dashboard',[$elevage],  'ElevageController@index')}}">Retour à l'élevage</a>
				</li>
			
			</ul>
			
			@if (session('alert'))
    			<span class="alert">
       			{{ session('alert') }}
				</span>
			@endif
									
		
	</nav>

</div>
<div id="main">
@yield('content')
</div>
	
</body>
</html>