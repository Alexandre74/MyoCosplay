<?
	class loca_cos {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
		}
		
		//***** méthodes *****
		function lire_all() {
			global $mysqli;	
			
			$retour = array();
			
			$requete = "SELECT id FROM loca_cos ORDER BY id DESC";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
					
                $requete2 =  "SELECT * FROM loca_cos WHERE id = '$id' ";
                $res2 = $mysqli->query($requete2);
                $row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$retour[$id]["titre"] =         $row2["titre"];
                $retour[$id]["description"] =   $row2["description"];
                $retour[$id]["image"] =         $row2["image"];
                $retour[$id]["prix"] =          $row2["prix"];
				$retour[$id]["taille"] =        $row2["taille"];
                $retour[$id]["date"] =	        substr($row2["date_crea"],8,2)."-".substr($row2["date_crea"],5,2)."-".substr($row2["date_crea"],0,4);
				$retour[$id]["titre_manga"] =   $row2["titre_manga"];
                $retour[$id]["nom_perso"] =     $row2["nom_perso"];  
				$retour[$id]["langue"] =        $row2["langue"];
			}
			return $retour;	
		}
		
		function lire($param) {
			global $mysqli;
			
			$requete = "SELECT * FROM loca_cos WHERE id='$param'";
			$res = $mysqli->query($requete);

			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {			

                $retour["date"] =	       substr($row["date_crea"],8,2)."-".substr($row["date_crea"],5,2)."-".substr($row["date_crea"],0,4);
				$retour["titre"] =         $row["titre"];
				$retour["titre_manga"] =   $row["titre_manga"];
                $retour["nom_perso"] =     $row["nom_perso"];
				$retour["description"] =   $row["description"];
                $retour["prix"] =          $row["prix"];
				$retour["taille"] =        $row["taille"];
				$retour["image"] =         $row["image"];
				$retour["langue"] =        $row2["langue"];
			}
			return $retour;	
		}

		function lire_like() {
			global $mysqli;
			
			if (isset($_POST['submit'])) {
            
            $var = 0;
            $search = $_POST['search'];
            $search .= '%';
			$requete = "SELECT * FROM loca_cos WHERE nom_perso LIKE'$search'";
			$res = $mysqli->query($requete);

			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {			

                $retour[$var]["date"] =	       substr($row["date_crea"],8,2)."-".substr($row["date_crea"],5,2)."-".substr($row["date_crea"],0,4);
				$retour[$var]["titre"] =         $row["titre"];
				$retour[$var]["titre_manga"] =   $row["titre_manga"];
                $retour[$var]["nom_perso"] =     $row["nom_perso"];
				$retour[$var]["description"] =   $row["description"];
                $retour[$var]["prix"] =          $row["prix"];
				$retour[$var]["taille"] =        $row["taille"];
				$retour[$var]["image"] =         $row["image"];
				$retour[$var]["langue"] =        $row2["langue"];
				$var++;
			}
			return $retour;	
		}
	}
		
        function last_loca() {
         global $mysqli;
			
			$retour = array();
			$var = 0;
			$requete2 = "SELECT * FROM loca_cos ORDER BY date_crea DESC LIMIT 4";
			
			$res2 = $mysqli->query($requete2);
			$flag = 0;
				
			while($row2 = $res2->fetch_array(MYSQLI_ASSOC)) {
				$id = $row2["id"];
				
				$retour[$var]["titre"] =         $row2["titre"];
                $retour[$var]["description"] =   $row2["description"];
                $retour[$var]["image"] =         $row2["image"];
                $retour[$var]["prix"] =          $row2["prix"];
				$retour[$var]["taille"] =        $row2["taille"];
                $retour[$var]["date"] =	         substr($row2["date_crea"],8,2)."-".substr($row2["date_crea"],5,2)."-".substr($row2["date_crea"],0,4);
				$retour[$var]["titre_manga"] =   $row2["titre_manga"];
                $retour[$var]["nom_perso"] =     $row2["nom_perso"];
				$retour[$var]["langue"] =        $row2["langue"];
                
				$var++;
			}
			return $retour;	
		}
		
		function aff_block_loca() {
			global $mysqli;	
			
			$retour = array();
			$step = 3; // definit quelle element prendre en front office
				
			// on recupere l'url du site
			$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
			// dernier element de l url qui correspond a l'id de la serie
			$end = end((explode('/', $monUrl)));	
			
			// debut des requetes SQL
			$requete = "SELECT * FROM loca_cos WHERE nom_perso IN (SELECT nom FROM personnages WHERE id = $end)";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
					
                $requete2 =  "SELECT * FROM loca_cos WHERE id = '$id' ORDER BY date_crea DESC";
                $res2 = $mysqli->query($requete2);
                $row2 = $res2->fetch_array(MYSQLI_ASSOC);

				$retour[$id]["id_fiche"] =      $row["id"];
				$retour[$id]["date"] =			substr($row2["date_crea"],8,2)."-".substr($row2["date_crea"],5,2)."-".substr($row2["date_crea"],0,4);
				$retour[$id]["titre"] =         $row2["titre"];
				$retour[$id]["titre_manga"] =   $row2["titre_manga"];
                $retour[$id]["nom_perso"] =     $row2["nom_perso"];
				$retour[$id]["description"] =   $row2["description"];
                $retour[$id]["langue"] =        $row2["langue"];
				$retour[$id]["image"] =         $row2["image"];
				
				// var externe BDD
				$retour[$id]["step"] = 		 	 $step; // retourne l'etape de l'arbo
			}
			
			return $retour;	
		}
	}
?>