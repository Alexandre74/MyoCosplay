<?
	class personnages {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
		}
		
		//***** méthodes *****
		function lire_all() {
			global $mysqli;	
			
			$retour = array();
			
			$requete = "SELECT id FROM personnages ORDER BY id DESC";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
					
                $requete2 =  "SELECT * FROM personnages WHERE id = '$id' ";
                $res2 = $mysqli->query($requete2);
                $row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$retour[$id]["id_perso"] =                      $row["id"];
				$retour[$id]["titre"] =                         $row2["nom"];
                $retour[$id]["id_manga"] =                      $row2["id_manga"];
				$retour[$id]["image"] =         				$row2["image"];
                $retour[$id]["sexe"] =                          $row2["sexe"];
				$retour[$id]["stature"] =              			$row2["stature"];
				$retour[$id]["poids"] =              			$row2["poids"];
				$retour[$id]["tour_de_tete"] =             		$row2["tour_de_tete"];
				$retour[$id]["tour_de_cou"] =              		$row2["tour_de_cou"];
                $retour[$id]["tour_de_poitrine"] =              $row2["tour_de_poitrine"];
                $retour[$id]["tour_de_taille"] =	            $row2["tour_de_taille"];
				$retour[$id]["tour_des_hanches"] =              $row2["tour_des_hanches"];	
				$retour[$id]["tour_de_cuisse"] =           		$row2["tour_de_cuisse"];
                $retour[$id]["tour_de_cheville"] =              $row2["tour_de_cheville"];
                $retour[$id]["largeur_epaules"] =           	$row2["largeur_epaules"];
                $retour[$id]["manches"] =                		$row2["manches"];
                $retour[$id]["tour_de_bicep"] =        			$row2["tour_de_bicep"];
                $retour[$id]["tour_de_poignet"] =               $row2["tour_de_poignet"];
				$retour[$id]["longeur_de_jambe"] =              $row2["longeur_de_jambe"];
				$retour[$id]["longeur_du_pied"] =               $row2["longeur_du_pied"];
				
				
			}
			return $retour;	
		}
		
		function lire($param) {
			global $mysqli;
			
			$requete = "SELECT * FROM personnages WHERE id_manga='$param'";
			$res = $mysqli->query($requete);

			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {			

				$retour["nom"] =                           $row["nom"];
                $retour["id_manga"] =                      $row["id_manga"];
				$retour["image"] =         				   $row["image"];
                $retour["sexe"] =                          $row["sexe"];
				$retour["stature"] =              			$row["stature"];
				$retour["poids"] =              			$row["poids"];
				$retour["tour_de_tete"] =             		$row["tour_de_tete"];
				$retour["tour_de_cou"] =              		$row["tour_de_cou"];
                $retour["tour_de_poitrine"] =              $row["tour_de_poitrine"];
                $retour["tour_de_taille"] =	            $row["tour_de_taille"];
				$retour["tour_des_hanches"] =              $row["tour_des_hanches"];	
				$retour["tour_de_cuisse"] =           		$row["tour_de_cuisse"];
                $retour["tour_de_cheville"] =              $row["tour_de_cheville"];
                $retour["largeur_epaules"] =           	$row["largeur_epaules"];
                $retour["manches"] =                		$row["manches"];
                $retour["tour_de_bicep"] =        			$row["tour_de_bicep"];
                $retour["tour_de_poignet"] =               $row["tour_de_poignet"];
				$retour["longeur_de_jambe"] =              $row["longeur_de_jambe"];
				$retour["longeur_du_pied"] =               $row["longeur_du_pied"];
			}
			return $retour;	
		}
        
		function aff_perso() {
			global $mysqli;
			
			$retour = array();
			$step = 2;  // definit quelle element prendre en front office
			
			$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
			$end = end((explode('/', $monUrl))); 			
			
			// début de la recuperation en BDD
			//$requete2 = "SELECT * FROM personnages WHERE id_manga = $end";
			$requete2 = "SELECT * FROM personnages WHERE id_manga = $end AND nom IN (SELECT nom_perso FROM tuto_ecrit)";
			$res2 = $mysqli->query($requete2);
				
			while($row2 = $res2->fetch_array(MYSQLI_ASSOC)) {
				$id = $row2["id"];
				
				$retour[$id]["id_perso"] =                      $row2["id"];
				$retour[$id]["titre"] =                         $row2["nom"];
                $retour[$id]["id_manga"] =                      $row2["id_manga"];
				$retour[$id]["image"] =         				$row2["image"];
                $retour[$id]["sexe"] =                          $row2["sexe"];
				$retour[$id]["stature"] =              			$row2["stature"];
				$retour[$id]["poids"] =              			$row2["poids"];
				$retour[$id]["tour_de_tete"] =             		$row2["tour_de_tete"];
				$retour[$id]["tour_de_cou"] =              		$row2["tour_de_cou"];
                $retour[$id]["tour_de_poitrine"] =              $row2["tour_de_poitrine"];
                $retour[$id]["tour_de_taille"] =	            $row2["tour_de_taille"];
				$retour[$id]["tour_des_hanches"] =              $row2["tour_des_hanches"];	
				$retour[$id]["tour_de_cuisse"] =           		$row2["tour_de_cuisse"];
                $retour[$id]["tour_de_cheville"] =              $row2["tour_de_cheville"];
                $retour[$id]["largeur_epaules"] =           	$row2["largeur_epaules"];
                $retour[$id]["manches"] =                		$row2["manches"];
                $retour[$id]["tour_de_bicep"] =        			$row2["tour_de_bicep"];
                $retour[$id]["tour_de_poignet"] =               $row2["tour_de_poignet"];
				$retour[$id]["longeur_de_jambe"] =              $row2["longeur_de_jambe"];
				$retour[$id]["longeur_du_pied"] =               $row2["longeur_du_pied"];
			
				// var externe BDD
				$retour[$id]["step"] = 		 	 $step;
			}
			return $retour;	
		}
	}
?>