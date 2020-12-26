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

	<th>taille</th>
    <th>Date acquisition</th>
    <th> @isset ($vente) prix @else A Vendre? @endisset</th>
	
   
  </tr>
@foreach ($animaux as $animal)
<tr>
<td class='photo' style="height:70px; width:90px;">

@include('includes.petiteImage')
	</td>
	<td> <a class='nom' href="{{route('animal',[$elevage->id, $animal->id])}}">{{$animal->NomComplet()}}</a></td>
	<td> {{$animal->Race->nom}} </td>
	<td>@isset ($animal->StatutMale) &Eacute;talon {{$animal->StatutMale->qualite}}
		@else {{$animal->sexe}}
		 @endisset </td>
  <td> {{$animal->couleur}} </td>
 
  <td> {{ $animal->taille()}}  </td>
	<td>@isset ($animal->date_achat) {{$animal->date_achat}} @else {{$animal->date_naissance}} @endisset</td>
	<td>@isset ($vente) {{$animal->prix}} @else {{ $animal->a_vendre ? "à vendre" : ""  }} @endisset</td>

</tr>
@endforeach
</table>
</div>
@endsection