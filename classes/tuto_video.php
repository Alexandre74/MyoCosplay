<?

class tuto_video {
	
	function __construct() { 
		}
		
	function form() {
		global $mysqli;
		
		
	}
	
	function lire_all() {
			global $mysqli;	
			
			$retour = array();
			
			$requete = "SELECT id FROM tuto_video ORDER BY id DESC";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
					
                $requete2 =  "SELECT * FROM tuto_video WHERE id = '$id' ";
                $res2 = $mysqli->query($requete2);
                $row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$retour[$id]["date"] =	substr($row2["date_crea"],8,2)."-".substr($row2["date_crea"],5,2)."-".substr($row2["date_crea"],0,4);
				$retour[$id]["titre"] =         $row2["titre"];
				$retour[$id]["manga"] =   		$row2["manga"];
                $retour[$id]["nom_perso"] =     $row2["nom_perso"];
				$retour[$id]["description"] =   $row2["description"];
                $retour[$id]["intro"] =         $row2["intro"];
                $retour[$id]["langue"] =        $row2["langue"];
				$retour[$id]["video"] =         $row2["video"];
				$retour[$id]["image"] =         $row2["img_pres"];
                
			}
			return $retour;	
		}
		
		function lire($param) {
			global $mysqli;
			
			$requete = "SELECT * FROM tuto_video WHERE id='$param'";
			$res = $mysqli->query($requete);

			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {			

                $retour["date"] =	 substr($row["date_crea"],8,2)."-".substr($row["date_crea"],5,2)."-".substr($row["date_crea"],0,4);
				$retour["titre"] =         	$row["titre"];
				$retour["manga"] =   		$row["manga"];
                $retour["nom_perso"] = 	    $row["nom_perso"];
				$retour["description"] =    $row["description"];
                $retour["intro"] =         	$row["intro"];
                $retour["langue"] =        	$row["langue"];
				$retour["video"] =      	$row["video"];
				$retour[$id]["image"] =     $row2["img_pres"];
			}
			return $retour;	
		}
		
		function lire_like() {
			global $mysqli;
			
			if (isset($_POST['submit'])) {
			
				$var = 0;
				$search = $_POST['search'];
				$search .= '%';
				$requete = "SELECT * FROM tuto_video WHERE nom_perso LIKE'$search'";
				//echo "debug : $requete<br>";
				$res = $mysqli->query($requete);
		
				$retour = array();
				
				while($row = $res->fetch_array(MYSQLI_ASSOC)) {			
		
					$retour[$var]["date"] =	 substr($row["date_crea"],8,2)."-".substr($row["date_crea"],5,2)."-".substr($row["date_crea"],0,4);
					$retour[$var]["titre"] =         	$row["titre"];
					$retour[$var]["manga"] =   		$row["manga"];
					$retour[$var]["nom_perso"] = 	    $row["nom_perso"];
					$retour[$var]["description"] =    $row["description"];
					$retour[$var]["intro"] =         	$row["intro"];
					$retour[$var]["langue"] =        	$row["langue"];
					$retour[$var]["video"] =      	$row["video"];
					$retour[$var]["image"] =     $row["img_pres"];
					$retour[$var]["id_fiche"] =		$row["id"];
					$var++;
				}
				return $retour;	
			}
		}
	
		function aff_block() {
			global $mysqli;	
			
			$retour = array();
			$step = 3; // definit quelle element prendre en front office
				
			// on recupere l'url du site
			$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
			// dernier element de l url qui correspond a l'id de la serie
			$tmp = explode('/', $monUrl);
			$end = end($tmp);
			$serie = $tmp[4];			
			
			// debut des requetes SQL
			$requete = "SELECT * FROM tuto_video WHERE nom_perso IN (SELECT nom FROM personnages WHERE id = $end AND id_manga = $serie)";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
					
				$requete2 =  "SELECT * FROM tuto_video WHERE id = '$id' ORDER BY date_crea DESC";
				$res2 = $mysqli->query($requete2);
				$row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$retour[$id]["id_fiche"] =      $row["id"];
				$retour[$id]["date"] =			substr($row2["date_crea"],8,2)."-".substr($row2["date_crea"],5,2)."-".substr($row2["date_crea"],0,4);
				$retour[$id]["titre"] =         $row2["titre"];
				$retour[$id]["titre_manga"] =   $row2["titre_manga"];
				$retour[$id]["nom_perso"] =     $row2["nom_perso"];
				$retour[$id]["description"] =   $row2["description"];
				$retour[$id]["intro"] =         $row2["intro"];
				$retour[$id]["langue"] =        $row2["langue"];
				$retour[$id]["image"] =         $row2["img_pres"];
				$retour[$id]["video"] =      	$row["video"];
				
				// var externe BDD
				$retour[$id]["step"] = 		 	 $step;
			}
			return $retour;	
		}
		
		function lire_url() {
			global $mysqli;
			
			$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
			$end = (explode('/', $monUrl));
			
			$id = $end[4];
			
			$requete = "SELECT * FROM tuto_video WHERE id=\"$id\"";
			$res = $mysqli->query($requete);
	
			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {			
	
				$retour["date"] =	substr($row["date_crea"],8,2)."-".substr($row["date_crea"],5,2)."-".substr($row["date_crea"],0,4);
				$retour["titre"] =         $row["titre"];
				$retour["titre_manga"] =   $row["titre_manga"];
				$retour["nom_perso"] =     $row["nom_perso"];
				$retour["description"] =   $row["description"];
				$retour["intro"] =         $row["intro"];
				$retour["video"] =         $row["video"];
				$retour["langue"] =        $row["langue"];
				$retour["image"] =         $row["img_pres"];
			}
			return $retour;	
		}
}

?>