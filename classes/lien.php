<?
	class lien {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
		}
		
		//***** méthodes *****
		function lire_all() {
			global $mysqli;	
			
			gen_slug($str);
			
			$retour = array();
			
			$requete = "SELECT id FROM lien ORDER BY id";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
                
                $requete2 =  "SELECT * FROM lien WHERE id = '$id' ";
                $res2 = $mysqli->query($requete2);
                $row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$retour[$id]["applications"] 	=  $row2["applications"];
				$retour[$id]["domaines"]		=  $row2["domaines"];
				$retour[$id]["produit"] 		=  $row2["produit"];
				$retour[$id]["homepage"] 		=  $row2["homepage"];
           
                $x1 = htmlspecialchars($row2[$_SESSION["lang"]."_titre"]);
                if ($x1 != ""){
                    $x1 = htmlspecialchars($row2[$_SESSION["lang"]."_titre"]); 
                    $x2 = htmlspecialchars($row2[$_SESSION["lang"]."_accroche"]);
                }
                else {
                    $x1 = htmlspecialchars($row2["FR_titre"]); 
                    $x2 = htmlspecialchars($row2["FR_accroche"]);
                }               
                
                $retour[$id]["titre"]	        = html_entity_decode($x1);
                $retour[$id]["url"]      		= html_entity_decode($x2);
			}
			return $retour;	
		}
		
		function lire($param) {
			global $mysqli;
			
			gen_slug($str);
			
			$requete = "SELECT * FROM lien WHERE id='$param'";
			$res = $mysqli->query($requete);

			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {
				
				$retour["applications"] 	=  $row["applications"];
				$retour["domaines"]			=  $row["domaines"];
				$retour["produit"] 			=  $row["produit"];
				$retour["homepage"] 		=  $row["homepage"];
				
				$x1 = htmlspecialchars($row[$_SESSION["lang"]."_titre"]);
				if ($x1 != ""){
					$x1 = htmlspecialchars($row[$_SESSION["lang"]."_titre"]); 
                    $x2 = htmlspecialchars($row[$_SESSION["lang"]."_accroche"]);
				}
				else {
					$x1 = htmlspecialchars($row["FR_titre"]); 
                    $x2 = htmlspecialchars($row["FR_accroche"]);
				}
				
				$retour["titre"]	    = html_entity_decode($x1);
                $retour["url"]      	= html_entity_decode($x2);
			}
			return $retour;	
		}
		
		function recupHomepage() {	
			global $mysqli;
			
			$requete = "SELECT * FROM lien WHERE homepage = 1";
			$res = $mysqli->query($requete);

			$retour = array();
			$flag = 0;
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {
				
				$retour[$flag]["applications"] 		=  $row["applications"];
				$retour[$flag]["domaines"]			=  $row["domaines"];
				$retour[$flag]["produit"] 			=  $row["produit"];
				$retour[$flag]["homepage"] 			=  $row["homepage"];
				
				$x1 = htmlspecialchars($row[$_SESSION["lang"]."_titre"]);
				if ($x1 != ""){
					$x1 = htmlspecialchars($row[$_SESSION["lang"]."_titre"]); 
                    $x2 = htmlspecialchars($row[$_SESSION["lang"]."_accroche"]);
				}
				else {
					$x1 = htmlspecialchars($row["FR_titre"]); 
                    $x2 = htmlspecialchars($row["FR_accroche"]);
				}
				
				$retour[$flag]["titre"]	    = html_entity_decode($x1);
                $retour[$flag]["url"]      	= html_entity_decode($x2);

				$flag = $flag + 1;
			}
			return $retour;		
		}
		
		function recupByDomaine($param) {
			
			global $mysqli;
			
			$requete = "SELECT * FROM lien WHERE domaines LIKE '%,$param,%' ";
			$res = $mysqli->query($requete);
			
			$retour = array();
			$flag = 0;
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){
				
				$retour[$flag]["applications"] 	=  $row["applications"];
				$retour[$flag]["domaines"]		=  $row["domaines"];
				$retour[$flag]["produit"] 		=  $row["produit"];
				$retour[$flag]["homepage"] 		=  $row["homepage"];
           
                $x1 = htmlspecialchars($row[$_SESSION["lang"]."_titre"]);
                if ($x1 != ""){
                    $x1 = htmlspecialchars($row[$_SESSION["lang"]."_titre"]); 
                    $x2 = htmlspecialchars($row[$_SESSION["lang"]."_accroche"]);
                }
                else {
                    $x1 = htmlspecialchars($row["FR_titre"]); 
                    $x2 = htmlspecialchars($row["FR_accroche"]);
                }               
                
                $retour[$flag]["titre"]	        	= html_entity_decode($x1);
                $retour[$flag]["url"]      	= html_entity_decode($x2);
				
				$flag = $flag + 1;
				
			}
			return $retour;
		}
		
		function recupByAppli($param) {
			
			global $mysqli;
			
			$requete = "SELECT * FROM lien WHERE applications LIKE '%,$param,%' ";
			$res = $mysqli->query($requete);
			
			$retour = array();
			$flag = 0;
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){
				
				$retour[$flag]["applications"] 	=  $row["applications"];
				$retour[$flag]["domaines"]		=  $row["domaines"];
				$retour[$flag]["produit"] 		=  $row["produit"];
				$retour[$flag]["homepage"] 		=  $row["homepage"];
           
                $x1 = htmlspecialchars($row[$_SESSION["lang"]."_titre"]);
                if ($x1 != ""){
                    $x1 = htmlspecialchars($row[$_SESSION["lang"]."_titre"]); 
                    $x2 = htmlspecialchars($row[$_SESSION["lang"]."_accroche"]);
                }
                else {
                    $x1 = htmlspecialchars($row["FR_titre"]); 
                    $x2 = htmlspecialchars($row["FR_accroche"]);
                }               
                
                $retour[$flag]["titre"]	    = html_entity_decode($x1);
                $retour[$flag]["url"]      	= html_entity_decode($x2);
				
				$flag = $flag + 1;
				
			}
			return $retour;
		}
		
		function recupByProduit($param) {
			
			global $mysqli;
			
			$requete = "SELECT * FROM lien WHERE produit LIKE '%$param%' ";
			$res = $mysqli->query($requete);
			
			$retour = array();
			$flag = 0;
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){
				
				$retour[$flag]["applications"] 	=  $row["applications"];
				$retour[$flag]["domaines"]		=  $row["domaines"];
				$retour[$flag]["produit"] 		=  $row["produit"];
				$retour[$flag]["homepage"] 		=  $row["homepage"];
           
                $x1 = htmlspecialchars($row[$_SESSION["lang"]."_titre"]);
                if ($x1 != ""){
                    $x1 = htmlspecialchars($row[$_SESSION["lang"]."_titre"]); 
                    $x2 = htmlspecialchars($row[$_SESSION["lang"]."_accroche"]);
                }
                else {
                    $x1 = htmlspecialchars($row["FR_titre"]); 
                    $x2 = htmlspecialchars($row["FR_accroche"]);
                }               
                
                $retour[$flag]["titre"]	    = html_entity_decode($x1);
                $retour[$flag]["url"]      	= html_entity_decode($x2);
				
				$flag = $flag + 1;	
			}
			return $retour;
		}
	}
?>