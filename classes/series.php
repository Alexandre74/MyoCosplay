<?
	class series {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
		}
		
		//***** méthodes *****
		function lire_all() {
			global $mysqli;	
			
			$retour = array();
			
			$requete = "SELECT id FROM serie ORDER BY id DESC";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
					
                $requete2 =  "SELECT * FROM serie WHERE id = '$id' ";
                $res2 = $mysqli->query($requete2);
                $row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$retour[$id]["titre"] =         $row2["titre"];
				$retour[$id]["description"] =   $row2["description"];
				$retour[$id]["image"] =         $row2["image"];
			}
			return $retour;	
		}
		
		function lire($param) {
			global $mysqli;
			
			$requete = "SELECT * FROM serie WHERE id='$param'";
			$res = $mysqli->query($requete);

			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {			

				$retour["titre"] =         $row["titre"];
				$retour["description"] =   $row["description"];
				$retour["image"] =         $row["image"];
			}
			return $retour;	
		}
		
		function aff_serie() {
			global $mysqli;
			
			$retour = array();
			$step = 1;

			$requete2 = "SELECT DISTINCT serie.id, serie.titre, serie.image FROM serie INNER JOIN tuto_ecrit ON serie.titre = tuto_ecrit.titre_manga ORDER BY serie.titre ASC";
			$res2 = $mysqli->query($requete2);
				
			while($row2 = $res2->fetch_array(MYSQLI_ASSOC)) {
				$id = $row2["id"];
				
				$retour[$id]["id_serie"] =      $row2["id"];
				$retour[$id]["titre"] =         $row2["titre"];
                $retour[$id]["image"] =         $row2["image"];
                
				// var externe BDD
				$retour[$id]["step"] = 		 	 $step;
			}
			return $retour;	
		}
		
		function aff_loca_serie() {
			global $mysqli;
			
			$retour = array();
			$step = 1;

			$requete2 = "SELECT DISTINCT serie.id, serie.titre, serie.image FROM serie INNER JOIN loca_cos ON serie.titre = loca_cos.titre_manga ORDER BY serie.titre ASC";
			$res2 = $mysqli->query($requete2);
				
			while($row2 = $res2->fetch_array(MYSQLI_ASSOC)) {
				$id = $row2["id"];
				
				$retour[$id]["id_serie"] =      $row2["id"];
				$retour[$id]["titre"] =         $row2["titre"];
                $retour[$id]["image"] =         $row2["image"];
                
				// var externe BDD
				$retour[$id]["step"] = 		 	 $step;
			}
			return $retour;	
		}
		
		function aff_vente_serie() {
			global $mysqli;
			
			$retour = array();
			$step = 1;

			$requete2 = "SELECT DISTINCT serie.id, serie.titre, serie.image FROM serie INNER JOIN vente_cos ON serie.titre = vente_cos.titre_manga ORDER BY serie.titre ASC";
			$res2 = $mysqli->query($requete2);
				
			while($row2 = $res2->fetch_array(MYSQLI_ASSOC)) {
				$id = $row2["id"];
				
				$retour[$id]["id_serie"] =      $row2["id"];
				$retour[$id]["titre"] =         $row2["titre"];
                $retour[$id]["image"] =         $row2["image"];
                
				// var externe BDD
				$retour[$id]["step"] = 		 	 $step;
			}
			return $retour;	
		}
		
		function aff_serie_vid() {
			global $mysqli;
			
			$retour = array();
			$step = 1;

			$requete2 = "SELECT DISTINCT serie.id, serie.titre, serie.image FROM serie INNER JOIN tuto_video ON serie.titre = tuto_video.titre_manga ORDER BY serie.titre ASC";
			$res2 = $mysqli->query($requete2);
				
			while($row2 = $res2->fetch_array(MYSQLI_ASSOC)) {
				$id = $row2["id"];
				
				$retour[$id]["id_serie"] =      $row2["id"];
				$retour[$id]["titre"] =         $row2["titre"];
                $retour[$id]["image"] =         $row2["image"];
                
				// var externe BDD
				$retour[$id]["step"] = 		 	 $step;
			}
			return $retour;	
		}
	}
?>