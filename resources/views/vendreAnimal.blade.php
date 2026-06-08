@extends('layouts.elevageDashboard')
@section('content')
<form action="{{route('vente')}}" method="POST" >
						@csrf
						@method('PUT')
<h3>{{$animal->nomComplet()}}</h3>
<div class ='form'>
<label for="prix"></label><input type="number" step="50" min="0" name="prix" value ="@isset($animal->prix) {{$animal->prix}} @endisset" />
<input type="hidden" name='id' value={{$animal->id}} />
<button type="submit">Valider</button>	
</div>
</form>

@endsection