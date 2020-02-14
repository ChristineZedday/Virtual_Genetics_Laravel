@extends('layouts.elevageDashboard')
@section('content')

<h1>{{$animal->nom}}</h1>
<h3>{{$animal->race}}</h3>
<p>{{$animal->sexe}}</p>
<p>{{$animal->couleur}}</p>
<p>{{$animal->taille_cm}}</p>
<p>{{$animal->date_naissance}}</p>

<p>{{$animal->elevage_id == $elevage->id? $animal->date_achat : ""}}</p>
<p>{{$animal->a_vendre? "à vendre" : ""}}</p>
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

<script>
function pricer()
{
div = document.getElementById('vente');
form = document.createElement('form');
input = document.createElement('input');
input.name ="prix";
input.type = 'number';
form.appendChild(input);
valider = document.createElement('button');
form.appenChild('valider');
div.appenChild('form');

}
</script>
@endsection