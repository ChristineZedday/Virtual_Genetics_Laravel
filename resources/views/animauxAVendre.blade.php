@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3 >Animaux à vendre:</h3>

<table class='imagee'>
<tr>
    <th>Nom </th>
    <th>Race</th>
	<th>Sexe</th>
	<th>taille</th>
	<th>Prix</th>
    <th>Elevage</th>
	<th>Photo</th>
    
    <th>Voir</th>
  </tr>
@foreach ($animaux as $animal)
<tr>
	<td> {{$animal->NomComplet()}} </td>
	<td> {{$animal->Race->nom}} </td>
	<td> {{$animal->sexe}} </td>
	<td> {{$animal->taille_cm}}</td>
	<td>{{$animal->prix}}</td>
	<?php 
		 $vendeur = $animal->elevage_id;
		 $vendeur = App\Elevage::Find($vendeur);
	?>
	<td> {{$vendeur->nom_elevage}} </td>
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