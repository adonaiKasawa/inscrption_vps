<?php 
/**
 * 
 */
class Resize 
{
	public static function sendFile($folder,$picture_name,$type)
	{
		
		if ($type =="profile") {
			# code..
			$extension_img = substr($picture_name, 43,3);
			$extension_couvrt = substr($picture_name, 46,3);
			$extension_album = substr($picture_name, 41,3);
			if ($extension_img == "png" || $extension_img == "PNG") {
				# code...
				$source = imagecreatefrompng("public/Framework/dist/img/Xchat_file/".$picture_name); // La photo est la source
				$destination = imagecreatetruecolor(128, 128); // On crée laminiature vide Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
				$largeur_source = imagesx($source);
				$hauteur_source = imagesy($source);
				$largeur_destination = imagesx($destination);
				$hauteur_destination = imagesy($destination);
				// On crée la miniature
				imagecopyresampled($destination, $source, 0, 0, 0, 0,
				$largeur_destination, $hauteur_destination, $largeur_source,
				$hauteur_source);
				// On enregistre la miniature sous le nom "picture_name.jpg"
				imagepng($destination, $folder.$picture_name);

			}elseif ($extension_img == "jpg" || $extension_img == "JPG"|| $extension_img == "jpeg" || $extension_img == "JPEG") {
				# code...
				$source = imagecreatefromjpeg("public/Framework/dist/img/Xchat_file/".$picture_name); // La photo est la source
				$destination = imagecreatetruecolor(128, 128); // On crée laminiature vide Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
				$largeur_source = imagesx($source);
				$hauteur_source = imagesy($source);
				$largeur_destination = imagesx($destination);
				$hauteur_destination = imagesy($destination);
				// On crée la miniature
				imagecopyresampled($destination, $source, 0, 0, 0, 0,
				$largeur_destination, $hauteur_destination, $largeur_source,
				$hauteur_source);
				// On enregistre la miniature sous le nom "picture_name.jpg"
				imagejpeg($destination, $folder.$picture_name);
			}elseif ($extension_couvrt =="png" || $extension_couvrt =="PNG") {
				# code...
				$source = imagecreatefrompng("public/Framework/dist/img/Xchat_file/".$picture_name); // La photo est la source
				$destination = imagecreatetruecolor(128, 128); // On crée laminiature vide Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
				$largeur_source = imagesx($source);
				$hauteur_source = imagesy($source);
				$largeur_destination = imagesx($destination);
				$hauteur_destination = imagesy($destination);
				// On crée la miniature
				imagecopyresampled($destination, $source, 0, 0, 0, 0,
				$largeur_destination, $hauteur_destination, $largeur_source,
				$hauteur_source);
				// On enregistre la miniature sous le nom "picture_name.jpg"
				imagepng($destination, $folder.$picture_name);

			}elseif ($extension_couvrt == "jpg" || $extension_couvrt == "JPG"|| $extension_couvrt == "jpeg" || $extension_couvrt == "JPEG") {
				# code...
				$source = imagecreatefromjpeg("public/Framework/dist/img/Xchat_file/".$picture_name); // La photo est la source
				$destination = imagecreatetruecolor(128, 128); // On crée laminiature vide Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
				$largeur_source = imagesx($source);
				$hauteur_source = imagesy($source);
				$largeur_destination = imagesx($destination);
				$hauteur_destination = imagesy($destination);
				// On crée la miniature
				imagecopyresampled($destination, $source, 0, 0, 0, 0,
				$largeur_destination, $hauteur_destination, $largeur_source,
				$hauteur_source);
				// On enregistre la miniature sous le nom "picture_name.jpg"
				imagejpeg($destination, $folder.$picture_name);
			}elseif ($extension_album == 'png' || $extension_album == 'PNG') {
				# code...
				$source = imagecreatefrompng("public/Framework/dist/img/Xchat_file/".$picture_name); // La photo est la source
				$destination = imagecreatetruecolor(128, 128); // On crée laminiature vide Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
				$largeur_source = imagesx($source);
				$hauteur_source = imagesy($source);
				$largeur_destination = imagesx($destination);
				$hauteur_destination = imagesy($destination);
				// On crée la miniature
				imagecopyresampled($destination, $source, 0, 0, 0, 0,
				$largeur_destination, $hauteur_destination, $largeur_source,
				$hauteur_source);
				// On enregistre la miniature sous le nom "picture_name.jpg"
				imagepng($destination, $folder.$picture_name);
			}elseif ($extension_album == 'jpg' || $extension_album == 'JPG' || $extension_album == 'jpeg' || $extension_album == 'JPEG') {
				$source = imagecreatefromjpeg("public/Framework/dist/img/Xchat_file/".$picture_name); // La photo est la source
				$destination = imagecreatetruecolor(128, 128); // On crée laminiature vide Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
				$largeur_source = imagesx($source);
				$hauteur_source = imagesy($source);
				$largeur_destination = imagesx($destination);
				$hauteur_destination = imagesy($destination);
				// On crée la miniature
				imagecopyresampled($destination, $source, 0, 0, 0, 0,
				$largeur_destination, $hauteur_destination, $largeur_source,
				$hauteur_source);
				// On enregistre la miniature sous le nom "picture_name.jpg"
				imagejpeg($destination, $folder.$picture_name);
			}else{echo"";}

			
		}elseif ($type == "diaporama") {
			# code...
			$extension_img = substr($picture_name, 41,3);
			if ($extension_img =="png" || $extension_img =="PNG") {
				# code...
				$source = imagecreatefrompng("public/Framework/dist/img/Xchat_file/".$picture_name); // La photo est la source
				$destination = imagecreatetruecolor(300, 200); // On crée laminiature vide Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
				$largeur_source = imagesx($source);
				$hauteur_source = imagesy($source);
				$largeur_destination = imagesx($destination);
				$hauteur_destination = imagesy($destination);
				// On crée la miniature
				imagecopyresampled($destination, $source, 0, 0, 0, 0,
				$largeur_destination, $hauteur_destination, $largeur_source,
				$hauteur_source);
				// On enregistre la miniature sous le nom "picture_name.jpg"
				imagepng($destination, $folder.$picture_name);
			}elseif ($extension_img == "jpg" || $extension_img == "JPG" || $extension_img == "jpeg" || $extension_img == "JPEG") {
				# code...
				$source = imagecreatefromjpeg("public/Framework/dist/img/Xchat_file/".$picture_name); // La photo est la source
				$destination = imagecreatetruecolor(300, 200); // On crée laminiature vide Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
				$largeur_source = imagesx($source);
				$hauteur_source = imagesy($source);
				$largeur_destination = imagesx($destination);
				$hauteur_destination = imagesy($destination);
				// On crée la miniature
				imagecopyresampled($destination, $source, 0, 0, 0, 0,
				$largeur_destination, $hauteur_destination, $largeur_source,
				$hauteur_source);
				// On enregistre la miniature sous le nom "picture_name.jpg"
				imagejpeg($destination, $folder.$picture_name);
			}else{echo"";}
			 
		}else{
			echo"erruer";
		}
	}

}