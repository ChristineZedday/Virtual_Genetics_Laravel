@extends('layouts.elevageDashboard')
@section('content')
<div id='animal'>
	<div id='rensa'>
		<div class='texte'>
			<h1 class='nom'>{{$animal->NomComplet()}}</h1>
			@isset ($animal->Race)<h3>{{$animal->Race->nom}}</h3>@endisset
				<p>@if ($animal->elevage_id != $elevage->id) Propriétaire: {{$animal->Elevage->nom_eleveur}} @endif</p>
				<p>{{ $animal->Sexe() }}</p>
				@isset($animal->couleur)
					<p>{{ $animal->couleur }}</p>
				@elseif ($animal->elevage_id == $elevage->id)
				
				
				<a href="{{route('enregistrement',[$animal->id])}}"><button>Déclaration</button></a>
				<p>Gratuite pour les animaux achetés. Pour les poulains dans leurs premier mois, gratuit pour les OC, 50 euros de frais d'enregistrement dans le stud-book de la race en sus pour les pure race, 50 euros de pénalités supplémentaires après un mois, poulain ONC si pas enregistré dans l'année.</p>
				@endisset
				@if ($animal->statut_administratif == 'déclaré')
				<a href="{{route('signalement',[$animal->id])}}"><button>Signalement et identification (puce)</button></a>
				<p>60 euros, poulain ONC si pas effectué dans l'année.</p>
				@endif
				<p>
					@if (Auth::user()->name == 'admin')
				<?php 
					$genome = App\Genotype::where('animal_id',$animal->id)->get();
						foreach ($genome as $genotype)
						{
							$allP = App\Allele::Find($genotype->allele_p_id);
							$allP = $allP->abbrev;
							
							$allM = App\Allele::Find($genotype->allele_m_id);
							$allM = $allM->abbrev;
							echo($allP.$allM ." ");
						}

					?>	
					</p>
					@endif	
				
				
				<p>{{ $animal->taille() }} cm</p>
				<?php $pathos = $animal->Pathologie()->get() ?>
				<p>@isset($animal->Pathologie)
						@foreach($pathos as $patho)
						{{$patho->nom}}
						@endforeach
					@endisset
				</p> 
				<p>né le: {{$animal->date_naissance}}</p>
				<p>@if (! $animal->race_id == 17) Taux de consanguinité: {{$animal->consang}}@endif</p>
					
		</div>
	
	@include('includes.pedigree')
	</div>
	<div id='imb'>					
		<div id='image'>
			@include('includes.image')
		</div>
		<div id='boutonsa'>
			<p>{{isset ($animal->date_achat)? "acheté le: ".$animal->date_achat : ""}}</p>
			<p>prix: {{$animal->prix}} achetoires</p>		
			<p>{{$animal->a_vendre? "à vendre" : ""}}</p>
			@if (Auth::user()->name == 'admin')
			<div >
			<a href="{{route('animal.edit',[$animal->id])}}">
								<button >Modifier</button></a>
			</div>	
			@endif
			<div id='vente'>
				@if (($animal->elevage_id == $elevage->id )&& !($animal->a_vendre) && ($animal->ageMonths()>=6))

					<a href="{{route('vendre',[$elevage->id,$animal->id])}}">
								<button >Mettre en vente</button></a>
				@else
					@if ($animal->elevage_id == $elevage->id && $animal->a_vendre)
						<a href="{{route('pas.vendre',[$animal->id])}}"><button>Retirer de la vente</button></a>
					@elseif ($animal->elevage_id != $elevage->id && $animal->a_vendre)
						<a href="{{route('acheter',[$elevage->id,$animal->id])}}"><button>Acheter</button></a>
					@endif
				@endif
			</div>

			<div id='saillie'>
				@if ( ($animal->elevage_id == $elevage->id ) && ($animal->sexe=='femelle' || $animal->sexe=='vieille femelle') && ( isset($animal->StatutFemelle) && ($animal->StatutFemelle->vide == true && $animal->StatutFemelle->date_saillie != App\Gamedata::date()) ) )
					@if (App\Gamedata::saison())
					
					<a href="{{route('saillir',[$elevage->id,$animal->id])}}">
								<button >Faire saillir</button>
							</a>
					@endif
				@endif
			</div>

			
				
				<div id='sterilisation'>
				@if ($animal->elevage_id == $elevage->id )
					<input type="hidden" id ="sexe" value ="{{$animal->sexe}}">
					<input type="hidden" id ="budget" value ="{{$elevage->Budget()->solde()}}">
					
					<input type="hidden" id ="vide" @isset ($animal->Statut) value ="{{$animal->Statut->vide}}"  @else value="1" @endisset >
					
					<input type="hidden" id ="route" value ="{{route('steriliser',[$elevage->id,$animal->id])}}">
				
				<button  onclick="checkConditions()">
				Stériliser</button>
				@endif
				</div>	
				<div>
					@if ($animal->statut_administratif == 'enregistré' && $animal->race_id == 1 &&$animal->RacesPossibles != null)
					<a href="{{route('studbook',[$elevage->id,$animal->id])}}">
					<button>Enregistrer dans un stud-book</button></a>
					@endif
				</div>

				<div>
					@isset($animal->StatutMale)
						@if ($animal->StatutMale->qualite == 'entier'  && $animal->statut_administratif == 'enregistré' && $animal->elevage_id == $elevage->id)
						<a href="{{route('commission',[$elevage->id,$animal->id])}}">
						<button>  Contrôle vétérinaire d'aptitude à la reproduction (prix 200 euros)</button>
						</a>
						@endif
						@if ($animal->StatutMale->qualite == 'approuvé'  && $animal->elevage_id == $elevage->id && ! $animal->StatutMale->carnet_saillies)
						<a href="{{route('carnet',[$elevage->id,$animal->id])}}">
						<button>  Obtenir un carnet de saillie pour l'année en cours (60 euros)</button>
						</a>
						@endif
					@endisset
				</div>

				<div>
				@isset($animal->StatutMale)
						@if (($animal->StatutMale->qualite == 'autorisé' || $animal->StatutMale->qualite == 'approuvé') && $animal->elevage_id == $elevage->id  && ! $animal->StatutMale->disponible )
						<a href="{{route('monte',[$elevage->id,$animal->id])}}">
						<button>  Proposer à la monte</button>
						</a>
						@endif
					@endisset
				</div>

				<div>
				@isset($animal->StatutMale)
						@if ($animal->StatutMale->disponible && $animal->elevage_id == $elevage->id )
						<p>Proposé à la monte publique pour: {{$animal->StatutMale->prix}}</p>
						<a href="{{route('demonte',[$elevage->id,$animal->id])}}">
						<button>  Retirer de la monte</button>
						</a>
						@endif
					@endisset
				</div>
			
			
	
			<div id="progeny">
			<h3>Descendants: </h3>
				@foreach ($animal->Progeny() as $petit)
				<p> <a href="{{route('animal',[$elevage->id, $petit->id])}}"> {{$petit->NomComplet()}} </a>
				<?php $pos= strpos($animal->sexe,'mâle');
			 ?>
				 @if ( $pos === false) <span> par {{$petit->Sire->NomComplet()}} </span>
				 @endif
				</p>
				@endforeach
			</div>

			<div id="palmares">
			<h3>Palmarès: </h3>
				@foreach ($animal->Palmares() as $palm)
				
				<p> {{$palm->evenement->nom}} du &nbsp;{{$palm->evenement->date}} 
				{{$palm->competition->nom}} 
				{{$palm->competition->Niveau->libelle}} 
				@if ($palm->competition->type == 'Dressage')
				{{$palm->Reprise->nom}} 
				@else
				{{$palm->categorie->nom}} 
				@endif
				{{$palm->texteClassement() }}
				note:
				{{$palm->note_synthese}} 
				
				</p>
				@endforeach
			</div>
			<div id="notes">
			
				
				 @if ($animal->elevage_id == $elevage->id ) 
				 <h3>Notes</h3>
				 <form action="{{route('update_notes',[$animal->id])}}" method="POST">
				 @csrf
				 <textarea cols=36 rows=10 name="notes" >{{$animal->notes}}</textarea>
				 <button type="submit">Modifier</submit>
				 </form>
				 @endif
				
			</div>
		</div>

	</div>
</div>

<script>
	function checkConditions()
	{
		sexe = document.getElementById('sexe').value;
		budget = document.getElementById('budget').value;
		route = document.getElementById('route').value;
		vide = document.getElementById('vide').value
		conf = confirm('Opération irréversible!');
		if (conf)
		{
			switch (true)
			{
				case (vide == 0):
					alert ('femelle pleine, attendons la mise bas');
				break;

				case (sexe == 'mâle stérilisé' || sexe== 'vieux mâle stérilisé' || sexe =='femelle stérilisée' || sexe == 'vieille femelle stérilisée'):
					alert('Déjà fait!');
				break;

				case (sexe == 'jeune mâle' || sexe == 'jeune femelle' || sexe== 'jeune poulain' || sexe=='jeune pouliche'):
					alert('Trop jeune!');
				break;

				case (budget < 100 ):
					alert('Avec quoi allez-vous payer le véto?');
				break;

				case (budget < 300 & (sexe == 'femelle' || sexe == 'vieille femelle')):
					alert('Trop cher pour vous!');
				break;

				default:
				document.location.href=route; 


			}
	}
	}
</script>



@endsection