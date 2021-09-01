@extends('layouts.competitionDashboard')
@section('content')
<form action="{{route('inscription', [$epreuve, $animal])}}" method="POST" >
						@csrf
						@method('POST')
<h3>{{$competition->nom}}</h3>
<div class ='form'>
<label for="epreuve">Sélectionner l'épreuve</label>
<select name="epreuves">
	@foreach ($epreuves as $epreuve)
  <option value="{{$epreuve}}">$epreuve->nom</option>
  @endforeach
</select>

<label for="animal">Sélectionner l'animal</label>
<select name="animaux">
	@foreach ($animaux as $animal)
  <option value="{{$animal}}">$animal->nomComplet()</option>
  @endforeach
</select>

<button type="submit">Valider</button>	
</div>
</form>

@endsection