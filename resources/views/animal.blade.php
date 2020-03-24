@extends('layouts.elevageDashboard')
@section('content')
	@isset($animal->nom)
	<h1>@if (isset($animal->affixe) && $animal->affixe_pre) {{$animal->affixe}} @endif {{ $animal->nom }} @if (isset($animal->affixe) && (! $animal->affixe_pre)) {{$animal->affixe}} @endif </h1>
	@else
	@if ($animal->elevage_id == $elevage->id)
	<a href="{{route('enregistrement',[$animal->id])}}"><button>Enregistrer le nom</button></a>
	@endif
	@endisset
<h3>{{$animal->race}}</h3>
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
<p>{{$animal->taille_cm}}</p>
<p>{{$animal->date_naissance}}</p>
	@if (! $animal->fondateur)
	<p>par @if (isset($animal->affixe) && $animal->affixe_pre) {{$animal->affixe}} @endif {{$animal->Sire->nom}} @if (isset($animal->affixe) && (! $animal->affixe_pre)) {{$animal->affixe}} @endif </p>
	<p>et  @if (isset($animal->affixe) && $animal->affixe_pre) {{$animal->affixe}} {{$animal->Dam->nom}} @if (isset($animal->affixe) && (! $animal->affixe_pre)) {{$animal->affixe}} @endif </p>
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
<div id='saillie'>
	@if (($animal->elevage_id == $elevage->id )&& ($animal->sexe=='femelle') && (isset($animal->Statut) && $animal->Statut->vide == true || !isset($animal->Statut)))

	<a href="{{route('saillir',[$elevage->id,$animal->id])}}">
				<button >Faire saillir</button></a>

	@endif
</div>
@endsection