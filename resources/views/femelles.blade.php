@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3 >Mes femelles:</h3>
<table>
<tr>
    <th>Nom </th>
    <th>Race</th>
    <th>Couleur</th>
	<th>Taille</th>
    <th>Date de naissance</th>
    <th>Père</th>
	<th>Mère</th>
	<th>Statut</th>
    <th>Voir</th>
  </tr>
@foreach ($juments as $animal)
<tr>
	<td> {{$animal->NomComplet()}} </td>
	<td> {{$animal->Race->nom}} </td>
	<td> {{$animal->couleur}} </td>
	<td> {{$animal->taille_cm}} </td>
	<td> {{$animal->date_naissance}} </td>
	<td>@isset($animal->Sire) {{ $animal->Sire->NomComplet() }} @endisset </td>
	<td>@isset($animal->Dam) {{ $animal->Dam->NomComplet()}} @endisset </td>
<td>@isset($animal->Statut){{$animal->Statut->vide}}@else pas de statut @endisset</td>
	<td> <a href="{{route('animal',[$elevage->id, $animal->id])}}"><button>voir</button></a> </td>
</tr>
@endforeach
</table>
</div>
@endsection