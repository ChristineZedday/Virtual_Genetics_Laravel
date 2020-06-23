@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3 >Mes animaux:</h3>
<table>
<tr>
	<th>Photo</th>
    <th>Nom </th>
    <th>Race</th>
    <th>Sexe</th>
    <th>Couleur</th>
	<th>génotype</th>
	<th>taille</th>
    <th>Date acquisition</th>
    <th> @isset ($vente) prix @else A Vendre? @endisset</th>
	
   
  </tr>
@foreach ($animaux as $animal)
<tr>
<td class='photo' style="height:70px; width:90px;">
<a href="{{route('animal',[$elevage->id, $animal->id])}}">
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
</a>


	</td>
	<td> <a href="{{route('animal',[$elevage->id, $animal->id])}}">{{$animal->NomComplet()}}</a></td>
	<td> {{$animal->Race->nom}} </td>
	<td>@isset ($animal->StatutMale) &Eacute;talon {{$animal->StatutMale->qualite}}
		@else {{$animal->sexe}}
		 @endisset </td>
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
  <td> {{ $animal->taille_cm}}  </td>
	<td>@isset ($animal->date_achat) {{$animal->date_achat}} @else {{$animal->date_naissance}} @endisset</td>
	<td>@isset ($vente) {{$animal->prix}} @else {{ $animal->a_vendre ? "à vendre" : ""  }} @endisset</td>

</tr>
@endforeach
</table>
</div>
@endsection