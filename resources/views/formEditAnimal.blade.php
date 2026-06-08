@extends('layouts.elevageDashboard')

@section('content')
<div>
<form action="{{route('animal.update',$animal)}}" method="POST">
        @csrf
	<h2>Modification d'un animal fondateur (sous forme de poulain)</h2>
		@if(Session::has('status'))
			<p class="{{ Session::get('alert-class')}}" >{{ Session::get('status') }}</p>
		@endif
	<div>
	<label for="nom">Nom de l'animal</label><br/>
	<input type="text" name="nom" pattern="[^\s][A-za-z\s '\.\-]{2,25}" value="{{$animal->nom}}" required />
	</div>
	<div>
	<label for="sexe">Sexe</label><br/>
	<input type="radio"  name="sexe" value="jeune poulain" checked="{{$animal->sexe==='jeune poulain'}}">mâle
	<input type="radio"  name="sexe" value="jeune pouliche" checked="{{$animal->sexe==='jeune pouliche'}}">femelle 			
	</div>
	<div>
	<label for="race_id">Race</label><br/>
	<select  name="race_id" id="race">
				<option value="1">OC</option>
					@foreach ($races as $race)
					<option value="{{$race->id}}" selected="{{ $race === $animal->race}}">{{$race->nom}} </option>	
					@endforeach
			</select> 
	</div>
	<div>
	<label for="couleur">Indiquez la robe</label><br/>
	<input type="text" name="couleur" id="couleur" value="{{ $animal->couleur }}"  pattern="[^\s][A-zÀ-ž\s]{2,}"/>
	</div>

	<div>
	<label for="affixe_id">Choississez un affixe dans la liste si vous le souhaitez</label><br/>
	<select  name="affixe_id" id="affixe_id">
				<option value="0">pas d'affixe</option>
					@foreach ($affixes as $affixe)
					<option value="{{$affixe->id}}" selected="{{ $affixe === $animal->Affixe}}">{{$affixe->libelle}} </option>	
					@endforeach
			</select> 
	</div>
	<div>
	<label for="taille_additive">Entrez la taille (taille non définitive: ne tient pas compte des gènes agissant sur la taille)</label><br/>
	<input type="number" name="taille_additive" pattern="[0-9]" min="40" max="200" value="{{$animal->taille_additive}}" required />
	
	</div>
	<div>
	<label for="modele_allures_additifs">Entrez la note de modèle et allures (sur 20): attention cette note peut être baissée par un gène defectueux</label><br/>
	<input type="number" name="modele_allures_additifs" pattern="[0-9]" min="1" max="20" value="{{$animal->modele_allures_additifs}}" required />
	
	</div>


	<button type="submit">Valider</button>
	</form>
</div>

@endsection