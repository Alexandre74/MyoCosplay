<?
	class vente_cos {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
		}
		
		//***** méthodes *****
		function lire_all() {
			global $mysqli;	
			
			$retour = array();
			
			$requete = "SELECT id FROM vente_cos ORDER BY id DESC";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
					
                $requete2 =  "SELECT * FROM vente_cos WHERE id = '$id' ";
                $res2 = $mysqli->query($requete2);
                $row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$retour[$id]["titre"] =         $row2["titre"];
                $retour[$id]["description"] =   $row2["description"];
                $retour[$id]["image"] =         $row2["image"];
                $retour[$id]["prix"] =          $row2["prix"];
				$retour[$id]["taille"] =        $row2["taille"];
                $retour[$id]["date"] =	        substr($row2["date_crea"],8,2)."-".substr($row2["date_crea"],5,2)."-".substr($row2["date_crea"],0,4);
				$retour[$id]["titre_manga"] =   $row2["titre_manga"];
                $retour[$id]["nom_perso"] =     $row2["nom_perso"];
				

				
                
			}
			return $retour;	
		}
		
		function lire($param) {
			global $mysqli;
			
			$requete = "SELECT * FROM vente_cos WHERE id='$param'";
			$res = $mysqli->query($requete);

			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {			

                $retour["date"] =	       substr($row["date_crea"],8,2)."-".substr($row["date_crea"],5,2)."-".substr($row["date_crea"],0,4);
				$retour["titre"] =         $row["titre"];
				$retour["titre_manga"] =   $row["titre_manga"];
                $retour["nom_perso"] =     $row["nom_perso"];
				$retour["description"] =   $row["description"];
                $retour["prix"] =          $row["prix"];
				$retour["taille"] =        $row["taille"];
				$retour["image"] =         $row["image"];

			}
			return $retour;	
		}
		
        function last_vente() {
         global $mysqli;
			
			$retour = array();
			$var = 0;
			$requete2 = "SELECT * FROM vente_cos ORDER BY date_crea DESC LIMIT 4";
			
			$res2 = $mysqli->query($requete2);
			$flag = 0;
				
			while($row2 = $res2->fetch_array(MYSQLI_ASSOC)) {
				$id = $row2["id"];
				
				$retour[$var]["titre"] =         $row2["titre"];
                $retour[$var]["description"] =   $row2["description"];
                $retour[$var]["image"] =         $row2["image"];
                $retour[$var]["prix"] =          $row2["prix"];
				$retour[$var]["taille"] =        $row2["taille"];
                $retour[$var]["date"] =	         substr($row2["date_crea"],8,2)."-".substr($row2["date_crea"],5,2)."-".substr($row2["date_crea"],0,4);
				$retour[$var]["titre_manga"] =   $row2["titre_manga"];
                $retour[$var]["nom_perso"] =     $row2["nom_perso"];
                
				$var++;
			}
			return $retour;	
		}   
	}
?>