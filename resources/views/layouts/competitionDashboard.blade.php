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
				<li class='deroule'><a href="{{route('competitions',['toutes'])}}">Compétitions à venir</a>
					<ul class='sousmenu'>
						<li><a href="{{route('competitions',['MA'])}}">Modèles et allures</a></li>
						
					</ul>
				</li>
				<li class='deroule'><a href="{{route('resultats',['toutes'])}}">Résultats des compétitions</a>
					<ul class='sousmenu'>
						<li><a href="{{route('resultats',['MA'])}}">Modèles et allures</a></li>
						
					</ul>
				</li>
				<li><a href="{{route('budget',[$elevage])}}">Voir mon budget</a></li>
			
				<li><a href="{{route('dashboard',[$elevage],  'ElevageController@index')}}">Retour à l'élevage</a>
				</li>
			
			</ul>
			<span id='temps'>
				<span id='ladate'>{{$date}}</span><br/>
				<a href="{{route('temps',[$elevage])}}">Avancer d'un mois</a><br/>
				<span class= 'rouge'>Irréversible!</span>
			</span>
								

									
		
	</nav>
@if (session('alert'))
    <div class="alert" }>
       {{ session('alert') }}
    </div>
@endif
</div>
<div id="main">
@yield('content')
</div>
	
</body>
</html>