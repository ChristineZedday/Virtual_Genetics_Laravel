@extends('layouts.elevageDashboard')

@section('content')
<div>
<form action="{{route('animal.store',$elevage)}}" method="POST">
        @csrf
	<h2>Création d'un animal fondateur (sous forme de poulain)</h2>
		@if(Session::has('status'))
			<p class="{{ Session::get('alert-class')}}" >{{ Session::get('status') }}</p>
		@endif
	<div>
	<label for="nom">Entrez le nom que vous avez choisi pour votre animal</label><br/>
	<input type="text" name="nom" pattern="[^\s][A-za-z\s '\.\-]{2,25}" value="{{old('nom')}}" required />
	</div>
	<div>
	<label for="sexe">Entrez le sexe</label><br/>
	<input type="radio"  name="sexe" value="jeune poulain" checked>mâle
	<input type="radio"  name="sexe" value="jeune pouliche">femelle 			
	</div>
	<div>
	<label for="race_id">Choississez la race</label><br/>
	<select  name="race_id" id="race">
				<option value="1">OC</option>
					@foreach ($races as $race)
					<option value="{{$race->id}}">{{$race->nom}} </option>	
					@endforeach
			</select> 
	</div>
	<div>
	<label for="couleur">Indiquez la robe</label><br/>
	<input type="text" name="couleur" id="couleur" value="{{ old('couleur') }}"  pattern="[^\s][A-zÀ-ž\s]{2,}"/>
	</div>

	<div>
	<label for="affixe_id">Choississez un affixe dans la liste si vous le souhaitez</label><br/>
	<select  name="affixe_id" id="affixe_id">
				<option value="0">pas d'affixe</option>
					@foreach ($affixes as $affixe)
					<option value="{{$affixe->id}}">{{$affixe->libelle}} </option>	
					@endforeach
			</select> 
	</div>
	<div>
	<label for="taille_additive">Entrez la taille (taille non définitive: ne tient pas compte des gènes agissant sur la taille)</label><br/>
	<input type="number" name="taille_additive" pattern="[0-9]" min="40" max="200" value="{{old('taille_additive')}}" required />
	
	</div>
	<div>
	<label for="modele_allures_additifs">Entrez la note de modèle et allures (sur 20): attention cette note peut être baissée par un gène defectueux</label><br/>
	<input type="number" name="modele_allures_additifs" pattern="[0-9]" min="1" max="20" value="{{old('modele_allures_additifs')}}" required />
	
	</div>
	<div>
	<label for="capacite_dressage_additive">Entrez la note de capacité en dressage (sur 20)</label><br/>
	<input type="number" name="capacite_dressage_additive" pattern="[0-9]" min="1" max="20" value="{{old('capacite_dressage_additive')}}" required />
	
	</div>
	<div>
	<label for="capacite_apprentissage_additive">Entrez la note de capacité d'apprentissage (sur 20)</label><br/>
	<input type="number" name="capacite_apprentissage_additive" pattern="[0-9]" min="1" max="20" value="{{old('capacite_apprentissage_additive')}}" required />
	
	</div>
	<div>
	<label>Choisissez les gènes (si vous choisissez les allèles par defaut, vous n'avez pas besoin de les renseigner)</label><br/>
	
					@foreach ($loci as $locus)
					<h3>{{$locus->nom}} </h3>
					<p>
						@php
						 $alleles = $locus->Allele()->get();
						 @endphp
						Allèle paternel:<br/>
						@foreach ($alleles as $allele)
						<input type="radio"  name="{{'p'.$locus->id}}" value="{{$allele->id}}"
						 />{{$allele->abbrev}}
						
						@endforeach
						<br/>
						Allèle maternel:<br/>
						@foreach ($alleles as $allele)
						<input type="radio"  name="{{'m'.$locus->id}}" value="{{$allele->id}}"
						 />{{$allele->abbrev}}
						
						@endforeach
					</p>	
					@endforeach
	</select> 
	</div>

	<button type="submit">Valider</button>
	</form>
</div>

@endsection