@extends('layouts.competitionDashboard')
@section('content')
<form action="{{route('inscription', [$epreuve, $animal])}}" method="POST" >
						@csrf
						@method('POST')
<h3>{{$competition->nom}}</h3>
<div class ='form'>
<label for="epreuve">Sélectionner l'épreuve</label>
<select name="epreuve" id="epreuve_id">
	@foreach ($epreuves as $epreuve)
  <option value="{{$epreuve->id}}">$epreuve->nom</option>
  @endforeach
</select>

<label for="animal">Sélectionner l'animal</label>
<select name="animal">
	@foreach ($animaux as $animal)
  <option value="{{$animal->id}}">$animal->nomComplet()</option>
  @endforeach
</select>

<button type="submit">Valider</button>	
</div>
</form>

@endsection