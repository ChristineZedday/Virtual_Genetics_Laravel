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
	<td><a href="{{route('animal', ['elevage'=>$inscrit->Animal->elevage_id, 'animal'=>$inscrit->Animal->id])}}">{{$inscrit->Animal->NomComplet()}}</a></td>
	<td>{{$inscrit->Evenement->Nom($inscrit->Animal->Race_id)}}</td>
    <td>{{$inscrit->Categorie->nom}} </td>
   
    <td><a href="{{route('desinscrire',['evenement'=>$inscrit->Evenement->id, 'categorie'=>$inscrit->Categorie->id, $inscrit->Animal->id])}}">désinscrire</a></td>
</tr>
@endforeach
</div>

@endsection