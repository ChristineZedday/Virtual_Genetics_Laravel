@extends('layouts.competitionDashboard')
@section('content')

<div class='animaux'>
<h3 >Chevaux inscrits en compétitions:</h3>
<table>
<tr>
	<th>Nom de l'animal</th>
    <th>Evènement</th>
    <th>Compétition</th>
    <th>Niveau</th>
    <th>Catégorie</th>
    <th>Actions</th>
</tr>
@foreach ($inscrits as $inscrit)
<tr>
	<td><a href="{{route('animal', ['elevage'=>$inscrit->Animal->elevage_id, 'animal'=>$inscrit->Animal->id])}}">{{$inscrit->Animal->NomComplet()}}</a></td>
	<td>{{$inscrit->Evenement->nom}}</td>
    <td>{{$inscrit->Competition->nom}}</td>
    <td>{{$inscrit->Competition->Niveau->libelle}}</td>
    <td>{{$inscrit->Categorie->nom}} </td>
   
    <td><a href="{{route('desinscrire',['resultat'=>$inscrit])}}">désinscrire</a></td>
</tr>
@endforeach
</div>

@endsection