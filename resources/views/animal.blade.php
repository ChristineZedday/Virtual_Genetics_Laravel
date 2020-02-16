@extends('layouts.elevageDashboard')
@section('content')

<h1>{{$animal->nom}}</h1>
<h3>{{$animal->race}}</h3>
<p>{{$animal->sexe}}</p>
<p>{{$animal->couleur}}</p>
<p>{{$animal->taille_cm}}</p>
<p>{{$animal->date_naissance}}</p>
@if (! $animal->fondateur)
<p>par {{$animal->Sire->nom}}</p>
<p>et {{$animal->Dam->nom}}</p>
@endif

<p>{{$animal->elevage_id == $elevage->id? $animal->date_achat : ""}}</p>
<p>{{$animal->a_vendre? "à vendre" : ""}}</p>
<p>{{$animal->prix}}</p>
<div id='vente'>
@if (($animal->elevage_id == $elevage->id )&& !($animal->a_vendre))

<a href="{{route('vendre',[$elevage->id,$animal->id])}}">
			<button >Mettre en vente</button></a>
@else
	@if ($animal->elevage_id == $elevage->id && $animal->a_vendre)
	<a href="{{route('pas.vendre',[$elevage->id,$animal->id])}}"><button>Retirer de la vente</button></a>
		@elseif ($animal->elevage_id != $elevage->id && $animal->a_vendre)
		<a href="{{route('acheter',[$elevage->id,$animal->id])}}"><button>Acheter</button></a>
	@endif
@endif
</div>
<div id='saillie'>
@if (($animal->elevage_id == $elevage->id )&& ($animal->sexe=='femelle'))

<a href="{{route('saillir',[$elevage->id,$animal->id])}}">
			<button >Faire saillir</button></a>

@endif
</div>
@endsection