<?

class tuto_video_form {
	
	function __construct() { 
		}
		
	function form() {
		global $mysqli;
		
		if (isset($_POST['titre'])) {
					
			$titre_tuto = htmlspecialchars($_POST['titre']);
			$nom_manga = htmlspecialchars($_POST['nom_manga']);
			$nom_perso = htmlspecialchars($_POST['nom_perso']);
			$video = htmlspecialchars($_POST['video']);
			
			$video = str_replace("/watch?v=", "/embed/", $video);
			
			$requete = "INSERT INTO tuto_video VALUES
                (
                '',\"$titre_tuto\",\"$nom_manga\",\"$video\", 'description','intro',\"$nom_perso\", NOW(), '[FR]', '/acfinder/upload/images/Yuno_Gasai.png'
                )";
            $mysqli->query($requete);
			
		}
	}
}

?>