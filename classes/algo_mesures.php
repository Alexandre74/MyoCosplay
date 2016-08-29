<?		
    class algo_mesures {
		//***** attributs *****
    
    
    	//***** constructeur *****
		function __construct() { 
		}
    
        function lire_algo() {
			global $mysqli;
			
			$retrour = array();
			$retour1 = array();
			$retour2 = array();
			
			if (isset($_SESSION['id'])) 
			{	
				$id = $_SESSION['id'];
				$requetes = "SELECT * from usr where id = '$id'";
				$res = $mysqli->query($requetes);
					$row = $res->fetch_array(MYSQLI_ASSOC);
	
					$retour1["tour_de_poitrine"] = 				$row["tour_de_poitrine"];
					$retour1["tour_des_hanches"] =				$row["tour_de_poitrine"];
					$retour1["tour_de_taille"] = 				$row["tour_de_taille"];
					$retour1["jambes_exterieures"] = 			$row["jambes_exterieures"];
					$retour1["largeur_depaules"] = 				$row["largeur_depaules"];
					$retour1["longeur_des_manches"] = 			$row["longeur_des_manches"];
					$retour1["taille"] =						$row["taille"];
					$retour1["poids"] = 						$row["poids"];
					$retour1["tour_de_tete"] = 					$row["tour_de_tete"];
					$retour1["tour_de_cou"] = 					$row["tour_de_cou"];
					$retour1["tour_de_cuisse"] =				$row["tour_de_cuisse"];
					$retour1["tour_de_cheville"] = 				$row["tour_de_cheville"];
					$retour1["tour_de_bicep"] =					$row["tour_de_bicep"];
					$retour1["tour_de_poignet"] = 				$row["tour_de_poignet"];
					$retour1["longueur_du_pied"] =				$row["longueur_du_pied"];
	
					$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
					$end = (explode('/', $monUrl));
					$id_tuto = $end[4];
	
					$requete_tuto = "SELECT nom_perso FROM tuto_ecrit WHERE id=\"$id_tuto\"";
					$res_tuto = $mysqli->query($requete_tuto);
					$row_tuto = $res_tuto->fetch_array(MYSQLI_ASSOC);
					
					$nom_perso = $row_tuto["nom_perso"];
	
					$requete2 =  "SELECT * FROM personnages WHERE nom =\"$nom_perso\"";
					$res2 = $mysqli->query($requete2);
					$var2 = 0;
					while($row2 = $res2->fetch_array(MYSQLI_ASSOC)){
						
						$retour[$var2]["nom"] =                           	$row2["nom"];
						$retour[$var2]["id_manga"] =                      	$row2["id_manga"];
						$retour[$var2]["image"] =         					$row2["image"];
						$retour[$var2]["sexe"] =                          	$row2["sexe"];
						$retour[$var2]["stature"] =              			$row2["stature"];
						$retour[$var2]["poids"] =              				$row2["poids"];
						$retour[$var2]["tour_de_tete"] =             		$row2["tour_de_tete"];
						$retour[$var2]["tour_de_cou"] =              		$row2["tour_de_cou"];
						$retour[$var2]["tour_de_poitrine"] =              	$row2["tour_de_poitrine"];
						$retour[$var2]["tour_de_taille"] =	            	$row2["tour_de_taille"];
						$retour[$var2]["tour_des_hanches"] =              	$row2["tour_des_hanches"];	
						$retour[$var2]["tour_de_cuisse"] =           		$row2["tour_de_cuisse"];
						$retour[$var2]["tour_de_cheville"] =              	$row2["tour_de_cheville"];
						$retour[$var2]["largeur_epaules"] =           		$row2["largeur_epaules"];
						$retour[$var2]["manches"] =                			$row2["manches"];
						$retour[$var2]["tour_de_bicep"] =        			$row2["tour_de_bicep"];
						$retour[$var2]["tour_de_poignet"] =               	$row2["tour_de_poignet"];
						$retour[$var2]["longeur_de_jambe"] =              	$row2["longeur_de_jambe"];
						$retour[$var2]["longeur_du_pied"] =               	$row2["longeur_du_pied"];
	
						$differentiel = round ((($retour1["taille"]/$retour[$var2]["stature"]*100-100)
										+ ($retour1["poids"]/$retour[$var2]["poids"]*100-100)
										+ ($retour1["tour_de_tete"]/$retour[$var2]["tour_de_tete"]*100-100)
										+ ($retour1["tour_de_cou"]/$retour[$var2]["tour_de_cou"]*100-100)
										+ ($retour1["tour_de_poitrine"]/$retour[$var2]["tour_de_poitrine"]*100-100)
										+ ($retour1["tour_de_taille"]/$retour[$var2]["tour_de_taille"]*100-100)
										+ ($retour1["tour_des_hanches"]/$retour[$var2]["tour_des_hanches"]*100-100)
										+ ($retour1["tour_de_cuisse"]/$retour[$var2]["tour_de_cuisse"]*100-100)
										+ ($retour1["tour_de_cheville"]/$retour[$var2]["tour_de_cheville"]*100-100)
										+ ($retour1["largeur_depaules"]/$retour[$var2]["largeur_epaules"]*100-100)
										+ ($retour1["longeur_des_manches"]/$retour[$var2]["manches"]*100-100)
										+ ($retour1["tour_de_bicep"]/$retour[$var2]["tour_de_bicep"]*100-100)
										+ ($retour1["tour_de_poignet"]/$retour[$var2]["tour_de_poignet"]*100-100) 
										+ ($retour1["jambes_exterieures"]/$retour[$var2]["longeur_de_jambe"]*100-100)
										+ ($retour1["longueur_du_pied"]/$retour[$var2]["longeur_du_pied"]*100-100)) /15);
						 
						
						$retour2["tour_de_poitrine"] =  	round($retour1["tour_de_poitrine"] * 	($differentiel/100 + 1));
						$retour2["tour_des_hanches"] =  	round($retour1["tour_des_hanches"] * 	($differentiel/100 + 1));
						$retour2["tour_de_taille"] = 		round($retour1["tour_de_taille"] * 		($differentiel/100 + 1));
						$retour2["jambes_exterieures"] =  	round($retour1["jambes_exterieures"] * 	($differentiel/100 + 1));
						$retour2["largeur_depaules"] =  	round($retour1["largeur_depaules"] * 	($differentiel/100 + 1));
						$retour2["longeur_des_manches"] =  	round($retour1["longeur_des_manches"] * ($differentiel/100 + 1));
						$retour2["taille"] =  				round($retour1["taille"] * 				($differentiel/100 + 1));
						$retour2["poids"] =  				round($retour1["poids"] * 				($differentiel/100 + 1));
						$retour2["tour_de_tete"] =  		round($retour1["tour_de_tete"] * 		($differentiel/100 + 1));
						$retour2["tour_de_cou"] =  			round($retour1["tour_de_cou"] * 		($differentiel/100 + 1));
						$retour2["tour_de_cuisse"] =  		round($retour1["tour_de_cuisse"] * 		($differentiel/100 + 1));
						$retour2["tour_de_cheville"] =  	round($retour1["tour_de_cheville"] * 	($differentiel/100 + 1));
						$retour2["tour_de_bicep"] =  		round($retour1["tour_de_bicep"] * 		($differentiel/100 + 1));
						$retour2["tour_de_poignet"] =  		round($retour1["tour_de_poignet"] * 	($differentiel/100 + 1));
						$retour2["longueur_du_pied"] =  	round($retour1["longueur_du_pied"] * 	($differentiel/100 + 1));
						
						$var2++;
					}
				return $retour2;
			}
		}
	}
?>