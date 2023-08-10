@extends('layouts.competitionDashboard')
@section('content')

<div class='animaux'>
<h3 >Prochaines compétitions:</h3>
<table>
<tr>
	<th>Nom</th>
    
    <th>Niveau</th>
   
    <th>Date </th>
   
   
  
</tr>
@foreach ($evenements as $evenement)
<tr> <td colspan="2">
    {{$evenement->nom}}
</td>
<td >{{$evenement->date}} </td>
</tr>
<?php 
$id = $evenement->id;
$competitions = App\Competition::whereHas('evenements', function ($q) use ($id){$q->where('evenement_id',$id);})->get();
?>
@foreach ($competitions as $competition)

<tr>
	<td>{{$competition->nom}}</td>
    <td>{{$competition->Niveau->libelle}}</td>
   @if ($competition->type == "Dressage")
   <table>
        @foreach ($competition->reprises as $reprise)
       <tr> <td>{{$reprise->nom}}</td>
        <td><a href="{{route('inscrire',[$elevage, $evenement,$competition])}}">Inscrire</a></td></tr>
        @endforeach
    <table>
   @else
    <td><a href="{{route('inscrire',[$elevage, $evenement,$competition])}}">Inscrire</a></td>
    @endif
</tr>

@endforeach
@endforeach
</div>

@endsection