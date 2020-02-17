@extends('layouts.elevageDashboard')

@section('content')
<div>
<form action="{{route('registration',[$animal->id])}}" method="POST">
		@method('PUT')
        @csrf
	<h2>Enregistrer votre produit</h2>
	<div>
	<label for="nom">Entrez le nom que vous avez choisi pour votre animal</label><br/>
	<input type="text" name="nom" value="@isset($animal->nom) {{$animal->nom}}  @endisset"/>
	</div>
	<div>
	<label for="couleur">Entrez la couleur de votre animal.</label><br/>
	<input type="text" name="couleur" value="@isset($animal->couleur) {{$animal->couleur}}  @endisset"/>
	</div>
	<button type="submit">Valider</button>
	</form>
</div>

@endsection