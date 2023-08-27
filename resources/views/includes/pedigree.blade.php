<div class='pedigree'>
				@if (!$animal->fondateur &&  $animal->race_id != 17)
						<span class='generation'>
							<span class='male'>
								<a class='nom' href="{{route('animal',[$elevage->id, $animal->Sire->id])}}"> 
									{{$animal->Sire->NomComplet()}}</a>
							 {{$animal->Sire->Race->nom}}<br/>
							 {{$animal->Sire->couleur}}
							 </span>
							
							<span class='femelle'><a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->id])}}">
								 {{$animal->Dam->NomComplet()}}</a>
								{{$animal->Dam->Race->nom}}<br/>
								{{$animal->Dam->couleur}}
							</span>
						</span>
						<span class='generation'>
							<span class='male'>@isset($animal->Sire->Sire)<a class='nom' href="{{route('animal',[$elevage->id, $animal->Sire->Sire->id])}}">  {{$animal->Sire->Sire->NomComplet()}} </a>
							{{$animal->Sire->Sire->Race->nom}}@else gpp @endisset </span>
							<span class='femelle'>@isset($animal->Sire->Dam)<a class='nom' href="{{route('animal',[$elevage->id, $animal->Sire->Dam->id])}}">  {{$animal->Sire->Dam->NomComplet()}} </a>{{$animal->Sire->Dam->Race->nom}}@else gmp @endisset </span>
							<span class='male'>@isset($animal->Dam->Sire) <a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->Sire->id])}}">  {{$animal->Dam->Sire->NomComplet()}} </a>
							{{$animal->Dam->Sire->Race->nom}}@else gpm @endisset </span>
							<span class='femelle'> @isset($animal->Dam->Dam) <a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->Dam->id])}}"> {{$animal->Dam->Dam->NomComplet()}} </a>{{$animal->Dam->Dam->Race->nom}} @else gmm @endisset </span>
						</span>
						<span class='generation'>
							<span class='male'>@isset($animal->Sire->Sire->Sire) <aclass='nom'  href="{{route('animal',[$elevage->id, $animal->Sire->Sire->Sire->id])}}"> {{$animal->Sire->Sire->Sire->NomComplet()}} </a> @else agpp @endisset </span>
							<span class='femelle'>@isset($animal->Sire->Sire->Dam)  <a class='nom' href="{{route('animal',[$elevage->id, $animal->Sire->Sire->Dam->id])}}">  {{$animal->Sire->Sire->Dam->NomComplet()}} </a> @else agmp @endisset </span>
							<span class='male'>	@isset($animal->Sire->Dam->Sire)  <a  class='nom'href="{{route('animal',[$elevage->id, $animal->Sire->Dam->Sire->id])}}">  {{$animal->Sire->Dam->Sire->NomComplet()}} </a> @else agpp @endisset </span>	
							<span class='femelle'>@isset($animal->Sire->Dam->Dam) 
							<a class='nom' href="{{route('animal',[$elevage->id, $animal->Sire->Dam->Dam->id])}}"> {{$animal->Sire->Dam->Dam->NomComplet()}}  </a> @else agmp @endisset </span>
							<span class='male'>	@isset($animal->Dam->Sire->Sire)  <a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->Sire->Sire->id])}}"> {{$animal->Dam->Sire->Sire->NomComplet()}} </a>  @else agpm @endisset </span>
							<span class='femelle'>@isset($animal->Dam->Sire->Dam)  <a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->Sire->Dam->id])}}"> {{$animal->Dam->Sire->Dam->NomComplet()}} </a> @else agmm @endisset </span>
							<span class='male'>@isset($animal->Dam->Dam->Sire)
							<a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->Dam->Sire->id])}}">  {{$animal->Dam->Dam->Sire->NomComplet()}} </a> @else agmp @endisset </span>
							<span class='femelle'>@isset($animal->Dam->Dam->Dam) <a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->Dam->Dam->id])}}">  {{$animal->Dam->Dam->Dam->NomComplet()}} </a>  @else agmm @endisset </span>
						</span>	
						
				@endif
				
		</div>