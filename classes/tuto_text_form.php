<?

class tuto_text_form {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
		}
        
        function form()
        {
            global $mysqli;
			
			
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			$target_dir = $_SERVER["DOCUMENT_ROOT"] . "/upload/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			
			if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
				echo "le fichier a été telecharger avec succes\n";
			}
			else {
				echo "le fichier n'a pas été télécharger correctement\n";
			}
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
					echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file. ";
				}
			}
			}
            /*
            if (isset($_POST['titre'])) {
				
				$titre_tuto = htmlspecialchars($_POST['titre']);
				$nom_manga = htmlspecialchars($_POST['nom_manga']);
				$nom_perso = htmlspecialchars($_POST['nom_perso']);
				$contenu = htmlspecialchars($_POST['editor1']);
				$description = htmlspecialchars($_POST['description']);
				
				$requete = "INSERT INTO tuto_ecrit VALUES
                (
                '',\"$titre_tuto\",\"$nom_manga\",\"$nom_perso\", \"$description\",'intro',\"$contenu\",2016-02-19,'[FR]','image_pres'
                )";
                $mysqli->query($requete); 
			}
			*/
        }
        
}

?>