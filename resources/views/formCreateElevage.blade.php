@extends('layouts.app')

@section('content')
<div>
<form action="{{route('elevage.store')}}" method="POST">
        @csrf
	<h2>Création d'un élevage</h2>
	<div>
	<label for="nom_elevage">Entrez le nom que vous avez choisi pour votre élevage</label><br/>
	<input type="text" name="nom_elevage"/>
	</div>
	<div>
	<label for="nom_eleveur">Entrez les nom et prénom que vous avez choisis pour l'éleveur fictif qui possède cet élevage (un seul élevage par éleveur). Vous pouvez utiliser votre nom de joueur pour un de vos élevages.</label><br/>
	<input type="text" name="nom_eleveur"/>
	</div>
	<button type="submit">Valider</button>
	</form>
</div>

@endsection