@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3 >Mes femelles:</h3>
<table>
<tr>
	<th>Photo</th>
	<th>Nom </th>
    <th>Race</th>
    <th>Couleur</th>
	<th>Taille</th>
    <th>Date de naissance</th>
    <th>Père</th>
	<th>Mère</th>
	<th>A Vendre?</th>

    
  </tr>
@foreach ($juments as $animal)
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
 <td> <a href="{{route('animal',[$elevage->id, $animal->id])}}">{{$animal->NomComplet()}}</a> </td>
	<td> {{$animal->Race->nom}} </td>
	<td> {{$animal->couleur}} </td>
	<td> {{$animal->taille_cm}} </td>
	<td> {{$animal->date_naissance}} </td>
	<td>@isset($animal->Sire) {{ $animal->Sire->NomComplet() }} @endisset </td>
	<td>@isset($animal->Dam) {{ $animal->Dam->NomComplet()}} @endisset </td>
		<td> {{ $animal->a_vendre ? "à vendre" : ""  }} </td>


	
</tr>
@endforeach
</table>
</div>
@endsection