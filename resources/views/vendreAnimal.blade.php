@extends('layouts.elevageDashboard')
@section('content')
<form action="{{route('vente')}}" method="POST" >
						@csrf
						@method('PUT')
<h3>{{$animal->nom}}</h3>
<div class ='form'>
<label for="prix"></label><input type="number" name='prix'>
<input type="hidden" name='id' value={{$animal->id}}>
<button type="submit">Valider</button>	
</div>
</form>

@endsection