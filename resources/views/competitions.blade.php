@extends('layouts.competitionDashboard')
@section('content')

<div class='animaux'>
<h3 >Prochaines compétitions:</h3>
<table>
<tr>
	<th>Nom</th>
    <th>Date </th>
    <th>Niveau</th>
    <th>Inscrire un animal</th>
</tr>
@foreach ($competitions as $competition)
<tr>
	<td>{{$competition->nom()}}</td>
    <td>{{$competition->date_competition}} </td>
    <td>{{$competition->niveau}}</td>
    <td><a href="{{route('inscrire',[$elevage, $competition])}}">Inscrire</a></td>
</tr>
@endforeach
</div>

@endsection