@extends('layouts.competitionDashboard')
@section('content')

<div class='animaux'>
<h3 >Chevaux inscrits en compétitions:</h3>
<table>
<tr>
	<th>Nom de l'animal</th>
    <th>Compétition</th>
    <th>Catégorie</th>
    <th>Actions</th>
</tr>
@foreach ($inscrits as $inscrit)
<tr>
	<td>{{$inscrit->animal()->nomComplet()}}</td>
	<td>{{$inscrit->evenement()->nom()}}</td>
    <td>{{$inscrit->categorie()->nom}} </td>
   
    <td><a href="#">désinscrire</a></td>
</tr>
@endforeach
</div>

@endsection