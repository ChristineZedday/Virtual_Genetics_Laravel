@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3 >Mes femelles:</h3>
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
@foreach ($juments as $animal)
<tr>
	<td> {{$animal->nom}} </td>
	<td> {{$animal->race}} </td>
	<td> {{$animal->couleur}} </td>
	<td> {{$animal->date_naissance}} </td>
	<td>@isset($animal->Sire) {{ $animal->Sire->nom }} @endisset </td>
	<td>@isset($animal->Dam) {{ $animal->Dam->nom}} @endisset </td>

	<td> <a href="{{route('animal',[$elevage->id, $animal->id])}}"><button>voir</button></a> </td>
</tr>
@endforeach
</table>
</div>
@endsection