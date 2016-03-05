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
				
				$x1 = htmlspecialchars($row2["FR_titre"]);
				$x2 = htmlspecialchars($row2[$_SESSION["lang"]."_titre"]);
				
				$y1 = htmlspecialchars($row2["FR_accroche"]);
				$y2 = htmlspecialchars($row2[$_SESSION["lang"]."_accroche"]);
				
				$z1 = htmlspecialchars($row2["FR_lien"]);
				$z2 = htmlspecialchars($row2[$_SESSION["lang"]."_lien"]);
				
				$g1 = htmlspecialchars($row2["FR_cover"]);
				$g2 = htmlspecialchars($row2[$_SESSION["lang"]."_cover"]);
				
				$titre = 	$x1;
				$accroche = $y1;
				$lien = 	$z1;
				$cover = 	$g1;
				
				if ($x2 != "") {
					$titre = 	$x2;
					$accroche = $y2;
					$lien = 	$z2;
					$cover = 	$g2;
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