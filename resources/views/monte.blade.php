@extends('layouts.elevageDashboard')
@section('content')
<form action="{{route('montepublique', [$elevage])}}" method="POST" >
						@csrf
						@method('PUT')
<h3>{{$etalon->nomComplet()}}</h3>
<div class ='form'>
<label for="prix"></label><input type="number" name='prix'>
<input type="hidden" name='id' value={{$etalon->id}}>
<button type="submit">Valider</button>	
</div>
</form>

@endsection