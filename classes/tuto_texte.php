<?
	class tuto_txt {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
		}
		
		//***** méthodes *****
		function lire_all() {
			global $mysqli;	
			
			$retour = array();
			
			$requete = "SELECT id FROM tuto_ecrit ORDER BY id DESC";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
					
                $requete2 =  "SELECT * FROM tuto_ecrit WHERE id = '$id' ";
                $res2 = $mysqli->query($requete2);
                $row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$retour[$id]["date"] =			substr($row2["date_crea"],8,2)."-".substr($row2["date_crea"],5,2)."-".substr($row2["date_crea"],0,4);
				$retour[$id]["titre"] =         $row2["titre"];
				$retour[$id]["titre_manga"] =   $row2["titre_manga"];
                $retour[$id]["nom_perso"] =     $row2["nom_perso"];
				$retour[$id]["description"] =   $row2["description"];
				$retour[$id]["contenu"] =       html_entity_decode($row2["contenu"]);
                $retour[$id]["langue"] =        $row2["langue"];
				$retour[$id]["image"] =         $row2["img_pres"];
				$retour[$id]["id_user"] =       $row2["id_user"];
			}
			return $retour;	
		}
		
		function lire($param) {
			global $mysqli;
			
			
			$requete = "SELECT * FROM tuto_ecrit WHERE id='$param'";
			$res = $mysqli->query($requete);

			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {			

                $retour["date"] =				substr($row["date_crea"],8,2)."-".substr($row["date_crea"],5,2)."-".substr($row["date_crea"],0,4);
				$retour["titre"] =         		$row["titre"];
				$retour["titre_manga"] =   		$row["titre_manga"];
                $retour["nom_perso"] =     		$row["nom_perso"];
				$retour["description"] =  		$row["description"];
				$retour["contenu"] =    		html_entity_decode($row["contenu"]);
                $retour["langue"] =        		$row["langue"];
				$retour["image"] =				$row["img_pres"];
				$retour["id_user"] =			$row["id_user"];
				
			}
			return $retour;
		}

		function lire_like() {
			global $mysqli;

			if (isset($_POST['submit'])) {
            
            $var = 0;
            $search = $_POST['search'];
            $search .= '%';
			$requete = "SELECT * FROM tuto_ecrit WHERE nom_perso LIKE'$search'";
			$res = $mysqli->query($requete);

			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {			

                $retour[$var]["date"] =				substr($row["date_crea"],8,2)."-".substr($row["date_crea"],5,2)."-".substr($row["date_crea"],0,4);
				$retour[$var]["titre"] =         	$row["titre"];
				$retour[$var]["titre_manga"] =   	$row["titre_manga"];
                $retour[$var]["nom_perso"] =     	$row["nom_perso"];
				$retour[$var]["description"] =   	$row["description"];
				$retour[$var]["contenu"] =       	html_entity_decode($row["contenu"]);
                $retour[$var]["langue"] =        	$row["langue"];
				$retour[$var]["image"] =      		$row["img_pres"];
				$retour[$var]["id_tuto"] = 			$row["id"];
				$retour[$var]["id_user"] = 			$row["id_user"];
				
				$var++;
			}
			return $retour;
		}
	}
		
		function lire_url() {
			global $mysqli;
			
			$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
			$end = (explode('/', $monUrl));
			$id = $end[4];
			
			$requete = "SELECT * FROM tuto_ecrit WHERE id=\"$id\"";
			$res = $mysqli->query($requete);

			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {

                $retour["date"] =			substr($row["date_crea"],8,2)."-".substr($row["date_crea"],5,2)."-".substr($row["date_crea"],0,4);
				$retour["titre"] =        	$row["titre"];
				$retour["titre_manga"] =   	$row["titre_manga"];
                $retour["nom_perso"] =    	$row["nom_perso"];
				$retour["description"] =   	$row["description"];
				$retour["contenu"] =      	html_entity_decode($row["contenu"]);
                $retour["langue"] =        	$row["langue"];
				$retour["image"] =      	$row["img_pres"];
				$retour["id_user"] =      	$row["id_user"];
				
			}
			return $retour;	
		}
		
        function last_tuto() {
         global $mysqli;
			
			$retour = array();
			$var = 0;
			$requete2 = "SELECT * FROM tuto_ecrit ORDER BY date_crea DESC LIMIT 4";
			
			$res2 = $mysqli->query($requete2);
			$flag = 0;
				
			while($row2 = $res2->fetch_array(MYSQLI_ASSOC)) {
				$id = $row2["id"];
				
				$retour[$var]["id_tuto"] =       	$row2["id"];
				$retour[$var]["date"] =			 	substr($row2["date_crea"],8,2)."-".substr($row2["date_crea"],5,2)."-".substr($row2["date_crea"],0,4);
				$retour[$var]["titre"] =         	$row2["titre"];
				$retour[$var]["titre_manga"] =   	$row2["titre_manga"];
                $retour[$var]["nom_perso"] =     	$row2["nom_perso"];
				$retour[$var]["description"] =   	$row2["description"];
				$retour[$var]["contenu"] =       	html_entity_decode($row2["contenu"]);
                $retour[$var]["langue"] =        	$row2["langue"];
				$retour[$var]["image"] =      	 	$row2["img_pres"];
				$retour[$var]["id_user"] =      	$row["id_user"];
				
				$var++;
			}
			return $retour;	
		}
		
		function aff_block() {
			global $mysqli;	
			
			$retour = array();
			
			// repere de l'etape de l'arborescence
			$step = 3; 
				
			// on recupere l'url du site
			$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
			// dernier element de l url qui correspond a l'id de la serie
			$tmp = explode('/', $monUrl);
			$end = end($tmp);
			$serie = $tmp[4];
			
			// debut des requetes SQL
			$requete = "SELECT * FROM tuto_ecrit WHERE nom_perso IN (SELECT nom FROM personnages WHERE id = $end AND id_manga = $serie)";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
					
                $requete2 =  "SELECT * FROM tuto_ecrit WHERE id = '$id' ORDER BY date_crea DESC";
                $res2 = $mysqli->query($requete2);
                $row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$retour[$id]["id_fiche"] =      $row["id"];
				$retour[$id]["date"] =			substr($row2["date_crea"],8,2)."-".substr($row2["date_crea"],5,2)."-".substr($row2["date_crea"],0,4);
				$retour[$id]["titre"] =         $row2["titre"];
				$retour[$id]["titre_manga"] =   $row2["titre_manga"];
                $retour[$id]["nom_perso"] =     $row2["nom_perso"];
				$retour[$id]["description"] =   $row2["description"];
				$retour[$id]["contenu"] =       html_entity_decode($row2["contenu"]);
                $retour[$id]["langue"] =        $row2["langue"];
				$retour[$id]["image"] =         $row2["img_pres"];
				$retour[$id]["id_user"] =      	$row["id_user"];
				
				// var externe BDD
				$retour[$id]["step"] = 		 	 $step;
			}
			return $retour;	
		}
		
		function modif_url() {
			
			if (isset($_POST['valide'])) {
				global $mysqli;
				
				$profile_id = $_SESSION['id'];

				$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
				$end = (explode('/', $monUrl));
				$id = $end[4];
			
				$mod_titre = htmlspecialchars($_POST['titre_mod']);
				$mod_description = htmlspecialchars($_POST['description_mod']);
				$mod_contenu = html_entity_decode($_POST['contenu_mod']);
				
				$requete = "UPDATE tuto_ecrit SET titre=\"$mod_titre\", description=\"$mod_description\", contenu=\"$mod_contenu\" WHERE id=\"$id\" && id_user=\"$profile_id\"";
				$mysqli->query($requete);
				header("Refresh:0");
			}
		}
		
		function del_url() {
			
			if (isset($_POST['delok'])) {
				global $mysqli;
				
				$profile_id = $_SESSION['id'];

				$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
				$end = (explode('/', $monUrl));
				$id = $end[4];
				
				$requete = "DELETE FROM tuto_ecrit WHERE id IN($id) && id_user=\"$profile_id\"";
				//$mysqli->query($requete);
				echo $requete;
				
				//header("Refresh:0");
			}
		}
	}
?>