@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3 >Animaux à vendre:</h3>
<table>
<tr>
    <th>Nom </th>
    <th>Race</th>
    <th>Sexe</th>
    <th>Elevage</th>
    
    <th>Voir</th>
  </tr>
@foreach ($animaux as $animal)
<tr>
	<td> {{$animal->nom}} </td>
	<td> {{$animal->race}} </td>
	<td> {{$animal->sexe}} </td>
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