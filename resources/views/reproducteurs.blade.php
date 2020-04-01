@extends('layouts.elevageDashboard')
@section('content')
<span id='male'>
<h1>{{$etalon->NomComplet()}}</h1>
<h3>{{$etalon->Race->nom}}</h3>
<p>{{$etalon->couleur}}</p>
<p>{{$etalon->taille_cm}}</p>
@if (!$etalon->fondateur)
<p>{{$etalon->Sire->NomComplet()}}</p>
<p>{{$etalon->Dam->NomComplet()}}</p>
@endif
<p>{{$etalon->date_naissance}}</p>

</span>
<span id = 'femelle'>
<h1>{{$jument->NomComplet()}}</h1>
<h3>{{$jument->race->nom}}</h3>
<p>{{$jument->couleur}}</p>
<p>{{$jument->taille_cm}}</p>
@if (!$jument->fondateur)
<p>{{$jument->Sire->NomComplet()}}</p>
<p>{{$jument->Dam->NomComplet()}}</p>
@endif
<p>{{$jument->date_naissance}}</p>

</span>

<a href="{{route('croisement',[$elevage->id,$etalon->id,$jument->id])}}">
			<button>Confirmer le croisement?</button></a>



@endsection