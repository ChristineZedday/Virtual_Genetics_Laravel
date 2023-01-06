@extends('layouts.competitionDashboard')
@section('content')

<div class='animaux'>
<h3 >Prochaines compétitions:</h3>
<table>
<tr>
	<th>Nom</th>
    <th>Date </th>
  
    <th>Actions</th>
</tr>
@foreach ($evenements as $evenement)
@foreach ($races as $race)
<tr>
	<td>{{$evenement->nom($race)}}</td>
    <td>{{$evenement->date}} </td>
   
    <td><a href="{{route('inscrire',[$elevage, $evenement])}}">Inscrire</a></td>
</tr>
@endforeach
@endforeach
</div>

@endsection