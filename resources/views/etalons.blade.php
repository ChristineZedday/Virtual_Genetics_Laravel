@extends('layouts.elevageDashboard')
@section('content')

<div class='animaux'>
<h3>Jument à faire saillir:</h3>
<p class='nom'>{{$jument->NomComplet()}}</p>
<p>{{$jument->Race->nom}}</p>
<p>{{$jument->couleur}}</p>
<P>{{$jument->taille()}}</P>
@if (! $jument->fondateur)
<p>par {{$jument->Sire->NomComplet()}}</p>
<p>et {{$jument->Dam->NomComplet()}}</p>
@endif
@isset ($jument->Statut->etalon_id)
<p class='nom'>Dernière saillie: {{$jument->StatutFemelle->Male->NomComplet()}}</p>
@if ((App\Animal::find($jument->Statut->etalon_id)->elevage_id == $elevage->id) && (isset(App\Animal::find($jument->Statut->etalon_id)->StatutMale) && App\Animal::find($jument->Statut->etalon_id)->StatutMale->fertilite >0))
<a href="{{route('etalon',[$elevage->id, $jument->Statut->etalon_id, $jument->id])}}"><button>Réutiliser?</button></a>
@endif
@endisset
<h3 >Mes Etalons:</h3>
<table>
	<thead>
<tr>
	<th>Photo</th>
	<th>Nom <button onclick="tri(1, ASC, 0)"> &#x23F6;</button><button onclick="tri(1, DESC, 0)"> &#x23F7;</button></th>
	<th>Qualité <button onclick="tri(2, ASC, 0)"> &#x23F6;</button><button onclick="tri(2, DESC, 0)"> &#x23F7;</button></th>
	<th>Race<button onclick="tri(3, ASC, 0)"> &#x23F6;</button><button onclick="tri(3, DESC, 0)"> &#x23F7;</button></th>

    <th>Couleur<button onclick="tri(4, ASC, 0)"> &#x23F6;</button><button onclick="tri(4, DESC, 0)"> &#x23F7;</button></th>
	<th>taille<button onclick="tri(5, ASC, 0)"> &#x23F6;</button><button onclick="tri(5, DESC, 0)"> &#x23F7;</button></th>
    <th>Date de naissance<button onclick="tri(6, ASC, 0)"> &#x23F6;</button><button onclick="tri(6, DESC, 0)"> &#x23F7;</button></th>
    <th>Père<button onclick="tri(7, ASC, 0)"> &#x23F6;</button><button onclick="tri(7, DESC, 0)"> &#x23F7;</button></th>
	<th>Mère<button onclick="tri(8, ASC, 0 )"> &#x23F6;</button><button onclick="tri(8, DESC, 0)"> &#x23F7;</button></th>
    <th>Voir</th>
  </tr>
</thead>
<tbody>
@foreach ($etalons as $animal)
<tr>
<td class='photo' style="height:70px; width:90px;">
@include('includes.petiteImage')
	</td>
	<td class='nom'> <a href="{{route('animal',[$elevage->id, $animal->id])}}"> {{$animal->NomComplet()}} </a></td>
	<td> &Eacute;talon {{$animal->StatutMale->qualite}}</td>
	<td> {{$animal->Race->nom}} </td>

	<td> {{$animal->couleur}} </td>
	<td> {{$animal->taille()}} </td>
	<td> {{$animal->date_naissance}} </td>
	@if (! $animal->fondateur)
	<td> {{ $animal->Sire->NomComplet() }} </td>
	<td> {{ $animal->Dam->NomComplet()}} </td>
	@else
<td></td>
<td></td>
	@endif

	<td> <a href="{{route('etalon',[$elevage->id, $animal->id, $jument->id])}}"><button>Celui-ci?</button></a> </td>
</tr>
@endforeach
</tbody>
</table>
</br>
<h3>Etalons extérieurs</h3>
<table>
	<thead>
<tr>
	<th>Photo</th>
	<th>Nom<button onclick="tri(1, ASC, 1)"> &#x23F6;</button><button onclick="tri(1, DESC, 1)"> &#x23F7;</button> </th>
	<th>Qualité<button onclick="tri(2, ASC, 1)"> &#x23F6;</button><button onclick="tri(2, DESC, 1)"> &#x23F7;</button></th>
    <th>Race<button onclick="tri(3, ASC, 1)"> &#x23F6;</button><button onclick="tri(3, DESC, 1)"> &#x23F7;</button></th>
    <th>Couleur<button onclick="tri(4, ASC, 1)"> &#x23F6;</button><button onclick="tri(4, DESC, 1)"> &#x23F7;</button></th>
	<th>taille<button onclick="tri(5, ASC, 1)"> &#x23F6;</button><button onclick="tri(5, DESC, 1)"> &#x23F7;</button></th>
    <th>Date de naissance<button onclick="tri(6, ASC, 1)"> &#x23F6;</button><button onclick="tri(6, DESC, 1)"> &#x23F7;</button></th>
    <th>Père<button onclick="tri(7, ASC, 1)"> &#x23F6;</button><button onclick="tri(7, DESC, 1)"> &#x23F7;</button></th>
	<th>Mère<button onclick="tri(8, ASC, 1)"> &#x23F6;</button><button onclick="tri(8, DESC, 1)"> &#x23F7;</button></th>
	<th>Prix de la saillie<button onclick="tri(9, ASC, 1)"> &#x23F6;</button><button onclick="tri(9, DESC, 1)"> &#x23F7;</button></th>
    <th>Voir</th>
  </tr>
</thead>
  <tbody>
@foreach ($exterieurs as $animal)
<tr>
<td class='photo' style="height:70px; width:90px;">
@include('includes.petiteImage')
	</td>
	<td class='nom'> <a href="{{route('animal',[$elevage->id, $animal->id])}}"> {{$animal->NomComplet()}} </a></td>
	<td> &Eacute;talon {{$animal->StatutMale->qualite}}</td>
	<td> {{$animal->Race->nom}} </td>
	<td> {{$animal->couleur}} </td>
	<td> {{$animal->taille() }} </td>
	<td> {{$animal->date_naissance}} </td>
	@if (! $animal->fondateur)
	<td> {{ $animal->Sire->NomComplet() }} </td>
	<td> {{ $animal->Dam->NomComplet()}} </td>
	@else
<td></td>
<td></td>
	@endif
	<td> {{ $animal->StatutMale->prix}}</td>

	<td> <a href="{{route('etalon',[$elevage->id, $animal->id, $jument->id])}}"><button>Celui-là?</button></a> </td>
</tr>
@endforeach
</tbody>
</table>
</div>

<script>
function tri(cle, sens, tab) {

var table = document.getElementsByTagName('table')[tab]

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

};

function DESC(a,b) {

a=a[1];

b=b[1];

a = parseInt(a) ? parseInt(a) : a; //pour les tris numériques

b = parseInt(b) ? parseInt(b) : b; //pour les tris numériques

if(a > b)       return -1;

if(a < b)       return 1;

return 0;

};




function ASC(a,b) {

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