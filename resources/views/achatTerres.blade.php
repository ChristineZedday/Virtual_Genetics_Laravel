@extends('layouts.elevageDashboard')
@section('content')
<form action="{{route('terres',[$elevage,$surface])}}" method="POST" onSubmit="return checkForm()" class="form">
						@csrf
						@method('POST')
<h3>Parcelle de {{$surface}} hectares à vendre</h3>
<h2>Prix: {{$surface * App\Elevage::PRIX_HECTARE}} achetoires</h2>
<div class ='form'>
<input type="hidden" id ="budget" value ="{{$elevage->Budget()->solde()}}"/>
<input type="hidden" id ="prix" value ="{{$surface * App\Elevage::PRIX_HECTARE}}"/>
	
			<input type="hidden" name="elevage"  value="{{ $elevage->id }}"
			/>
			<input type="hidden" name="surface"  value="{{ $surface }}"
			/>
			

<button type="submit">Acheter</button>	
</div>
</form>

<script>
function checkForm() 
	{
		valide = true;
		budget = parseInt(document.getElementById('budget').value();
	
		prix =	parseInt(document.getElementById('prix').value);
	
		
		if (prix > budget)
		{
			alert("Vous n'avez pas les moyens, attendez de trouver plus petit ou d'avoir plus d'argent");
			valide = false;
		}
		
		
		return valide;
	}
	</script>


@endsection