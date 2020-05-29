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
<h3 >Mes Etalons:</h3>
<table>
<tr>
    <th>Nom </th>
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
	<td> {{$animal->NomComplet()}} </td>
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

	<td> <a href="{{route('etalon',[$elevage->id, $animal->id, $jument->id])}}"><button>voir</button></a> </td>
</tr>
@endforeach
</table>
</div>
@endsection