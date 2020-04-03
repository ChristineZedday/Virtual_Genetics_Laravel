@extends('layouts.elevageDashboard')
@section('content')
	@isset($animal->nom)
	<h1>{{$animal->NomComplet()}}</h1>
	@else
		@if ($animal->elevage_id == $elevage->id)
		<a href="{{route('enregistrement',[$animal->id])}}"><button>Enregistrer le nom</button></a>
		@endif
	@endisset
<h3>{{$animal->Race->nom}}</h3>
<p>{{$animal->sexe}}</p>
@isset($animal->couleur)
	<p>{{ $animal->couleur }}</p>
	@else
		@if ($animal->elevage_id == $elevage->id)
		<a href="{{route('signalement',[$animal->id])}}"><button>Enregistrer la robe</button></a>
		@endif
	<p>
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
@endisset
<p>{{$animal->taille_cm}} cm</p>
<p>{{$animal->date_naissance}}</p>
	@if (! $animal->fondateur)
		<table class='pedigree'>
		<tr>
			<td id='pere'>{{$animal->Sire->NomComplet()}}</td>
			<td>
				<table>
					<tr>
						<td id='gpp'>@isset($animal->Sire->Sire) {{$animal->Sire->Sire->NomComplet()}} @else gpp @endisset</td>
					</tr>
					<tr>
						<td id='gmp'>@isset($animal->Sire->Dam) {{$animal->Sire->Dam->NomComplet()}} @else gmp @endisset</td>
					</tr>
				</table>
			</td>
			<td><table>
					<tr>
						<td>
							<table>
								<tr>
								<td id='agpp'>@isset($animal->Sire->Sire->Sire) {{$animal->Sire->Sire->Sire->NomComplet()}} @else agpp @endisset</td>	
								</tr>
								<tr>
								<td id='agmp'>@isset($animal->Sire->Sire->Dam) {{$animal->Sire->Sire->Dam->NomComplet()}} @else agmp @endisset</
								</tr>
							</table>
						</td>
					</tr>
					<tr>
					<td>
							<table>
								<tr>
								<td id='agpp'>@isset($animal->Sire->Dam->Sire) {{$animal->Sire->Dam->Sire->NomComplet()}} @else agpp @endisset</td>	
								</tr>
								<tr>
								<td id='agmp'>@isset($animal->Sire->Dam->Dam) {{$animal->Sire->Dam->Dam->NomComplet()}} @else agmp @endisset</
								</tr>
							</table>
						</td>
					</tr>
				</table></td>
		</tr>
		<tr>
			<td id='mere'>{{$animal->Dam->NomComplet()}}</td>
			<td>
				<table>
					<tr>
						<td id='gpm'>@isset($animal->Dam->Sire) {{$animal->Dam->Sire->NomComplet()}} @else gpm @endisset</td>
					</tr>
					<tr>
						<td id='gmm'>@isset($animal->Dam->Dam) {{$animal->Dam->Dam->NomComplet()}} @else gmm @endisset</td>
					</tr>
				</table>
			</td>
			<td><table>
					<tr>
					<td><table>
								<tr>
								<td id='agpp'>@isset($animal->Dam->Sire->Sire) {{$animal->Dam->Sire->Sire->NomComplet()}} @else agmp @endisset</td>	
								</tr>
								<tr>
								<td id='agmp'>@isset($animal->Dam->Sire->Dam) {{$animal->Dam->Sire->Dam->NomComplet()}} @else agmm @endisset</
								</tr>
							</table></td>
					</tr>
					<tr><td>
					<table>
								<tr>
								<td id='agpp'>@isset($animal->Dam->Dam->Sire) {{$animal->Dam->Dam->Sire->NomComplet()}} @else agmp @endisset</td>	
								</tr>
								<tr>
								<td id='agmp'>@isset($animal->Dam->Dam->Dam) {{$animal->Dam->Dam->Dam->NomComplet()}} @else agmm @endisset</
								</tr>
							</table></td>
					</tr>
				</table></td>
		</tr>
		</table>
	<p>Taux de consanguinité: {{$animal->consang}}</p>
	@endif

<p>{{$animal->elevage_id == $elevage->id? $animal->date_achat : ""}}</p>
<p>{{$animal->a_vendre? "à vendre" : ""}}</p>
<p>{{$animal->prix}}</p>
<div id='vente'>
	@if (($animal->elevage_id == $elevage->id )&& !($animal->a_vendre))

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

	@if (($animal->elevage_id == $elevage->id )&& ($animal->sexe=='femelle') && (isset($animal->Statut) && $animal->Statut->vide == true || !isset($animal->Statut)))
	<div id='saillie'>
	<a href="{{route('saillir',[$elevage->id,$animal->id])}}">
				<button >Faire saillir</button>
			</a>
	</div>
	@endif

@endsection