

<figure class='jeu' style="position: relative;">
			<?php
			$images = $animal->Image;
			if (isset($images)) {
				$path0 ="'/img/fond.png'";
				$hauteur = $animal->taille_cm * 3.5;
				$haut = 450-$hauteur;
				$largeur =4/3 * $hauteur;
				$gauche= 550-$largeur;
				echo '<img src='.$path0. ' style="z-index:0; position:absolute; width:600px; height:450px; top:0; left:0; " >';
					foreach ($images as $image) {
						$path = "'/img/".$image->chemin.".png'";
						$style = "position:absolute; overflow:hidden; top:".$haut."px ; left:".$gauche."px; width:".$largeur ."px; height:".$hauteur ."px; z-index:".$image->z_index; 
						echo"<img src=".$path. " style ='" . $style."'>";
					}
			}
			?>
</figure>
