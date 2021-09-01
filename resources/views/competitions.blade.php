@extends('layouts.competitionDashboard')
@section('content')

<div class='animaux'>
<h3 >Prochaines compétitions:</h3>
<table>
<tr>
	<th>Nom</th>
    <th>Date </th>
    <th>Niveau</th>
    <th>Actions</th>
</tr>
@foreach ($evenements as $evenement)
<tr>
	<td>{{$evenement->nom()}}</td>
    <td>{{$evenement->date}} </td>
    <td>{{$evenement->competition->niveau}}</td>
    <td><a href="{{route('inscrire',[$elevage, $evenement])}}">Inscrire</a></td>
</tr>
@endforeach
</div>

@endsection