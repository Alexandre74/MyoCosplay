<?
	class block {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
			 
		}
		
		//***** méthodes *****
		function lire() {
			global $mysqli;
			
			$retour = array();
			
			$requete = "SELECT id FROM block ORDER BY id";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {
				$id = $row["id"];
				
				$requete2 = "SELECT * FROM block WHERE id = '$id' ";
				$res2 = $mysqli->query($requete2);
				
				$row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				//$retour[$id]["publie"] =    $row2["publie"];
				//$retour[$id]["date"] =      $row2["date"];
				//$retour[$id]["id_cat"] =    $row2["id_cat"];
				
				if (isset($_SESSION["lang"]))
				{
					$x = htmlspecialchars($row2[$_SESSION["lang"]."_titre"]);
					$y = htmlspecialchars($row2[$_SESSION["lang"]."_contenu"]);
				}
				else
				{
					$x = htmlspecialchars($row2["FR_titre"]);
					$y = htmlspecialchars($row2["FR_contenu"]);
				}
				
				/*$requete3 = "SELECT id FROM url ORDER BY id";
				$res3 = $mysqli->query($requete3);
				
				while($row3 = $res3->fetch_array(MYSQLI_ASSOC)) {
					$id3 = $row3["id"];
					
					$requete2 = "SELECT * FROM url WHERE id = '$id3' ";
					$res2 = $mysqli->query($requete2);
					
					$row2 = $res2->fetch_array(MYSQLI_ASSOC);
					
					$xa1 = htmlspecialchars($row2["FR_url"]);
					$xa2 = htmlspecialchars($row2[$_SESSION["lang"]."_url"]);
					
					$xa = $xa1;
					
					if ($xa2 != "") {
						$xa = $xa2;
					}	
					
					$the_url	= html_entity_decode($xa);
					
					$y = str_replace("#url$id3#","$the_url",$y);
				}	*/
				
				$retour[$id]["titre"]	= html_entity_decode($x);
				$retour[$id]["contenu"] = html_entity_decode($y);
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