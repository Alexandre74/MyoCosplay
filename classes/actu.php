<?
	class actu {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
		}
		
		function lire_all() {
			global $mysqli;	
			
			gen_slug($str);
			
			$retour = array();
			
			$requete = "SELECT id FROM actu ORDER BY id ";
			$res = $mysqli->query($requete);
		
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
				
				$requete2 =  "SELECT * FROM actu WHERE id = '$id' ";
				$res2 = $mysqli->query($requete2);
				$row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$retour[$id]["date"] 		= $row2["date"];

				$x1 = htmlspecialchars($row2[$_COOKIE["lang"]."_titre"]);
				if ($x1 != ""){
                    // si langue existe
					$x1 = htmlspecialchars($row2[$_COOKIE["lang"]."_titre"]); 
					$x2 = htmlspecialchars($row2[$_COOKIE["lang"]."_cover_img"]);
					$x3 = htmlspecialchars($row2[$_COOKIE["lang"]."_accroche"]);
					$x4 = htmlspecialchars($row2[$_COOKIE["lang"]."_contenu"]);
				}
				else {
                    // par default FR
					$x1 = htmlspecialchars($row2["FR_titre"]); 
					$x2 = htmlspecialchars($row2["FR_cover_img"]);
					$x3 = htmlspecialchars($row2["FR_accroche"]);
					$x4 = htmlspecialchars($row2["FR_contenu"]);  
				}
				
				$retour[$id]["titre"]	        = html_entity_decode($x1);
				$retour[$id]["cover"]	    	= html_entity_decode($x2);
				$retour[$id]["accroche"]	    = html_entity_decode($x3);
				$retour[$id]["contenu"]	        = html_entity_decode($x4);
			}
		return $retour;	
		}
		
		function lire() {
			global $mysqli;
			
			//gen_slug($str);
			
			// on recupere l'url du site
			$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
			// dernier element de l url qui correspond a l'id
			$end = end((explode('/', $monUrl))); 
			
			$requete = "SELECT * FROM actu WHERE id='$end'";
			$res = $mysqli->query($requete);
		
			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {
				
				$retour["date"] 		= $row["date"];
                
				$x1 = htmlspecialchars($row[$_COOKIE["lang"]."_titre"]);
				if ($x1 != ""){
					$x1 = htmlspecialchars($row[$_COOKIE["lang"]."_titre"]); 
					$x2 = htmlspecialchars($row[$_COOKIE["lang"]."_cover_img"]);
					$x3 = htmlspecialchars($row[$_COOKIE["lang"]."_accroche"]);
					$x4 = htmlspecialchars($row[$_COOKIE["lang"]."_contenu"]);
				}
				else {
					$x1 = htmlspecialchars($row["FR_titre"]); 
					$x2 = htmlspecialchars($row["FR_cover_img"]);
					$x3 = htmlspecialchars($row["FR_accroche"]);
					$x4 = htmlspecialchars($row["FR_contenu"]);  
				}

				$retour["titre"]	        = html_entity_decode($x1);
				$retour["cover"]	   		= html_entity_decode($x2);
				$retour["accroche"]	        = html_entity_decode($x3);
				$retour["contenu"]	        = html_entity_decode($x4);
			}
			return $retour;	
		}
		
		function recup_actu() {
			global $mysqli;	
			
			/*gen_slug($str);*/
			
			$retour = array();
			$flag = 0;
			
			$requete = "SELECT * FROM actu ORDER BY date DESC LIMIT 3";
			$res = $mysqli->query($requete);
		
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
				
				$retour[$flag]["date"] 		= $row["date"];
				$retour[$flag]["id_actu"]	= $row["id"];

				$x1 = htmlspecialchars($row[$_COOKIE["lang"]."_titre"]);
				if ($x1 != ""){
					$x1 = htmlspecialchars($row[$_COOKIE["lang"]."_titre"]); 
					$x2 = htmlspecialchars($row[$_COOKIE["lang"]."_cover_img"]);
					$x3 = htmlspecialchars($row[$_COOKIE["lang"]."_accroche"]);
					$x4 = htmlspecialchars($row[$_COOKIE["lang"]."_contenu"]);
				}
				else {
					$x1 = htmlspecialchars($row["FR_titre"]); 
					$x2 = htmlspecialchars($row["FR_cover_img"]);
					$x3 = htmlspecialchars($row["FR_accroche"]);
					$x4 = htmlspecialchars($row["FR_contenu"]);  
				}
				
				$retour[$flag]["titre"]	        	= html_entity_decode($x1);
				$retour[$flag]["cover"]	    		= html_entity_decode($x2);
				$retour[$flag]["accroche"]	        = html_entity_decode($x3);
				$retour[$flag]["contenu"]	        = html_entity_decode($x4);
				$flag++;
			}
		return $retour;	
		}
	}
?>