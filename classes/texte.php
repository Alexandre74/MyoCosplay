<?
	class texte {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
			 
		}
		
		//***** méthodes *****
		function lire() {
			global $mysqli;
			
			$retour = array();
			
			$requete = "SELECT * FROM texte ORDER BY id";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {
				$id = $row["id"];

				$x1 = htmlspecialchars($row["FR_txt"]);
				$x2 = htmlspecialchars($row[$_SESSION["lang"]."_txt"]);
				
				$x = $x1;
				
				if ($x2 != "") {
					$x = $x2;
				}	
				
				$retour[$id] = html_entity_decode($x);
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