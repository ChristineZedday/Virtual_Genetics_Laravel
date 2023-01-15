@extends('layouts.competitionDashboard')
@section('content')
<form action="{{route('inscription', [$evenement,$competition])}}" method="POST" >
						@csrf
						@method('POST')
						
<h3>{{$evenement->nom}}: {{$competition->nom}}</h3>
<div class ='form'>
<label for="categorie_id">Sélectionner l'épreuve</label>

<select name="categorie_id" >
	@foreach ($categories as $categorie)
	
  <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
  @endforeach
</select>

<label for="animal_id">Sélectionner l'animal</label>
<select name="animal_id">
	@foreach ($animaux as $animal)
  <option value="{{$animal->id}}">{{$animal->nomComplet()}} {{$animal->race->nom}}</option>
  @endforeach
</select>

<button type="submit">Valider</button>	
</div>
</form>

@endsection