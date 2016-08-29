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

				$x = htmlspecialchars($row["FR_txt"]);
				
				if (isset($_SESSION["lang"]))
				{
					$x = htmlspecialchars($row[$_SESSION["lang"]."_txt"]);
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