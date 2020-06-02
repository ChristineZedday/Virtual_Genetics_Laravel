@extends('layouts.app')

@section('content')
	<div class='container'>
		<p>Bienvenue sur mon application simulateur d'élevage de chevaux, basée sur la génétique</p>
		<p>Pour jouer, vous devez créer au moins un élevage, un budget vous sera alloué pour acheter des reproducteurs et effectuer des actes vétérinaires. Vous pourrez aussi vendre des chevaux.</p>
		<p>Ceci est la version 1.0 qui ne prend pas en compte le coût d'entretien des chevaux (profitez-en bien, petits veinards!) mais qui ne propose pas non plus de compétitions.</p>
		<p>Vos chevaux et poneys naissent, grandissent et vieillissent en fonction du temps: c'est vous qui choisissez votre rythme, en cliquant sur "avancer d'un mois". Attention: Si vous avez plusieurs élevages, tous seront concernés! Ne changez de mois que lorsque vous avez fait tout ce que vous aviez à faire dans tous vos élevages, et entendez-vous avec les autres joueurs si vous êtes plusieurs!</p>
	
		<p>Pour en savoir plus sur la génétique des chevaux, allez sur <a href="http://chrizedday.free.fr">mon site</a>, entre autres!</p>
		<p><a href="{{route('temps')}}">Avancer d'un mois</a></p>
		
		<h2>Liste de vos élevages:</h2>
			<div id='elevages'>
			@foreach ($elevages as $elevage)
				<div><p>{{$elevage->nom_elevage}}</p>
				<p>{{$elevage->nom_eleveur}}</p>
				
				<a href="{{route('dashboard',[$elevage->id])}}"><button>Aller</button></a>
				</div>
			@endforeach
			</div>
			<a href="{{route('elevage.create')}}"><button>Nouvel élevage</button></a>
			
	</div>
@endsection