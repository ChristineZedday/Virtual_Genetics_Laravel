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
@include('includes.petiteImage')
</figure>
	</td>
 <td> <a class='nom' href="{{route('animal',[$elevage->id, $animal->id])}}">{{$animal->NomComplet()}}</a> </td>
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