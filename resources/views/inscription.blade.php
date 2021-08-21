@extends('layouts.competitionDashboard')
@section('content')
<form action="{{route('inscription', [$competition, $animal])}}" method="POST" >
						@csrf
						@method('PUT')
<h3>{{$competition->nom}}</h3>
<div class ='form'>
<label for="epreuve">Sélectionner l'épreuve</label>
<label for="animal">Sélectionner l'animal</label>


<button type="submit">Valider</button>	
</div>
</form>

@endsection