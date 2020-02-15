@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3>Jument à faire saillir:</h3>
<p>{{$jument->nom}}</p>
<p>{{$jument->race}}</p>
<p>{{$jument->couleur}}</p>
<p>par {{$jument->Sire->nom ??}}</p>
<p>et {{$jument->Dam->nom ??}}</p>
<h3 >Mes Etalons:</h3>
<table>
<tr>
    <th>Nom </th>
    <th>Race</th>
    <th>Couleur</th>
    <th>Date de naissance</th>
    <th>Père</th>
	<th>Mère</th>
    <th>Voir</th>
  </tr>
@foreach ($etalons as $animal)
<tr>
	<td> {{$animal->nom}} </td>
	<td> {{$animal->race}} </td>
	<td> {{$animal->couleur}} </td>
	<td> {{$animal->date_naissance}} </td>
	<td> {{ $animal->Sire }} </td>
	<td> {{ $animal->Dam }} </td>

	<td> <a href="{{route('etalon',[$elevage->id, $animal->id, $jument->id])}}"><button>voir</button></a> </td>
</tr>
@endforeach
</table>
</div>
@endsection