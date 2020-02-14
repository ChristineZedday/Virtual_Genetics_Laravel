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
<span>{{$date}}</span>
<nav>
	<ul>
		<li><a href="{{route('animaux',[$elevage])}}">Voir mon cheptel</a></li>
		<li><a href="{{route('budget',[$elevage])}}">Voir mon budget</a></li>
		<li><a href="{{route('temps')}}">Avancer d'un mois</a></li>
		<li><a href="{{route('home')}}">Voir mes élevages</a></li>
		<li><a href="{{route('animaux.avendre',[$elevage])}}">Acheter un animal</a></li>
		                       

                                  
	</ul>
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