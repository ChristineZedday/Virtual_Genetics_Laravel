@extends('layouts.elevageDashboard')

@section('content')
<div id="content">
	<div id="enr">
		<form action="{{route('regSB',[$animal->id])}}" method="POST" onSubmit="return checkForm()" class="form">
			@method('PUT')
			@csrf
			<h2 class='form'>Enregistrer votre produit dans un stud book de croisement</h2>
			@if(Session::has('status'))
			<p class="{{ Session::get('alert-class')}}" >{{ Session::get('status') }}</p>
			@endif
			<div class='form-group'>
			
			Veuillez trouver la liste des races dans lesquelles votre cheval peut être inscrit ci-dessous. Si l'animal est inscriptible dans plusieurs registres, un seul peut-être choisi, conformémént au règlement des Haras Nationaux.
			@isset($races)</p>
			<input type="hidden" id ="budget" value ="{{$elevage->budget}}"/>
			
			<label for="race">Vous avez la possibilité d'enregistrer votre produit, moyennant des frais variables, dans l'une des races suivantes:</label><br/>
			<select  name="race" id="race">
				<option value="1">OC 0</option>
					@foreach ($races as $race)
					<option value="{{$race->id}}">{{$race->nom}} {{$race->frais_enregistrement}}</option>	
					@endforeach
			</select> 

			@endisset
			</div>
			<div class='form'> 
				<button type="submit">Valider</button>
				</div>
		</form>
	</div>


					
	<div id='image'>	
			@include('includes.image')
	</div>

</div>
<script>
function checkForm() 
	{
		valide = true;
		budget = document.getElementById('budget').value;	
		
		select = document.getElementById('race');
		opt = select.options[select.selectedIndex].text;
		//split extraire frais
		tab = opt.split(" ");
	
		frais =parseInt(tab[tab.length-1]);
		if (frais > budget)
		{
			alert("vous devrez attendre d'être en fonds pour procéder à l'enregistrement");
			valide = false;
		}
		
		
		return valide;
	}
	</script>

@endsection