@extends('layouts.elevageDashboard')
@section('content')
<form action="{{route('terres',[$elevage,$surface])}}" method="POST" >
						@csrf
						@method('POST')
<h3>Parcelle de {{$surface}} hectares à vendre</h3>
<h2>Prix: {{$surface * App\Elevage::PRIX_HECTARE}} achetoires</h2>
<div class ='form'>

	
			<input type="hidden" name="elevage"  value="{{ $elevage->id }}"
			/>
			<input type="hidden" name="surface"  value="{{ $surface }}"
			/>
			

<button type="submit">Acheter</button>	
</div>
</form>

@endsection