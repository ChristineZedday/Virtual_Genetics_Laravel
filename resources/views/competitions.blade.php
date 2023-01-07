@extends('layouts.competitionDashboard')
@section('content')

<div class='animaux'>
<h3 >Prochaines compétitions:</h3>
<table>
<tr>
	<th>Nom</th>
    <th>Date </th>
  
</tr>
@foreach ($evenements as $evenement)
<tr> <td>
    {{$evenement->nom}}
</td>
<td>{{$evenement->date}} </td>
</tr>
<?php 
$id = $evenement->id;
$competitions = App\Competition::whereHas('evenements', function ($q) use ($id){$q->where('evenement_id',$id);})->get();
?>
@foreach ($competitions as $competition)
<?php 
$id = $competition->id;
$races = App\Race::whereHas('competitions', function ($q) use ($id){$q->where('competition_id',$id);})->get();
?>
@foreach ($races as $race)

<tr>
	<td>{{$competition->nom}}</td>
   
   
    <td><a href="{{route('inscrire',[$elevage, $evenement,$competition])}}">Inscrire</a></td>
</tr>
@endforeach
@endforeach
@endforeach
</div>

@endsection