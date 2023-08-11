@extends('layouts.competitionDashboard')
@section('content')

<div class="concours">
<h1 >Prochaines compétitions:</h1>

@foreach ($evenements as $evenement)
<h2>
    {{$evenement->nom}} du {{$evenement->date}} 

<?php 
$id = $evenement->id;
$competitions = App\Competition::whereHas('evenements', function ($q) use ($id){$q->where('evenement_id',$id);})->get();
?>
@foreach ($competitions as $competition)

<h3>{{$competition->nom}}
    {{$competition->Niveau->libelle}}</h3>
   @if ($competition->type == "Dressage")
   <p>
        @foreach ($competition->reprises as $reprise)
       {{$reprise->nom}}
        <a href="{{route('inscrire_dressage',[$elevage, $evenement,$competition,$reprise])}}"><button>Inscrire</button></a><br/>
        @endforeach
   
   @else
   <p>
    <a href="{{route('inscrire',[$elevage, $evenement,$competition])}}"><button>Inscrire</button></a></p>
    @endif
</p>

@endforeach
<hr/>
@endforeach
</div>

@endsection