<?

class tuto_accueil {
    function __construct() {
    }
    
    function form() {
		
    }

    function recup_mensuration() {
    	global $mysqli;
    	$retrour = array();
    	$retour1 = array();
    	$retour_personnage = array();
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


    		
                $requete2 =  "SELECT * FROM personnages ORDER BY id DESC";
                $res2 = $mysqli->query($requete2);
                $var2 = 0;
                while($row2 = $res2->fetch_array(MYSQLI_ASSOC)){	
                
				
					$retour[$var2]["nom"] =                           $row2["nom"];
                	$retour[$var2]["id_manga"] =                      $row2["id_manga"];
					$retour[$var2]["image"] =         				$row2["image"];
                	$retour[$var2]["sexe"] =                          $row2["sexe"];
					$retour[$var2]["stature"] =              			$row2["stature"];
					$retour[$var2]["poids"] =              			$row2["poids"];
					$retour[$var2]["tour_de_tete"] =             		$row2["tour_de_tete"];
					$retour[$var2]["tour_de_cou"] =              		$row2["tour_de_cou"];
                	$retour[$var2]["tour_de_poitrine"] =              $row2["tour_de_poitrine"];
                	$retour[$var2]["tour_de_taille"] =	            $row2["tour_de_taille"];
					$retour[$var2]["tour_des_hanches"] =              $row2["tour_des_hanches"];	
					$retour[$var2]["tour_de_cuisse"] =           		$row2["tour_de_cuisse"];
                	$retour[$var2]["tour_de_cheville"] =              $row2["tour_de_cheville"];
                	$retour[$var2]["largeur_epaules"] =           	$row2["largeur_epaules"];
                	$retour[$var2]["manches"] =                		$row2["manches"];
                	$retour[$var2]["tour_de_bicep"] =        			$row2["tour_de_bicep"];
                	$retour[$var2]["tour_de_poignet"] =               $row2["tour_de_poignet"];
					$retour[$var2]["longeur_de_jambe"] =              $row2["longeur_de_jambe"];
					$retour[$var2]["longeur_du_pied"] =               $row2["longeur_du_pied"];

               		$differentiel = round ((($retour1["taille"]/$retour[$var2]["stature"]*100-100) + ($retour1["poids"]/$retour[$var2]["poids"]*100-100) + ($retour1["tour_de_tete"]/$retour[$var2]["tour_de_tete"]*100-100) + ($retour1["tour_de_cou"]/$retour[$var2]["tour_de_cou"]*100-100) + ($retour1["tour_de_poitrine"]/$retour[$var2]["tour_de_poitrine"]*100-100)
                		+ ($retour1["tour_de_taille"]/$retour[$var2]["tour_de_taille"]*100-100) + ($retour1["tour_des_hanches"]/$retour[$var2]["tour_des_hanches"]*100-100) + ($retour1["tour_de_cuisse"]/$retour[$var2]["tour_de_cuisse"]*100-100) + ($retour1["tour_de_cheville"]/$retour[$var2]["tour_de_cheville"]*100-100)
                		+ ($retour1["largeur_depaules"]/$retour[$var2]["largeur_epaules"]*100-100) + ($retour1["longeur_des_manches"]/$retour[$var2]["manches"]*100-100) + ($retour1["tour_de_bicep"]/$retour[$var2]["tour_de_bicep"]*100-100) + ($retour1["tour_de_poignet"]/$retour[$var2]["tour_de_poignet"]*100-100) 
                		+ ($retour1["jambes_exterieures"]/$retour[$var2]["longeur_de_jambe"]*100-100) + ($retour1["longueur_du_pied"]/$retour[$var2]["longeur_du_pied"]*100-100)) /15);
                     
                    
                	if ($differentiel < 18)
                	{
                		if ($differentiel > -18)
                		{
                			$id = $row2["nom"];
                			$requete = "SELECT * FROM tuto_ecrit WHERE nom_perso='$id'";
                			$res = $mysqli->query($requete);
							while($row = $res->fetch_array(MYSQLI_ASSOC)) {			

                				//$retour_personnage[$var]["date"] =	substr($row["date_crea"],8,2)."-".substr($row["date_crea"],5,2)."-".substr($row["date_crea"],0,4);
								$retour_personnage[$var]["titre"] =         $row["titre"];
								//$retour_personnage[$var]["titre_manga"] =   $row["titre_manga"];
                				$retour_personnage[$var]["nom_perso"] =     $row["nom_perso"];
								//$retour_personnage[$var]["description"] =   $row["description"];
                				//$retour_personnage[$var]["intro"] =         $row["intro"];
								//$retour_personnage[$var]["contenu"] =       html_entity_decode($row["contenu"]);
                				//$retour_personnage[$var]["langue"] =        $row["langue"];
								$retour_personnage[$var]["image"] =      $row["img_pres"];
								$retour_personnage[$var]["id_tuto"] = 		$row["id"];
								$var++;
							}
						}
                	}
                	$var2++;
				}
			return $retour_personnage;

		} 

    }
}
?>