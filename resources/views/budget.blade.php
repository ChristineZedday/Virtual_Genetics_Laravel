@extends('layouts.elevageDashboard')
@section('content')
<h2>Votre budget du mois:</h2>
<p>Solde précédent: {{ $budget->solde_debut }}</p>
<p>Solde courant: {{ $budget->Solde() }}</p>
<p>Frais vétérinaires et maréchalerie: {{ $budget->veto_marechal }}</p>
<p>Frais de nourriture: {{ $budget->frais_nourriture }}</p>
<p>Achat terrain: {{ $budget->achat_foncier }}</p>
<P>Achat animaux: {{ $budget->achat_animaux}}</p>
<P>Achat saillies: {{ $budget->achat_saillies }}</p>
<p>Frais administratifs: {{ $budget->frais_administratifs }}</p>
<p>Frais engagements: {{ $budget->frais_engagements }}</p>
<p>Frais transports: {{ $budget->frais_transports }}</p>
<p>Vente animaux: {{ $budget->vente_animaux }}</p>
<p>vente saillies: {{ $budget->vente_saillies }}</p>
<p>Gains concours: {{ $budget->gains_concours }}</P>
<p>Revenus externes à l'élevage: {{ $budget->revenus_externes }}</P>


@endsection