<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>Elevage</title>
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
				<li class='deroule'><a href="{{route('animaux',[$elevage,'tous'])}}">Voir mon cheptel</a>
					<ul class='sousmenu'>
						<li><a href="{{route('animaux',[$elevage,'reps'])}}">Seulement les reproducteurs adultes</a></li>
						<li><a href="{{route('animaux',[$elevage,'males'])}}">Etalons uniquement</a></li>
						<li><a href="{{route('animaux',[$elevage,'femelles'])}}">Juments uniquement</a></li>
						<li><a href="{{route('animaux',[$elevage,'jeunes'])}}">Seulement les jeunes</a></li>
						<li><a href="{{route('animaux',[$elevage,'hongres'])}}">Seulement les animaux stérilisés</a></li>
						<li><a href="{{route('animaux',[$elevage,'vente'])}}">Seulement les animaux à vendre</a></li>
						
					</ul>
				</li>
				<li><a href="{{route('budget',[$elevage])}}">Voir mon budget</a></li>
			
				<li><a href="{{route('home')}}">Changer d'élevage</a>
				</li>
				<li class='deroule'><a href="{{route('avendre',[$elevage, ' '])}}">Acheter un animal</a>
				<ul class='sousmenu'>
					<?php
					$races = App\Race::all();
					?>
					@foreach ($races as $race)
					<li><a href="{{route('avendre',[$elevage, $race->id])}}">{{$race->nom}}</a></li>
					@endforeach
				</ul>
				</li>
				<li><a href="{{route('reproduction.jument',[$elevage])}}">Faire saillir une jument</a></li>
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