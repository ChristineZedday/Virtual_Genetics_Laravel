@extends('layouts.competitionDashboard')
@section('content')
<form action="{{route('inscription', [$epreuve, $animal])}}" method="POST" >
						@csrf
						@method('POST')
<h3>{{$competition->nom}}</h3>
<div class ='form'>
<label for="epreuve">Sélectionner l'épreuve</label>

<label for="animal">Sélectionner l'animal</label>


<button type="submit">Valider</button>	
</div>
</form>

@endsection