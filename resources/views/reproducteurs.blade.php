@extends('layouts.elevageDashboard')
@section('content')
<span id='male'>
<h1>{{$etalon->nom}}</h1>
<h3>{{$etalon->race}}</h3>
<p>{{$etalon->couleur}}</p>
<p>{{$etalon->taille_cm}}</p>
@if (!$etalon->fondateur)
<p>{{$etalon->Sire->nom}}</p>
<p>{{$etalon->Dam->nom}}</p>
@endif
<p>{{$etalon->date_naissance}}</p>

</span>
<span id = 'femelle'>
<h1>{{$jument->nom}}</h1>
<h3>{{$jument->race}}</h3>
<p>{{$jument->couleur}}</p>
<p>{{$jument->taille_cm}}</p>
@if (!$jument->fondateur)
<p>{{$jument->Sire->nom}}</p>
<p>{{$jument->Dam->nom}}</p>
@endif
<p>{{$jument->date_naissance}}</p>

</span>

<a href="{{route('croisement',[$elevage->id,$etalon->id,$jument->id])}}">
			<button>Confirmer le croisement?</button></a>



@endsection