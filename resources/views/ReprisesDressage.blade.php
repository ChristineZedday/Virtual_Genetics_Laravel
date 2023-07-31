@extends('layouts.competitionDashboard')
@section('content')

<div class='animaux'>
<h3 >Les reprises de dressage:</h3>
<table>
	<thead><tr>
		<th>Nom</th>
		<th>Niveau de difficulté (1 à 20)</th>
		<th>Taille minimum</th>
		<th>Taille maximum</th>
		<th>&Acirc;ge minimum</th>
</tr></thead>
<tbody>
	@foreach ($reprises as $reprise)
	<tr>
		<td>{{$reprise->nom}}</td>
		<td>{{$reprise->niveau_num_global}}</td>
		<td>{{$reprise->taille_min_cm}}</td>
		<td>{{$reprise->taille_max_cm}}</td>
		<td>{{$reprise->age_min_administratif}}</td>
	</tr>
	@endforeach
</tbody>
</table>


@endsection