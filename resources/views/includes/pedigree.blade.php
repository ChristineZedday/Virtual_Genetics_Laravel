<div class='pedigree'>
				@if (!$animal->fondateur &&  $animal->race_id != 17 )
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
						
							<span class='male'>@if(! $animal->Sire->fondateur && $animal->Sire->race_id != 17)<a class='nom' href="{{route('animal',[$elevage->id, $animal->Sire->Sire->id])}}">  {{$animal->Sire->Sire->NomComplet()}} </a>
							{{$animal->Sire->Sire->Race->nom}} @endif</span>
							<span class='femelle'>@if(! $animal->Sire->fondateur && $animal->Sire->race_id != 17)<a class='nom' href="{{route('animal',[$elevage->id, $animal->Sire->Dam->id])}}">  {{$animal->Sire->Dam->NomComplet()}} </a>{{$animal->Sire->Dam->Race->nom}} @endif</span>
						
						
							<span class='male'>@if(! $animal->Dam->fondateur && $animal->Dam->race_id != 17) <a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->Sire->id])}}">  {{$animal->Dam->Sire->NomComplet()}} </a>
							{{$animal->Dam->Sire->Race->nom}} @endif</span>
							<span class='femelle'> @if(! $animal->Dam->fondateur && $animal->Dam->race_id != 17) <a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->Dam->id])}}"> {{$animal->Dam->Dam->NomComplet()}} </a>{{$animal->Dam->Dam->Race->nom}} @endif </span>
						
						</span>
						<span class='generation'>
						@if(! $animal->Sire->fondateur && $animal->Sire->race_id != 17)
							
							<span class='male'>@if(! $animal->Sire->Sire->fondateur && $animal->Sire->Sire->race_id != 17) <a class='nom'  href="{{route('animal',[$elevage->id, $animal->Sire->Sire->Sire->id])}}"> {{$animal->Sire->Sire->Sire->NomComplet()}} </a> @endif</span>
							
							<span class='femelle'> @if(! $animal->Sire->Sire->fondateur && $animal->Sire->Sire->race_id != 17) <a class='nom' href="{{route('animal',[$elevage->id, $animal->Sire->Sire->Dam->id])}}">  {{$animal->Sire->Sire->Dam->NomComplet()}} </a>@endif </span>
							
							<span class='male'>	@if(! $animal->Sire->Dam->fondateur && $animal->Sire->Dam->race_id != 17)  <a  class='nom'href="{{route('animal',[$elevage->id, $animal->Sire->Dam->Sire->id])}}">  {{$animal->Sire->Dam->Sire->NomComplet()}} </a> @endif </span>	
							<span class='femelle'>
							@if(! $animal->Sire->Dam->fondateur && $animal->Sire->Dam->race_id != 17)
							<a class='nom' href="{{route('animal',[$elevage->id, $animal->Sire->Dam->Dam->id])}}"> {{$animal->Sire->Dam->Dam->NomComplet()}}  </a> @endif  </span>
						@endif
						@if(! $animal->Dam->fondateur && $animal->Dam->race_id != 17)	
							<span class='male'> @if(! $animal->Dam->Sire->fondateur  && $animal->Dam->Sire->race_id != 17)<a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->Sire->Sire->id])}}"> {{$animal->Dam->Sire->Sire->NomComplet()}} </a> @endif  </span>
							<span class='femelle'> @if(! $animal->Dam->Sire->fondateur  && $animal->Dam->Sire->race_id != 17)<a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->Sire->Dam->id])}}"> {{$animal->Dam->Sire->Dam->NomComplet()}} </a>@endif  </span>
							
							
							<span class='male'> @if(! $animal->Dam->Dam->fondateur  && $animal->Dam->Dam->race_id != 17)
							<a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->Dam->Sire->id])}}">  {{$animal->Dam->Dam->Sire->NomComplet()}} </a> @endif </span>
							<span class='femelle'>@if(! $animal->Dam->Dam->fondateur  && $animal->Dam->Dam->race_id != 17) <a class='nom' href="{{route('animal',[$elevage->id, $animal->Dam->Dam->Dam->id])}}">  {{$animal->Dam->Dam->Dam->NomComplet()}} </a> @endif  </span>
						@endif		
						</span>	
					
				@endif
				
		</div>