@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3 >Mes animaux:</h3>
<table>
<tr>
    <th>Nom </th>
    <th>Race</th>
    <th>Sexe</th>
    <th>Couleur</th>
	<th>génotype</th>
	<th>taille</th>
    <th>Date acquisition</th>
    <th>A Vendre?</th>
	<th>Photo</th>
    <th>Voir</th>
  </tr>
@foreach ($animaux as $animal)
<tr>
	<td>{{$animal->NomComplet()}}</td>
	<td> {{$animal->Race->nom}} </td>
	<td> {{$animal->sexe}} </td>
  <td> {{$animal->couleur}} </td>
  <td>
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
  </td>
  <td> {{ $animal->taille_cm}} ({{ $animal->taille_additive}}) </td>
	<td>@isset ($animal->date_achat) {{$animal->date_achat}} @else {{$animal->date_naissance}} @endisset</td>
	<td> {{ $animal->a_vendre ? "à vendre" : ""  }} </td>
	<td class='photo' style="height:70px; width:90px;">

<figure class='petite'>
<?php
$images = $animal->Image;
if (isset($images)) {
	$path0 ="'/img/fond.png'";
	echo '<img src='.$path0. ' style="z-index:0; position:absolute; width:80px; height:60px;" >';
		foreach ($images as $image) {
			$path = "'/img/".$image->chemin.".png'";
			$style = "position:absolute; width:80px; height:60px; z-index:".$image->z_index; 
			echo"<img src=".$path. " style ='" . $style."'>";
		}
}
?>
</figure>


	</td>
	<td> <a href="{{route('animal',[$elevage->id, $animal->id])}}"><button>voir</button></a> </td>
</tr>
@endforeach
</table>
</div>
@endsection