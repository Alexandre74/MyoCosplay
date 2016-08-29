<?
	class images {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
			 
		}
		
		//***** méthodes *****
		function lire() {
			global $mysqli;
			
			$retour = array();
			
			$requete = "SELECT id FROM photo_design ORDER BY id";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {
				$id = $row["id"];
				
				$requete2 = "SELECT * FROM photo_design WHERE id = '$id' ";
				$res2 = $mysqli->query($requete2);
				
				$row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$titre = 			htmlspecialchars($row2["FR_titre"]);
				$accroche =			htmlspecialchars($row2["FR_accroche"]);
				$lien = 			htmlspecialchars($row2["FR_lien"]);
				$cover = 			htmlspecialchars($row2["FR_cover"]);
				
				if (isset($_SESSION["lang"]))
				{
					$titre = 		htmlspecialchars($row2[$_SESSION["lang"]."_titre"]);
					$accroche = 	htmlspecialchars($row2[$_SESSION["lang"]."_accroche"]);
					$lien = 		htmlspecialchars($row2[$_SESSION["lang"]."_lien"]);
					$cover = 		htmlspecialchars($row2[$_SESSION["lang"]."_cover"]);
				}

				$retour[$id]["titre"]	= 	html_entity_decode($titre);
				$retour[$id]["accroche"] = 	html_entity_decode($accroche);
				$retour[$id]["lien"] = 		html_entity_decode($lien);
				$retour[$id]["image"] = 	html_entity_decode($cover);
			}
			
			return $retour;
		}
			
		function enregistrer() {
			
		}
		
		function effacer($param) {
			
		}
		
		function modifier($param) {
			
		}
	}
?>