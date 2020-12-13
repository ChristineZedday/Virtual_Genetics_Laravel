@extends('layouts.elevageDashboard')

@section('content')
<div id="content">
	<div id="enr">
		<form action="{{route('registration',[$animal->id])}}" method="POST" onSubmit="return checkForm()">
			@method('PUT')
			@csrf
			<h2 class='form'>Enregistrer votre produit</h2>
			@if(Session::has('status'))
			<p class="{{ Session::get('alert-class')}}" >{{ Session::get('status') }}</p>
			@endif
			<div class='form'>
			<label for="nom">Entrez le nom que vous avez choisi pour votre animal (sans l'affixe si vous en avez un), sans accent ou caractère spécial.</label><br/>
			<input type="text" name="nom" id="nom" value="@isset($animal->nom){{$animal->nom}}  @endisset" pattern="[^\s][A-Za-z '\.\s]{2,18}"/>
			</div>
			<div class='form'>
			<label for="couleur">Entrez la couleur de votre animal.</label><br/>
			<input type="text" name="couleur" id="couleur" value="@isset($animal->couleur) {{$animal->couleur}}  @endisset"  pattern="[^\s][A-zÀ-ž\s]{2,}"/>
			</div>
			
			
			<div class='form'>
			<p>Les animaux de pure race sont automatiquement enregistrés dans le livre généalogique de la race sans frais supplémentaires, sous réserve que le père soit autorisé ou approuvé. Les animaux issus de croisement ou d'étalons non autorisés sont enregistrés comme Origine Constatée (OC), gratuitement, mais vous avez la possibité sous certaines conditions de les faire enregistrer dans un stud book ouvert (acceptant des animaux dont les deux parents ne sont pas inscrits), moyennant paiement d'un droit d'inscription.
			Dans ce cas veuillez trouver la liste ci-dessous. Si l'animal est inscriptible dans plusieurs registres, un seul peut-être choisi, conformémént au règlement des Haras Nationaux.
			@isset($races)</p>
			<input type="hidden" id ="budget" value ="{{$elevage->budget}}"/>
			
			<label for="race">Vous avez la possibilité d'enregistrer votre produit, moyennant des frais variables, dans l'une des races suivantes:</label><br/>
			<select  name="race" id="race">
				<option value="1">OC 0</option>
					@foreach ($races as $race)
					<option value="{{$race->id}}">{{$race->nom}} {{$race->frais_enregistrement}}</option>	
					@endforeach
			</select> 

			@endisset
			</div>
			<div class='form'> 
				<button type="submit">Valider</button>
				</div>
		</form>
	</div>


					
	<div id='image'>	
			<figure class='jeu'>
			<?php
			$images = $animal->Image;
			if (isset($images)) {
				$path0 ="'/img/fond.png'";
				echo '<img src='.$path0. ' style="z-index:0; position:absolute; width:400px; height:300px;" >';
					foreach ($images as $image) {
						$path = "'/img/".$image->chemin.".png'";
						$style = "position:absolute; width:400px; height:300px; z-index:".$image->z_index; 
						echo"<img src=".$path. " style ='" . $style."'>";
					}
			}
			?>
			</figure>
	</div>

</div>
<script>
function checkForm() 
	{
		valide = true;
		budget = document.getElementById('budget').value;	
		
		select = document.getElementById('race');
		opt = select.options[select.selectedIndex].text;
		//split extraire frais
		tab = opt.split(" ");
	
		frais =parseInt(tab[tab.length-1]);
		if (frais > budget)
		{
			alert("vous devrez attendre d'être en fonds pour procéder à l'enregistrement");
			valide = false;
		}
		
		nom = document.getElementById('nom').value;
		if (nom == "") 
		{
			alert ("saissisez un nom pour cet animal, SVP.");
			valide = false;
		}
		couleur = document.getElementById('couleur').value;
		if (couleur == "") 
		{
			alert ("saissisez la couleur de votre animal, SVP (c'est pas bien grave si vous vous trompez, ça arrive tout le temps).");
			valide = false;
		}
		return valide;
	}
	</script>

@endsection