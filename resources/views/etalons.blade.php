@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3>Jument à faire saillir:</h3>
<p>{{$jument->NomComplet()}}</p>
<p>{{$jument->Race->nom}}</p>
<p>{{$jument->couleur}}</p>
<P>{{$jument->taille_cm}}</P>
@if (! $jument->fondateur)
<p>par {{$jument->Sire->NomComplet()}}</p>
<p>et {{$jument->Dam->NomComplet()}}</p>
@endif
@isset ($jument->Statut->etalon_id)
<p>Dernière saillie: {{$jument->Statut->Male->NomComplet()}}</p>
@if ((App\Animal::find($jument->Statut->etalon_id)->elevage_id == $elevage->id) && (isset(App\Animal::find($jument->Statut->etalon_id)->StatutMale)))
<a href="{{route('etalon',[$elevage->id, $jument->Statut->etalon_id, $jument->id])}}"><button>Réutiliser?</button></a>
@endif
@endisset
<h3 >Mes Etalons:</h3>
<table>
<tr>
	<th>Photo</th>
	<th>Nom </th>
	<th>Qualité</th>
	<th>Race</th>

    <th>Couleur</th>
	<th>taille</th>
    <th>Date de naissance</th>
    <th>Père</th>
	<th>Mère</th>
    <th>Voir</th>
  </tr>
@foreach ($etalons as $animal)
<tr>
<td class='photo' style="height:70px; width:90px;">
<figure class='petite'>
<a href="{{route('animal',[$elevage->id, $animal->id])}}">

<?php
$images = $animal->Image;
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

</a>
</figure>
	</td>
	<td> <a href="{{route('animal',[$elevage->id, $animal->id])}}"> {{$animal->NomComplet()}} </a></td>
	<td> &Eacute;talon {{$animal->StatutMale->qualite}}</td>
	<td> {{$animal->Race->nom}} </td>

	<td> {{$animal->couleur}} </td>
	<td> {{$animal->taille_cm}} </td>
	<td> {{$animal->date_naissance}} </td>
	@if (! $animal->fondateur)
	<td> {{ $animal->Sire->NomComplet() }} </td>
	<td> {{ $animal->Dam->NomComplet()}} </td>
	@else
<td></td>
<td></td>
	@endif

	<td> <a href="{{route('etalon',[$elevage->id, $animal->id, $jument->id])}}"><button>Celui-ci?</button></a> </td>
</tr>
@endforeach
</table>
</br>
<h3>Etalons extérieurs</h3>
<table>
<tr>
	<th>Nom </th>
	<th>Qualité</th>
    <th>Race</th>
    <th>Couleur</th>
	<th>taille</th>
    <th>Date de naissance</th>
    <th>Père</th>
	<th>Mère</th>
	<th>Prix de la saillie</th>
    <th>Voir</th>
  </tr>
@foreach ($exterieurs as $animal)
<tr>
	<td> <a href="{{route('animal',[$elevage->id, $animal->id])}}"> {{$animal->NomComplet()}} </a></td>
	<td> &Eacute;talon {{$animal->StatutMale->qualite}}</td>
	<td> {{$animal->Race->nom}} </td>
	<td> {{$animal->couleur}} </td>
	<td> {{$animal->taille_cm}} </td>
	<td> {{$animal->date_naissance}} </td>
	@if (! $animal->fondateur)
	<td> {{ $animal->Sire->NomComplet() }} </td>
	<td> {{ $animal->Dam->NomComplet()}} </td>
	@else
<td></td>
<td></td>
	@endif
	<td> {{ $animal->StatutMale->prix}}</td>

	<td> <a href="{{route('etalon',[$elevage->id, $animal->id, $jument->id])}}"><button>Celui-là?</button></a> </td>
</tr>
@endforeach
</table>
</div>

@endsection