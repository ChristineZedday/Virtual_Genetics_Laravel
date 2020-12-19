@extends('layouts.elevageDashboard')
@section('content')
<div id='animal'>
	<div id='rensa'>
		<div class='texte'>
			<h1>{{$animal->NomComplet()}}</h1>
				<h3>{{$animal->Race->nom}}</h3>
				<p>@if ($animal->elevage_id != $elevage->id) Propriétaire: {{$animal->Elevage->nom_eleveur}} @endif</p>
				<p>@isset ($animal->StatutMale) &Eacute;talon {{$animal->StatutMale->qualite}}
					 @else {{$animal->sexe}} @endisset</p>
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
				

				<p>{{$animal->taille_cm}} cm</p>
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
	
		<div class='pedigree'>
				@if (! $animal->fondateur)
						<span class='generation'>
							<span class='male'>
								<a href="{{route('animal',[$elevage->id, $animal->Sire->id])}}"> 
									{{$animal->Sire->NomComplet()}}</a>
							 {{$animal->Sire->Race->nom}}</span>
							
							<span class='femelle'><a href="{{route('animal',[$elevage->id, $animal->Dam->id])}}">
								 {{$animal->Dam->NomComplet()}}</a>
								{{$animal->Dam->Race->nom}}</span>
						</span>
						<span class='generation'>
							<span class='male'>@isset($animal->Sire->Sire)<a href="{{route('animal',[$elevage->id, $animal->Sire->Sire->id])}}">  {{$animal->Sire->Sire->NomComplet()}} </a>
							{{$animal->Sire->Sire->Race->nom}}@else gpp @endisset </span>
							<span class='femelle'>@isset($animal->Sire->Dam)<a href="{{route('animal',[$elevage->id, $animal->Sire->Dam->id])}}">  {{$animal->Sire->Dam->NomComplet()}} </a>{{$animal->Sire->Dam->Race->nom}}@else gmp @endisset </span>
							<span class='male'>@isset($animal->Dam->Sire) <a href="{{route('animal',[$elevage->id, $animal->Dam->Sire->id])}}">  {{$animal->Dam->Sire->NomComplet()}} </a>
							{{$animal->Dam->Sire->Race->nom}}@else gpm @endisset </span>
							<span class='femelle'> @isset($animal->Dam->Dam) <a href="{{route('animal',[$elevage->id, $animal->Dam->Dam->id])}}"> {{$animal->Dam->Dam->NomComplet()}} </a>{{$animal->Dam->Dam->Race->nom}} @else gmm @endisset </span>
						</span>
						<span class='generation'>
							<span class='male'>@isset($animal->Sire->Sire->Sire) <a href="{{route('animal',[$elevage->id, $animal->Sire->Sire->Sire->id])}}"> {{$animal->Sire->Sire->Sire->NomComplet()}} </a> @else agpp @endisset </span>
							<span class='femelle'>@isset($animal->Sire->Sire->Dam)  <a href="{{route('animal',[$elevage->id, $animal->Sire->Sire->Dam->id])}}">  {{$animal->Sire->Sire->Dam->NomComplet()}} </a> @else agmp @endisset </span>
							<span class='male'>	@isset($animal->Sire->Dam->Sire)  <a href="{{route('animal',[$elevage->id, $animal->Sire->Dam->Sire->id])}}">  {{$animal->Sire->Dam->Sire->NomComplet()}} </a> @else agpp @endisset </span>	
							<span class='femelle'>@isset($animal->Sire->Dam->Dam) 
							<a href="{{route('animal',[$elevage->id, $animal->Sire->Dam->Dam->id])}}"> {{$animal->Sire->Dam->Dam->NomComplet()}}  </a> @else agmp @endisset </span>
							<span class='male'>	@isset($animal->Dam->Sire->Sire)  <a href="{{route('animal',[$elevage->id, $animal->Dam->Sire->Sire->id])}}"> {{$animal->Dam->Sire->Sire->NomComplet()}} </a>  @else agpm @endisset </span>
							<span class='femelle'>@isset($animal->Dam->Sire->Dam)  <a href="{{route('animal',[$elevage->id, $animal->Dam->Sire->Dam->id])}}"> {{$animal->Dam->Sire->Dam->NomComplet()}} </a> @else agmm @endisset </span>
							<span class='male'>@isset($animal->Dam->Dam->Sire)
							<a href="{{route('animal',[$elevage->id, $animal->Dam->Dam->Sire->id])}}">  {{$animal->Dam->Dam->Sire->NomComplet()}} </a> @else agmp @endisset </span>
							<span class='femelle'>@isset($animal->Dam->Dam->Dam) <a href="{{route('animal',[$elevage->id, $animal->Dam->Dam->Dam->id])}}">  {{$animal->Dam->Dam->Dam->NomComplet()}} </a>  @else agmm @endisset </span>
						</span>	
						
				@endif
				
		</div>
	</div>
	<div id='imb'>					
		<div id='image'>
			<figure class='jeu' style="position: relative;">
			<?php
			$images = $animal->Image;
			if (isset($images)) {
				$path0 ="'/img/fond.png'";
				$hauteur = $animal->taille_cm * 3.5;
				$haut = 450-$hauteur;
				$largeur =4/3 * $hauteur;
				$gauche= 0;
				echo '<img src='.$path0. ' style="z-index:0; position:absolute; width:600px; height:450px; top:0; left:0; " >';
					foreach ($images as $image) {
						$path = "'/img/".$image->chemin.".png'";
						$style = "position:absolute; overflow:hidden; top:".$haut."px ; left:".$gauche."px; width:".$largeur ."px; height:".$hauteur ."px; z-index:".$image->z_index; 
						echo"<img src=".$path. " style ='" . $style."'>";
					}
			}
			?>
			</figure>
		</div>
		<div id='boutonsa'>
			<p>{{isset ($animal->date_achat)? "acheté le: ".$animal->date_achat : ""}}</p>
			<p>prix: {{$animal->prix}} achetoires</p>		
			<p>{{$animal->a_vendre? "à vendre" : ""}}</p>
					
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