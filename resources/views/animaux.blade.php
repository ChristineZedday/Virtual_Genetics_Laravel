@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3 >Mes chevaux et poneys:</h3>
<table>
<thead>
<tr>
	<th>Photo</th>
    <th><a onclick="tri(1)">Nom </a></th>
    <th><a onclick="tri(2)">Race</a></th>
    <th>Sexe</th>
    <th>Couleur</th>

	<th>taille</th>
    <th>Date acquisition</th>
	<th>Niveau Modèle et Allures</th>
    <th> @isset ($vente) prix @else A Vendre? @endisset</th>
	
   
  </tr>
</thead>
  <tbody>
@foreach ($animaux as $animal)
<tr>
<td class='photo' style="height:70px; width:90px;">

@include('includes.petiteImage')
	</td>
	<td> <a class='nom' href="{{route('animal',[$elevage->id, $animal->id])}}">{{$animal->NomComplet()}}</a></td>
	<td> {{$animal->Race->nom}} </td>
	<td> {{$animal->Sexe()}}
		 </td>
  <td> {{$animal->couleur}} </td>
 
  <td> {{ $animal->taille() }}  </td>
	<td>@isset ($animal->date_achat) {{$animal->date_achat}} @else {{$animal->date_naissance}} @endisset</td>
	<td>{{$animal->Performance->Niveau->libelle}}</td>
	<td>@isset ($vente) {{$animal->prix}} @else {{ $animal->a_vendre ? "à vendre" : ""  }} @endisset</td>

</tr>
@endforeach
</tbody>
</table>
</div>


<script>
function tri (cle) {

var table = document.getElementsByTagName('table')[0]
var myTbody = table.getElementsByTagName('tbody')[0];

var lines = myTbody.getElementsByTagName('tr');

var sorter = new Array();

/*var lineStart = ( table.isClassName("cnxTableScroll") ) ? -1 : 0; //si setScroll() actif est toutes les lignes doivent être filtrées!*/

//si -1 on trie l'ensemble du tableau, si 0 la première ligne n'est pas concernée

var i = -1;

while(lines[++i]){

		sorter.push([lines[i],lines[i].getElementsByTagName('td')[cle].innerHTML]);

};

sorter.sort();

j=-1;

while(sorter[++j]){

		myTbody.appendChild(sorter[j][0]);

}
}
</script>
@endsection