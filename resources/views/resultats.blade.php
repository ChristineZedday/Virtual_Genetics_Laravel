@extends('layouts.competitionDashboard')
@section('content')

<div class='animaux'>
<h3 >Résultats de vos chevaux en compétitions:</h3>
<table>
<tr>
	<th>Nom de l'animal</th>
	<th>Evènement</th>
    <th>Compétition</th>
    <th>Catégorie</th>
	<th> Classement</th>
    <th>Note de synthèse</th>
</tr>
@foreach ($resultats as $resultat)
<?php 
$id = $resultat->evenement_id;
$race= $resultat->Animal->Race->id;
$competition = App\Competition::whereHas('evenements', function ($q) use ($id){$q->where('evenement_id',$id);})->whereHas('races', function ($qu) use ($race){$qu->where('race_id',$race);})->first();
?>
<tr>

	<td><a href="{{route('animal', ['elevage'=>$elevage, 'animal'=>$resultat->animal_id])}}">{{$resultat->Animal->NomComplet()}}</a></td>
	<td>{{$resultat->Evenement->nom}}</td>
	<td>{{$competition->nom }}</td>
    <td>{{$resultat->Categorie->nom}}</td>
	<td>{{$resultat->texteClassement()}} </td>
	<td>{{$resultat->note_synthese}} </td>
   
    
</tr>
@endforeach
</div>

@endsection