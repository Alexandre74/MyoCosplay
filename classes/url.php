<?
	class url {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
			 
		}
		
		//***** méthodes *****
		function lire() {
			global $mysqli;
			
			$retour = array();
			
			$requete = "SELECT * FROM url ORDER BY id";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {
				$id = $row["id"];

				$x1 = htmlspecialchars($row["FR_url"]);
				$x2 = htmlspecialchars($row[$_SESSION["lang"]."_url"]);
				
				$y1 = htmlspecialchars($row["FR_titre"]);
				$y2 = htmlspecialchars($row[$_SESSION["lang"]."_titre"]);
				
				$x = $x1;
				$y = $y1;
				
				if ($x2 != "") {
					$x = $x2;
					$y = $y2;
				}	
				
				$retour[$id]['url'] = html_entity_decode($x);
				$retour[$id]['titre'] = html_entity_decode($y);
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