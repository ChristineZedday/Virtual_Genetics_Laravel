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
<?php
$modele = stripos( $competition->type,"Allures");

?>

<h3>{{$competition->nom}}
   </h3>
   <div>
   @if (!$modele)
   
        @foreach ($competition->reprises as $reprise)
       {{$reprise->nom}}
        <a href="{{route('inscrire_dressage',[$elevage, $evenement,$competition,$reprise])}}"><button>Inscrire</button></a><br/>
        @endforeach
   @endif
   
   @if ($modele)
  
   
    <a href="{{route('inscrire',[$elevage, $evenement,$competition])}}"><button>Inscrire</button></a><br/>
    @endif
</div>

@endforeach
<hr/>
@endforeach
</div>

@endsection