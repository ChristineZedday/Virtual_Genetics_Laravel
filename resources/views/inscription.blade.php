@extends('layouts.competitionDashboard')
@section('content')
@if(session('message'))
                <p class="alert alert-success"> {{ session('message') }}</p>
            @elseif ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('inscription', [$evenement,$competition])}}" method="POST" >
						@csrf
						@method('POST')

          
						
<h3>{{$evenement->nom}}: {{$competition->nom}}</h3>
<p>Distance approximative: {{$evenement->distance}} km<br/>
On estime à 0.50 euro du km le prix de transport pour un cheval d' 1,70 m. A payer au moment du concours, vous ne pourrez participer si vous n'avez plus d'argent.</p>
<p>prix d'inscription par animal: {{$competition->prix_inscription}} <br/>
prix pour le premier:
{{$competition->prix_premier}}
</p>
<div class ='form'>
<label for="categorie_id">Sélectionner la catégorie</label>

<select name="categorie_id" >
	@foreach ($competition->Categories as $categorie)
	
  <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
  @endforeach
</select>

@if($competition->type == 'Dressage')
<label for="reprise_id">Sélectionner la reprise</label>
<select name="reprise_id">
	@foreach ($competition->Reprises as $reprise)
  <option value="{{$reprise->id}}">{{$reprise->nom}} </option>
  @endforeach
</select>
@endif

<label for="animal_id">Sélectionner l'animal</label>
<select name="animal_id">
	@foreach ($animaux as $animal)
  <option value="{{$animal->id}}">{{$animal->nomComplet()}} {{$animal->race->nom}}</option>
  @endforeach
</select>

<button type="submit">Valider</button>	
</div>
</form>

<div class='container'>
<p>Inscrivez vos chevaux et poneys dans la catégorie qui leur correspond. Peuvent entrer en compte les sexe, l'âge, la taille:<br/>
Poney A: 107 cm maximum (les miniatures de moins de 80 cm ne sont pas admis). Dans cette catégorie les poneys concourrent en équipe, ce n'est pas encore implémenté.<br/>
Poney A et B: Poneys de 87cm à 130 (Catégorie B + poneys A surclassés pour concourrir en individuel)<br/>
Poneys C et D: 131 à 148cm <br/>
Poney B: 130 cm maximum<br/>
Poney C: 140 cm maximum<br/>
Poney D: 148 cm maximum<br/>
Poney E: Poneys hors taille, chevaux ayant un parent poney ou arabe, arabes de plus de 149 cm fers compris (j'ai fixé arbitrairement la limite à 165 cm)<br/>
La catégorie cheval ou poney accepte tout animal de taille minimum 115 cm. C'est en fait la catégorie pour les chevaux mais on y admet les poneys montés par des adultes.<br/>
Pour les concours de modèle et allures: une jument suitée est une jument accompagnée d'un poulain de moins de 6 mois.<br/>
Pour les concours de dressage, choisissez la reprise qui correspond à leur niveau actuel. Les juments pleines (enceintes) ou suitées ne peuvent concourir qu'en modèle et allures, ainsi que les chevaux et poneys de moins de 4 ans (âge compté selon l'année de naissance sans tenir compte du mois). Il n'y a pas de compétition pour les jeunes en dessous d'un an.</p>            
</div>
@endsection