@extends('layouts.elevageDashboard')

@section('content')
<div>
<form action="{{route('registration',[$animal->id])}}" method="POST">
		@method('PUT')
        @csrf
	<h2 class='form'>Enregistrer votre produit</h2>
	<div class='form'>
	<label for="nom">Entrez le nom que vous avez choisi pour votre animal (sans l'affixe si vous en avez un)</label><br/>
	<input type="text" name="nom" value="@isset($animal->nom) {{$animal->nom}}  @endisset"/>
	</div>
	<div class='form'>
	<label for="couleur">Entrez la couleur de votre animal.</label><br/>
	<input type="text" name="couleur" value="@isset($animal->couleur) {{$animal->couleur}}  @endisset"/>
	</div>
	<div class='form'>
	Les animaux de pure race sont automatiquement enregistrés dans le livre généalogique de la race sans frais supplémentaires, sous réserve que le père soit autorisé ou approuvé. Les animaux issus de croisement ou d'étalons non autorisés sont enregistrés comme Origine Constatée (OC), gratuitement, mais vous avez la possibité sous certaines conditions de les faire enregistrer dans un stud book ouvert (acceptant des animaux dont les deux parents ne sont pas inscrits), moyennant paiement d'un droit d'inscription.
	Dans ce cas veuillez trouver la liste ci-dessous. Si l'animal est inscriptible dans plusieurs registres, un seul peut-être choisi, conformémént au règlement des Haras Nationaux.
	@isset($races)
	<input type="hidden" id ="budget" value ="{{$elevage->budget}}"/>
	<label for="race">Vous avez la possibilité d'enregistrer votre produit, moyennant des frais variables, dans l'une des races suivantes:</label><br/>
	<select  name="race">
	<option value="1">OC 0</option>
		@foreach ($races as $race)
		<option value="{{$race->id}}">{{$race->nom}} {{$race->frais_enregistrement}}</option>	
		@endforeach
		
</div>
 
</select> 
	@endisset
	<div class='form'> 
		<button type="submit">Valider</button>
		</div>
	</form>
</div>
<script>
function checkBudget() 
	{
		budget = document.getElementById('budget').value;	
		select = document.getElementsByTag('select[0]');
		route = document.getElementById('route').value;
		//recup l'option selectionnée
		//split extraire frais
	}
	</script>

@endsection