@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3 >Mes chevaux et poneys:</h3>
<table>
<thead>
<tr>
	<th>Photo</th>
    <th>Nom<button class="tbarrow" onclick="tri(1, ASC)"> &#x23F6;</button><button class="tbarrow" onclick="tri(1, DESC)"> &#x23F7;</button></th>
    <th>Race<button class="tbarrow" onclick="tri(2, ASC)"> &#x23F6;</button><button class="tbarrow" onclick="tri(2, DESC)"> &#x23F7;</button></th>
    <th>Sexe<button class="tbarrow" onclick="tri(3, ASC)"> &#x23F6;</button><button class="tbarrow" onclick="tri(3, DESC)"> &#x23F7;</button></th>
    <th>Couleur<button class="tbarrow" onclick="tri(4, ASC)"> &#x23F6;</button><button class="tbarrow" onclick="tri(4, DESC)"> &#x23F7;</button></th>

	<th><a onclick="tri(5)">taille</a></th>
    <th><a onclick="tri(6)">Date acquisition</th>
	<th><a onclick="tri(7)">Niveau Modèle et Allures</th>
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

function tri (cle, sens) {

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

sorter.sort(sens);

j=-1;

while(sorter[++j]){

		myTbody.appendChild(sorter[j][0]);

}

}
function DESC(a,b){

a=a[1];

b=b[1];

a = parseInt(a) ? parseInt(a) : a; //pour les tris numériques

b = parseInt(b) ? parseInt(b) : b; //pour les tris numériques

if(a > b)       return -1;

if(a < b)       return 1;

return 0;

};



function ASC(a,b){

a=a[1];

b=b[1];

a = parseInt(a) ? parseInt(a) : a; //pour les tris numériques

b = parseInt(b) ? parseInt(b) : b; //pour les tris numériques

if(a > b)       return 1;

if(a < b)       return -1;

return 0;

};
</script>
@endsection