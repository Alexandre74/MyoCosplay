<?
function enlever_p($x) {
	$x = str_replace("<p>", "", $x);	
	$x = str_replace("</p>", "", $x);	
	
	return $x;
}

function CreateThumb($full_path,$file,$thumb_path,$thumb_prefix,$width=96,$height=72) {
    if (!is_readable($full_path.$file)) {
        echo '<br>fichier '.$full_path.$file.' non accessible';
        return false;
    }
    switch (strtolower(substr($file,strlen($file)-3,3))) {
        case 'jpg':
            $type = 'jpg';
            $source = imagecreatefromjpeg($full_path.$file);
            break;
        case 'png':
            $type = 'png';
            $source = imagecreatefrompng($full_path.$file);
            break;
        default:
            // format inconnu
            echo '<br>format inconnu';
            return false;
    }
 
    $source_width = imagesx($source);
    $source_height = imagesy($source);
    $destination_width = $width;
    $destination_height = $height;
 
    // On crée la miniature vide
    if (!$destination = imagecreatetruecolor($width, $height)) {
        echo '<br>impossible de creer miniature';
        return false;
    }
 
    if (!imagecopyresampled($destination, $source, 0, 0, 0, 0, $destination_width, $destination_height, $source_width, $source_height)) {
        echo '<br>erreur sur imagecopyresampled';
        return false;
    }
    switch ($type) {
        case 'jpg':
            if (!imagejpeg($destination, $thumb_path.$thumb_prefix.$file)) {
                echo '<br>erreur sur imagejpeg';
                return false;
            }
            break;
        case 'png':
            if (!imagepng($destination, $thumb_path.$thumb_prefix.$file)) {
                echo '<br>erreur sur imagepng';
                return false;
            }
            break;
        default:
            // format inconnu
            echo '<br>format inconnu 2';
            return false;
    }
    return true;
}

//***** fonction de query sql WRITE *************************
function sql_write($query) {
	include("config/bd.php");

    $mysqli->query($query);
}

function gen_slug($str){
	# special accents
	$a = array('À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ','A','a','A','a','A','a','C','c','C','c','C','c','C','c','D','d','Ð','d','E','e','E','e','E','e','E','e','E','e','G','g','G','g','G','g','G','g','H','h','H','h','I','i','I','i','I','i','I','i','I','i','?','?','J','j','K','k','L','l','L','l','L','l','?','?','L','l','N','n','N','n','N','n','?','O','o','O','o','O','o','Œ','œ','R','r','R','r','R','r','S','s','S','s','S','s','Š','š','T','t','T','t','T','t','U','u','U','u','U','u','U','u','U','u','U','u','W','w','Y','y','Ÿ','Z','z','Z','z','Ž','ž','?','ƒ','O','o','U','u','A','a','I','i','O','o','U','u','U','u','U','u','U','u','U','u','?','?','?','?','?','?');
	$b = array('A','A','A','A','A','A','AE','C','E','E','E','E','I','I','I','I','D','N','O','O','O','O','O','O','U','U','U','U','Y','s','a','a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','y','y','A','a','A','a','A','a','C','c','C','c','C','c','C','c','D','d','D','d','E','e','E','e','E','e','E','e','E','e','G','g','G','g','G','g','G','g','H','h','H','h','I','i','I','i','I','i','I','i','I','i','IJ','ij','J','j','K','k','L','l','L','l','L','l','L','l','l','l','N','n','N','n','N','n','n','O','o','O','o','O','o','OE','oe','R','r','R','r','R','r','S','s','S','s','S','s','S','s','T','t','T','t','T','t','U','u','U','u','U','u','U','u','U','u','U','u','W','w','Y','y','Y','Z','z','Z','z','Z','z','s','f','O','o','U','u','A','a','I','i','O','o','U','u','U','u','U','u','U','u','U','u','A','a','AE','ae','O','o');
	return strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/','/[ -]+/','/^-|-$/'),array('','-',''),str_replace($a,$b,$str)));
}


?>