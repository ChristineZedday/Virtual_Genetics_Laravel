@extends('layouts.elevageDashboard')
@section('content')
<div id=parents>
<span id='male' class='par'>
<div class='rens'>
	<div class='texte'>
<h1 class='nom'>{{$etalon->NomComplet()}}</h1>
<h3>{{$etalon->Race->nom}}</h3>
<p>{{$etalon->StatutMale->qualite}}</p>
<p>{{$etalon->couleur}}</p>
<p>{{$etalon->taille()}}</p>

<p>{{$etalon->date_naissance}}</p>
</div>
<figure class='petite'>
<?php
$images = $etalon->Image;
if (isset($images)) {
		foreach ($images as $image) {
			$path = "'/img/".$image->chemin.".png'";
			$style = "position:absolute;  width:120px; height:90px; z-index:".$image->z_index; 
			echo"<img src=".$path. " style ='" . $style."'>";
		}
}
?>
</figure>
</div>
@if (! $etalon->fondateur)
	<?php $animal = $etalon; ?>
	@include('includes.pedigree')

@endif

</span>
<?php 
$date = \App\Gamedata::date();
?>
@if ($jument->StatutFemelle->date_saillie != $date)
<div id='boutons'>
	@if ($etalon->elevage_id == $elevage->id)
	@if ($etalon->StatutMale->carnet_saillies)
<a href="{{route('croisement',[$elevage->id,$etalon->id,$jument->id, 1])}}">
			<button>Confirmer le croisement avec déclaration de saillie </button></a>
	@endif
<a href="{{route('croisement',[$elevage->id,$etalon->id,$jument->id, 0])}}">
<button>Confirmer le croisement sans déclaration de saillie </button></a>
@else 
<a href="{{route('croisement',[$elevage->id,$etalon->id,$jument->id, 1])}}">
			<button>Confirmer le croisement (saillie déclarée par l'étalonnier)</button></a>
@endif
<a href="{{route('saillir',[$elevage->id,$jument->id])}}">
			<button>Changer d'étalon</button></a>
<input type="hidden" id="budget" value="{{$elevage->budget}}" />
<input type="hidden" id ="route" value ="{{route('consang',[$elevage->id,$etalon->id,$jument->id])}}"/>
			<button onclick="checkBudget()">Connaître la consanguinité (10 euros)</button>
<p id="consang"> {{session ('message')}}</p>
			</div>
			@endif
<span id = 'femelle' class='par'>
<div class='rens'>
	<div class='texte'>
<h1 class='nom'>{{$jument->NomComplet()}}</h1>
<h3>{{$jument->race->nom}}</h3>
<p>{{$jument->couleur}}</p>
<p>{{$jument->taille() }}</p>
<p>&nbsp;</p>
<p>{{$jument->date_naissance}}</p>
</div>
<figure class='petite'>
<?php
$images = $jument->Image;
if (isset($images)) {
		foreach ($images as $image) {
			$path = "'/img/".$image->chemin.".png'";
			$style = "position:absolute; width:120px; height:90px; z-index:".$image->z_index; 
			echo"<img src=".$path. " style ='" . $style."'>";
		}
}
?>
</figure>
</div>
@if (! $jument->fondateur)

	<?php $animal = $jument; ?>
	@include('includes.pedigree')

@endif
</span>
</div>
<script>
function checkBudget() 
	{
		budget = document.getElementById('budget').value;	
		route = document.getElementById('route').value;
	if (budget < 10)
	{
		alert("Sans flouze, il vous faudra la calculer vous mêmes");
	}
	else
	{
		document.location.href=route; 
	}
}

	</script>


@endsection