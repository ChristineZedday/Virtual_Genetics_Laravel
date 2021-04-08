@extends('layouts.app')

@section('content')
<div>
<form action="{{route('elevage.store')}}" method="POST">
        @csrf
	<h2>Création d'un élevage</h2>
	@if(Session::has('status'))
<p class="{{ Session::get('alert-class')}}" >{{ Session::get('status') }}</p>
@endif
	<div>
	<label for="nom_elevage">Entrez le nom que vous avez choisi pour votre élevage</label><br/>
	<input type="text" name="nom_elevage" pattern="[^\s][A-zÀ-ž\s '\.\-]{3,26}" required />
	</div>
	<div>
	<label for="nom_eleveur">Entrez les nom et prénom que vous avez choisis pour l'éleveur fictif qui possède cet élevage (un seul élevage par éleveur). Vous pouvez utiliser votre nom de joueur pour un de vos élevages.</label><br/>
	<input type="text" name="nom_eleveur" pattern="[^\s][A-zÀ-ž\s '\.\-]{3,26}" required/>
	</div>
	<div>
	<label for="affixe">Vous pouvez, si vous le souhaitez, déposer un affixe pour votre élevage (prix: 500)</label><br/>
	<input type="text" name="affixe" pattern="[^\s][A-za-z\s '\.]{5,17}"/>
	</div>
	<div>
	<label for="affixe_pre">L'affixe peur précéder (mode anglo-saxon) ou suivre le nom (mode Français)</label><br/>
	Avant le nom: <input type="radio" name="affixe_pre"  value=1 /><br />
	Après le nom: <input type="radio" name="affixe_pre"  value=0 checked="yes" /><br />
	</div>
	<button type="submit">Valider</button>
	</form>
</div>

@endsection