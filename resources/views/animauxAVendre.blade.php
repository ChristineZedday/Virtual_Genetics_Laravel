@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3 >Animaux à vendre:</h3>
<table>
<tr>
    <th>Nom </th>
    <th>Race</th>
    <th>Sexe</th>
	<th>Prix</th>
    <th>Elevage</th>
    
    <th>Voir</th>
  </tr>
@foreach ($animaux as $animal)
<tr>
	<td> {{$animal->NomComplet()}} </td>
	<td> {{$animal->Race->nom}} </td>
	<td> {{$animal->sexe}} </td>
	<td>{{$animal->prix}}</td>
	<?php 
		 $vendeur = $animal->elevage_id;
		 $vendeur = App\Elevage::Find($vendeur);
	?>
	<td> {{$vendeur->nom_elevage}} </td>
	
	<td> <a href="{{route('animal',[$elevage->id, $animal->id])}}"><button>voir</button></a> </td>
</tr>
@endforeach
</table>
</div>
@endsection