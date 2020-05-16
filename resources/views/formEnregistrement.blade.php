@extends('layouts.elevageDashboard')

@section('content')
<div>
<form action="{{route('registration',[$animal->id])}}" method="POST">
		@method('PUT')
        @csrf
	<h2>Enregistrer votre produit</h2>
	<div>
	<label for="nom">Entrez le nom que vous avez choisi pour votre animal (sans l'affixe si vous en avez un)</label><br/>
	<input type="text" name="nom" value="@isset($animal->nom) {{$animal->nom}}  @endisset"/>
	</div>
	<div>
	<label for="couleur">Entrez la couleur de votre animal.</label><br/>
	<input type="text" name="couleur" value="@isset($animal->couleur) {{$animal->couleur}}  @endisset"/>
	</div>
	<div>
	@isset($races)
	<label for="race">Vous avez la possibilité d'enregistrer votre produit, moyennant des frais variables, dans l'une des races suivantes:</label><br/>
	<select  name="race">
	<option value="1">OC 0</option>
		@foreach ($races as $race)
		<option value="{{$race->id}}">{{$race->nom}} {{$race->frais_enregistrement}}</option>
		@endforeach
 
  
</select> 
	@endisset
	</div>
	<button type="submit">Valider</button>
	</form>
</div>

@endsection