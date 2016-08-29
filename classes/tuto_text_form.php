<?

class tuto_text_form {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
		}
        
        function form()
        {
            global $mysqli;
			global $master_url;
			
            if (isset($_POST['envoyer'])) {
				
			// Check if image file is a actual image or fake image
			$url_image = "/upload/" . basename($_FILES["fileToUpload"]["name"]);
			$target_dir = $_SERVER["DOCUMENT_ROOT"] . "/upload/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			
			// Check if file already exists
			//if (file_exists($target_file)) {
			//	echo "Sorry, file already exists.";
			//	$uploadOk = 0;
			//}
			// Check file size
			//if ($_FILES["fileToUpload"]["size"] > 500000) {
				//echo "Sorry, your file is too large.";
				//$uploadOk = 0;
			//}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			
			if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
				//echo "le fichier a été telecharger avec succes\n";
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
					//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					if (chmod($target_file, 0644)) {
						//echo "chmod ok";
					}
					else {
						echo "chmod pas ok";
					}
				} else {
					echo "Sorry, there was an error uploading your file. ";
				}
			}

				$titre_tuto = htmlspecialchars($_POST['titre']);
				
				$nom_manga = htmlspecialchars($_POST['serie']);
				if (isset($_POST['titreserie'])) {
					$nom_manga = htmlspecialchars($_POST['titreserie']);
				}
				
				$nom_perso = htmlspecialchars($_POST['perso']);
				$contenu = htmlspecialchars($_POST['editor1']);
				$description = htmlspecialchars($_POST['description']);
				$intro = htmlspecialchars($_POST['intro']);
				$date = date("Y-m-d");
				$langue = "[FR]";
				$id_user = $_SESSION['id'];
				
			
				$requete = "INSERT INTO tuto_ecrit VALUES
                (
                '',\"$titre_tuto\",\"$nom_manga\",\"$nom_perso\",\"$description\",\"$contenu\", NOW(),'[FR]',\"$url_image\",\"$id_user\"
                )";
                $mysqli->query($requete);
				
				
	/*			if (isset ($_POST['titreserie'])) {
					
					
					$url_image = "/upload/" . basename($_FILES["serieimageupload"]["name"]);
					$target_dir = $_SERVER["DOCUMENT_ROOT"] . "/upload/";
					$target_file = $target_dir . basename($_FILES["serieimageupload"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				
					$check = getimagesize($_FILES["serieimageupload"]["tmp_name"]);
					if($check !== false) {
						$uploadOk = 1;
					} else {
						$uploadOk = 0;
					}
			
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
						$uploadOk = 0;
					}
					
					if (is_uploaded_file($_FILES['serieimageupload']['tmp_name'])) {
						echo "<script>alert(\"le fichier a été telecharger avec succes\n\")</script>";
					}
					else {
						echo "<script>alert(\"le fichier n'a pas été télécharger correctement\n\")</script>";
					}
					
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
						echo "<script>alert(\"Sorry, your file was not uploaded.\")</script>";
						// if everything is ok, try to upload file
					} else {
						if (move_uploaded_file($_FILES['serieimageupload']['tmp_name'], $target_file)) {
							if (chmod($target_file, 0644)) {
								echo "<script>alert(\"chmod ok\")</script>";
							}
							else {
								echo "<script>alert(\"chmod pas ok\")</script>"; 
							}
						} else {
							echo "<script>alert(\"Sorry, there was an error uploading your file.\")</script>"; 
						}
					}
					
					
					$titreserie = 			htmlspecialchars($_POST['titreserie']);
					$descriptionserie = 	htmlspecialchars($_POST['descriptionserie']);
					
					$requete2 = "INSERT INTO serie VALUES 
								(
								'',
								\"$titreserie\",\"$url_image\",\"$descriptionserie\"
								)";
								
					$mysqli->query($requete2);
					//echo "$requete2";
				}*/
				
				/*if (isset ($_POST['newnomperso'])) {

					$url_image = "/upload/" . basename($_FILES["persoimageupload"]["name"]);
					$target_dir = $_SERVER["DOCUMENT_ROOT"] . "/upload/";
					$target_file = $target_dir . basename($_FILES["persoimageupload"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				
					$check = getimagesize($_FILES["persoimageupload"]["tmp_name"]);
					if($check !== false) {
						$uploadOk = 1;
					} else {
						$uploadOk = 0;
					}
			
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
						$uploadOk = 0;
					}
					
					if (is_uploaded_file($_FILES['persoimageupload']['tmp_name'])) {
						echo "<script>alert(\"le fichier a été telecharger avec succes\n\")</script>";
					}
					else {
						echo "<script>alert(\"le fichier n'a pas été télécharger correctement\n\")</script>";
					}
					
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
						echo "<script>alert(\"Sorry, your file was not uploaded.\")</script>";
						// if everything is ok, try to upload file
					} else {
						if (move_uploaded_file($_FILES['persoimageupload']['tmp_name'], $target_file)) {
							if (chmod($target_file, 0644)) {
								echo "<script>alert(\"chmod ok\")</script>";
							}
							else {
								echo "<script>alert(\"chmod pas ok\")</script>"; 
							}
						} else {
							echo "<script>alert(\"Sorry, there was an error uploading your file.\")</script>"; 
						}
					}

					$newnomperso = 			htmlspecialchars($_POST['newnomperso']);
					$sexe = 				htmlspecialchars($_POST['sexe']);
					$stature =				htmlspecialchars($_POST['stature']);
					$poids = 				htmlspecialchars($_POST['poids']);
					$tour_de_tete =			htmlspecialchars($_POST['tour_de_tete']);
					$tour_de_cou =			htmlspecialchars($_POST['tour_de_cou']);
					$tour_de_poitrine =		htmlspecialchars($_POST['tour_de_poitrine']);
					$tour_de_taille =		htmlspecialchars($_POST['tour_de_taille']);
					$tour_des_hanches = 	htmlspecialchars($_POST['tour_des_hanches']);
					$tour_de_cuisse =		htmlspecialchars($_POST['tour_de_cuisse']);
					$tour_de_cheville =		htmlspecialchars($_POST['tour_de_cheville']);
					$largeur_epaules = 		htmlspecialchars($_POST['largeur_epaules']);
					$manches =				htmlspecialchars($_POST['manches']);
					$tour_de_bicep =		htmlspecialchars($_POST['tour_de_bicep']);
					$tour_de_poignet =		htmlspecialchars($_POST['tour_de_poignet']);
					$longueur_de_jambe =	htmlspecialchars($_POST['longueur_de_jambe']);
					$longueur_du_pied =		htmlspecialchars($_POST['longueur']);

					if (isset ($_POST['titreserie'])) {
						$requeteserie = "SELECT id FROM serie WHERE titre = $titreserie";
						$mysqli->query($requeteserie);
						
						$row = $res->fetch_array(MYSQLI_ASSOC);
						$id = 		$row["id"];	
					}
					else {
						$requeteserie = "SELECT id FROM serie WHERE titre = $nom_manga";
						$mysqli->query($requeteserie);
						
						$row = $res->fetch_array(MYSQLI_ASSOC);
						$id = 		$row["id"];		
					}
					

					$requete3 = "INSERT INTO personnages VALUES 
						(
						'',
						\"$id\",\"$newnomperso\",\"$url_image\",\"$sexe\",
						\"$stature\",\"$poid\",\"$tour_de_tete\",\"$tour_de_cou\",
                        \"$tour_de_poitrine\",\"$tour_de_taille\",\"$tour_des_hanches\",
                        \"$tour_de_cuisse\",\"$tour_de_cheville\",\"$largeur_epaules\",
                        \"$manches\",\"$tour_de_bicep\",\"$tour_de_poignet\",
						\"$longeur_de_jambe\",\"$longeur_du_pied\"
						)";
								
					$mysqli->query($requete3);
				}*/
			}
			
        }
        
}

?>