@extends('layouts.elevageDashboard')
@section('content')
<div id=parents>
<span id='male' class='par'>
<div class='rens'>
	<div class='texte'>
<h1>{{$etalon->NomComplet()}}</h1>
<h3>{{$etalon->Race->nom}}</h3>
<p>{{$etalon->couleur}}</p>
<p>{{$etalon->taille_cm}}</p>

<p>{{$etalon->date_naissance}}</p>
</div>
<figure class='petite'>
<?php
$images = $etalon->Image;
if (isset($images)) {
	$path0 ="'/img/fond.png'";
	echo '<img src='.$path0. ' style="z-index:0; position:absolute; width:80px; height:60px;" >';
		foreach ($images as $image) {
			$path = "'/img/".$image->chemin.".png'";
			$style = "position:absolute; width:80px; height:60px; z-index:".$image->z_index; 
			echo"<img src=".$path. " style ='" . $style."'>";
		}
}
?>
</figure>
</div>
@if (! $etalon->fondateur)
<div class='pedigree'>
			<span class='generation'>
				<span class='male'>{{$etalon->Sire->NomComplet()}}</span>
				<span class='femelle'>{{$etalon->Dam->NomComplet()}}</span>
			</span>
			<span class='generation'>
				<span class='male'>@isset($etalon->Sire->Sire) {{$etalon->Sire->Sire->NomComplet()}} @else gpp @endisset </span>
				<span class='femelle'>@isset($etalon->Sire->Dam) {{$etalon->Sire->Dam->NomComplet()}} @else gmp @endisset </span>
				<span class='male'>@isset($etalon->Dam->Sire) {{$etalon->Dam->Sire->NomComplet()}} @else gpm @endisset </span>
				<span class='femelle'> @isset($etalon->Dam->Dam) {{$etalon->Dam->Dam->NomComplet()}} @else gmm @endisset </span>
			</span>
			<span class='generation'>
				<span class='male'>@isset($etalon->Sire->Sire->Sire) {{$etalon->Sire->Sire->Sire->NomComplet()}} @else agpp @endisset </span>
				<span class='femelle'>@isset($etalon->Sire->Sire->Dam) {{$etalon->Sire->Sire->Dam->NomComplet()}} @else agmp @endisset </span>
				<span class='male'>	@isset($etalon->Sire->Dam->Sire) {{$etalon->Sire->Dam->Sire->NomComplet()}} @else agpp @endisset </span>	
				<span class='femelle'>@isset($etalon->Sire->Dam->Dam) {{$etalon->Sire->Dam->Dam->NomComplet()}} @else agmp @endisset </span>
				<span class='male'>	@isset($etalon->Dam->Sire->Sire) {{$etalon->Dam->Sire->Sire->NomComplet()}} @else agpm @endisset </span>
				<span class='femelle'>@isset($etalon->Dam->Sire->Dam) {{$etalon->Dam->Sire->Dam->NomComplet()}} @else agmm @endisset </span>
				<span class='male'>@isset($etalon->Dam->Dam->Sire) {{$etalon->Dam->Dam->Sire->NomComplet()}} @else agmp @endisset </span>
				<span class='femelle'>@isset($etalon->Dam->Dam->Dam) {{$etalon->Dam->Dam->Dam->NomComplet()}} @else agmm @endisset </span>
	</span>					
</div>
@endif

</span>
<?php 
$date = \App\Gamedata::date();
?>
@if ($jument->Statut->date_saillie != $date)
<div id='boutons'>
<a href="{{route('croisement',[$elevage->id,$etalon->id,$jument->id])}}">
			<button>Confirmer le croisement</button></a>
<a href="{{route('saillir',[$elevage->id,$jument->id])}}">
			<button>Changer d'étalon</button></a>

			</div>
			@endif
<span id = 'femelle' class='par'>
<div class='rens'>
	<div class='texte'>
<h1>{{$jument->NomComplet()}}</h1>
<h3>{{$jument->race->nom}}</h3>
<p>{{$jument->couleur}}</p>
<p>{{$jument->taille_cm}}</p>

<p>{{$jument->date_naissance}}</p>
</div>
<figure class='petite'>
<?php
$images = $jument->Image;
if (isset($images)) {
	$path0 ="'/img/fond.png'";
	echo '<img src='.$path0. ' style="z-index:0; position:absolute; width:80px; height:60px;" >';
		foreach ($images as $image) {
			$path = "'/img/".$image->chemin.".png'";
			$style = "position:absolute; width:80px; height:60px; z-index:".$image->z_index; 
			echo"<img src=".$path. " style ='" . $style."'>";
		}
}
?>
</figure>
</div>
@if (! $jument->fondateur)
<div class='pedigree'>
			<span class='generation'>
				<span class='male'>{{$jument->Sire->NomComplet()}}</span>
				<span class='femelle'>{{$jument->Dam->NomComplet()}}</span>
			</span>
			<span class='generation'>
				<span class='male'>@isset($jument->Sire->Sire) {{$jument->Sire->Sire->NomComplet()}} @else gpp @endisset </span>
				<span class='femelle'>@isset($jument->Sire->Dam) {{$jument->Sire->Dam->NomComplet()}} @else gmp @endisset </span>
				<span class='male'>@isset($jument->Dam->Sire) {{$jument->Dam->Sire->NomComplet()}} @else gpm @endisset </span>
				<span class='femelle'> @isset($jument->Dam->Dam) {{$jument->Dam->Dam->NomComplet()}} @else gmm @endisset </span>
			</span>
			<span class='generation'>
				<span class='male'>@isset($jument->Sire->Sire->Sire) {{$jument->Sire->Sire->Sire->NomComplet()}} @else agpp @endisset </span>
				<span class='femelle'>@isset($jument->Sire->Sire->Dam) {{$jument->Sire->Sire->Dam->NomComplet()}} @else agmp @endisset </span>
				<span class='male'>	@isset($jument->Sire->Dam->Sire) {{$jument->Sire->Dam->Sire->NomComplet()}} @else agpp @endisset </span>	
				<span class='femelle'>@isset($jument->Sire->Dam->Dam) {{$jument->Sire->Dam->Dam->NomComplet()}} @else agmp @endisset </span>
				<span class='male'>	@isset($jument->Dam->Sire->Sire) {{$jument->Dam->Sire->Sire->NomComplet()}} @else agpm @endisset </span>
				<span class='femelle'>@isset($jument->Dam->Sire->Dam) {{$jument->Dam->Sire->Dam->NomComplet()}} @else agmm @endisset </span>
				<span class='male'>@isset($jument->Dam->Dam->Sire) {{$jument->Dam->Dam->Sire->NomComplet()}} @else agmp @endisset </span>
				<span class='femelle'>@isset($jument->Dam->Dam->Dam) {{$jument->Dam->Dam->Dam->NomComplet()}} @else agmm @endisset </span>
	</span>					
	</div>
@endif
</span>
</div>


@endsection