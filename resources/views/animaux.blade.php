@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3 >Mes animaux:</h3>
<table>
<tr>
    <th>Nom </th>
    <th>Race</th>
    <th>Sexe</th>
    <th>Date achat</th>
    <th>A Vendre?</th>
    <th>Voir</th>
  </tr>
@foreach ($elevage->Animaux as $animal)
<tr>
	<td> {{$animal->nom}} </td>
	<td> {{$animal->race}} </td>
	<td> {{$animal->sexe}} </td>
	<td> {{$animal->date_achat}} </td>
	<td> {{ $animal->a_vendre? "à vendre": ""  }} </td>
	<td> <a href="{{route('animal',[$elevage->id, $animal->id])}}"><button>voir</button></a> </td>
</tr>
@endforeach
</table>
</div>
@endsection