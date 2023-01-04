@extends('layouts.competitionDashboard')
@section('content')

<div class='animaux'>
<h3 >Résultats de vos chevaux en compétitions:</h3>
<table>
<tr>
	<th>Nom de l'animal</th>
    <th>Compétition</th>
    <th>Catégorie</th>
	<th> Classement</th>
    <th>Note de synthèse</th>
</tr>
@foreach ($resultats as $resultat)
<tr>

	<td><a href="{{route('animal', ['elevage'=>$resultat->Animal->elevage_id, 'animal'=>$resultat->Animal->id])}}">{{$resultat->Animal->NomComplet()}}</a></td>
	<td>{{$resultat->Evenement->nom()}}</td>
    <td>{{$resultat->Categorie->nom}} </td>
	<td>{{$resultat->texteClassement()}} </td>
	<td>{{$resultat->note_synthese}} </td>
   
    
</tr>
@endforeach
</div>

@endsection