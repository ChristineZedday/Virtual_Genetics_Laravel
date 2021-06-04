@extends('layouts.elevageDashboard')
@section('content')
<div id='animal'>
	<div id='rensa'>
		<div class='texte'>
			<h1 class='nom'>{{$animal->NomComplet()}}</h1>
				<h3>{{$animal->Race->nom}}</h3>
				<p>@if ($animal->elevage_id != $elevage->id) Propriétaire: {{$animal->Elevage->nom_eleveur}} @endif</p>
				<p>{{ $animal->Sexe() }}</p>
				@isset($animal->couleur)
					<p>{{ $animal->couleur }}</p>
				@else
				@if ($elevage == $animal->elevage)
				<a href="{{route('enregistrement',[$animal->id])}}"><button>Enregistrer</button></a>
				@endif
				@endisset
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
				<p>Taux de consanguinité: {{$animal->consang}}</p>
					
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
				@if (($animal->elevage_id == $elevage->id )&& !($animal->a_vendre) && (App\Gamedata::ageMonths($animal->date_naissance)>7))

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
				@if ( ($animal->elevage_id == $elevage->id ) && ($animal->sexe=='femelle' || $animal->sexe=='vieille femelle') && ( isset($animal->Statut) && ($animal->Statut->vide == true && $animal->Statut->date_saillie != App\Gamedata::date()) ) )
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
					<input type="hidden" id ="budget" value ="{{$elevage->budget}}">
					
					<input type="hidden" id ="vide" @isset ($animal->Statut) value ="{{$animal->Statut->vide}}"  @else value="1" @endisset >
					
					<input type="hidden" id ="route" value ="{{route('steriliser',[$elevage->id,$animal->id])}}">
				
				<button  onclick="checkConditions()">
				Stériliser</button>
				@endif
				</div>	

				<div>
					@isset($animal->StatutMale)
						@if ($animal->StatutMale->qualite == 'non autorisé' && $animal->race_id != 1 && $animal->elevage_id == $elevage->id)
						<a href="{{route('commission',[$elevage->id,$animal->id])}}">
						<button>  Présenter à la commission étalons</button>
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