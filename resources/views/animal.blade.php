@extends('layouts.elevageDashboard')
@section('content')

	<h1>{{$animal->NomComplet()}}</h1>
	
		@if (($animal->elevage_id == $elevage->id) && (strlen($animal->nom) <= 1))
		<a href="{{route('enregistrement',[$animal->id])}}"><button>Enregistrer le nom </button></a>
		@endif
	
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
<?php $pathos = $animal->Pathologie()->get() ?>
<p>@isset($animal->Pathologie)
	@foreach($pathos as $patho)
	{{$patho->nom}}
	@endforeach
	@endisset
</p> 
<p>{{$animal->date_naissance}}</p>
	@if (! $animal->fondateur)
		<div class='pedigree'>
			<span class='generation'>
				<span class='male'>{{$animal->Sire->NomComplet()}}</span>
				<span class='femelle'>{{$animal->Dam->NomComplet()}}</span>
			</span>
			<span class='generation'>
				<span class='male'>@isset($animal->Sire->Sire) {{$animal->Sire->Sire->NomComplet()}} @else gpp @endisset </span>
				<span class='femelle'>@isset($animal->Sire->Dam) {{$animal->Sire->Dam->NomComplet()}} @else gmp @endisset </span>
				<span class='male'>@isset($animal->Dam->Sire) {{$animal->Dam->Sire->NomComplet()}} @else gpm @endisset </span>
				<span class='femelle'> @isset($animal->Dam->Dam) {{$animal->Dam->Dam->NomComplet()}} @else gmm @endisset </span>
			</span>
			<span class='generation'>
				<span class='male'>@isset($animal->Sire->Sire->Sire) {{$animal->Sire->Sire->Sire->NomComplet()}} @else agpp @endisset </span>
				<span class='femelle'>@isset($animal->Sire->Sire->Dam) {{$animal->Sire->Sire->Dam->NomComplet()}} @else agmp @endisset </span>
				<span class='male'>	@isset($animal->Sire->Dam->Sire) {{$animal->Sire->Dam->Sire->NomComplet()}} @else agpp @endisset </span>	
				<span class='femelle'>@isset($animal->Sire->Dam->Dam) {{$animal->Sire->Dam->Dam->NomComplet()}} @else agmp @endisset </span>
				<span class='male'>	@isset($animal->Dam->Sire->Sire) {{$animal->Dam->Sire->Sire->NomComplet()}} @else agpm @endisset </span>
				<span class='femelle'>@isset($animal->Dam->Sire->Dam) {{$animal->Dam->Sire->Dam->NomComplet()}} @else agmm @endisset </span>
				<span class='male'>@isset($animal->Dam->Dam->Sire) {{$animal->Dam->Dam->Sire->NomComplet()}} @else agmp @endisset </span>
				<span class='femelle'>@isset($animal->Dam->Dam->Dam) {{$animal->Dam->Dam->Dam->NomComplet()}} @else agmm @endisset </span>
	</span>					
	</div>
	<p>Taux de consanguinité: {{$animal->consang}}</p>
	@endif

<p>{{$animal->elevage_id == $elevage->id? $animal->date_achat : ""}}</p>
<p>{{$animal->a_vendre? "à vendre" : ""}}</p>
<p>{{$animal->prix}}</p>
<div id='image'>
<?php
$images = $animal->Image;
if (isset($images)) {
	$path0 ="asset('/img/fond.png')";
	echo '<img src='.$path0. 'style="z-index:0" >';
		foreach ($images as $image) {
			$path = "asset('/img/'".$image->chemin.")";
			$style = "z-index:".$image->z_index; 
			echo"<img src=".$path. "style =" . $style.">";
		}
}
?>
</div>
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