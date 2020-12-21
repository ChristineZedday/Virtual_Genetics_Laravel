<figure class='petite' style="position: relative; display:inline-block; vertical-align: middle; width:80px; height:60px">
	<a  href="{{route('animal',[$elevage->id, $animal->id])}}">
				<?php
				$images = $animal->Image;
				
						foreach ($images as $image) {
							$path = "'/img/".$image->chemin.".png'";
							$style = "position:absolute;  top:0px ; left:0px; width:80px; height:60px; display:block; z-index:".$image->z_index; 
							echo"<img src=".$path. " style ='" . $style."'>";
						}	
				?>
	</a>
</figure>
