<?
	class tuto_txt {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
		}
		
		//***** méthodes *****
		function lire_all() {
			global $mysqli;	
			
			$retour = array();
			
			$requete = "SELECT id FROM tuto_ecrit ORDER BY id DESC";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){		
				$id = $row["id"];
					
                $requete2 =  "SELECT * FROM tuto_ecrit WHERE id = '$id' ";
                $res2 = $mysqli->query($requete2);
                $row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$retour[$id]["date"] =	substr($row2["date_crea"],8,2)."-".substr($row2["date_crea"],5,2)."-".substr($row2["date_crea"],0,4);
				$retour[$id]["titre"] =         $row2["titre"];
				$retour[$id]["titre_manga"] =   $row2["titre_manga"];
                $retour[$id]["nom_perso"] =     $row2["nom_perso"];
				$retour[$id]["description"] =   $row2["description"];
                $retour[$id]["intro"] =         $row2["intro"];
				$retour[$id]["contenu"] =       $row2["contenu"];
                $retour[$id]["langue"] =        $row2["langue"];
				$retour[$id]["img_pres"] =      $row2["img_pres"];

                /*
                $requete3 = "SELECT id FROM url ORDER BY id";
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
                    
                    $x4 = str_replace("#url$id3#","$the_url",$x4);
                }	
    
                //creation d'un lien
                $retour[$id]["url"] = $id."_".gen_slug($x1);
                */
                
			}
			return $retour;	
		}
		
		function lire($param) {
			global $mysqli;
			
			$requete = "SELECT * FROM tuto_ecrit WHERE id='$param'";
			$res = $mysqli->query($requete);

			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {			

                $retour["date"] =	substr($row["date_crea"],8,2)."-".substr($row["date_crea"],5,2)."-".substr($row["date_crea"],0,4);
				$retour["titre"] =         $row["titre"];
				$retour["titre_manga"] =   $row["titre_manga"];
                $retour["nom_perso"] =     $row["nom_perso"];
				$retour["description"] =   $row["description"];
                $retour["intro"] =         $row["intro"];
				$retour["contenu"] =       $row["contenu"];
                $retour["langue"] =        $row["langue"];
				$retour["img_pres"] =      $row["img_pres"];
				
                /*
				$requete3 = "SELECT id FROM url ORDER BY id";
                $res3 = $mysqli->query($requete3);
                
                while($row3 = $res3->fetch_array(MYSQLI_ASSOC)) {
                    $id3 = $row3["id"];
                    
                    $requete2 = "SELECT * FROM url WHERE id = '$id3' ";
                    $res2 = $mysqli->query($requete2);
                    
                    $row2 = $res2->fetch_array(MYSQLI_ASSOC);
                    
                    $xa1 = htmlspecialchars($row["FR_url"]);
                    $xa2 = htmlspecialchars($row[$_SESSION["lang"]."_url"]);
                    
                    $xa = $xa1;
                    
                    if ($xa2 != "") {
                        $xa = $xa2;
                    }	
                    
                    $the_url	= html_entity_decode($xa);
                    
                    $x4 = str_replace("#url$id3#","$the_url",$x4);
                }				

                //creation d'un lien
                $retour[$id]["url"] = $id."_".gen_slug($x1);
                */
			}
			return $retour;	
		}
		
        function last_tuto() {
         global $mysqli;
			
			/*$requete = "SELECT COUNT(*) AS recuperation FROM actu";
			$res = $mysqli->query($requete);
			$data_nb = $res->fetch_array(MYSQLI_ASSOC);
			*/
			$retour = array();
			$var = 0;
			$requete2 = "SELECT * FROM tuto_ecrit ORDER BY date_crea DESC LIMIT 4";
			
			$res2 = $mysqli->query($requete2);
			$flag = 0;
				
			while($row2 = $res2->fetch_array(MYSQLI_ASSOC)) {
				$id = $row2["id"];
				
				$retour[$var]["date"] =	substr($row2["date_crea"],8,2)."-".substr($row2["date_crea"],5,2)."-".substr($row2["date_crea"],0,4);
				$retour[$var]["titre"] =         $row2["titre"];
				$retour[$var]["titre_manga"] =   $row2["titre_manga"];
                $retour[$var]["nom_perso"] =     $row2["nom_perso"];
				$retour[$var]["description"] =   $row2["description"];
                $retour[$var]["intro"] =         $row2["intro"];
				$retour[$var]["contenu"] =       $row2["contenu"];
                $retour[$var]["langue"] =        $row2["langue"];
				$retour[$var]["img_pres"] =      $row2["img_pres"];
				
				
				$var++;
                /*
				$requete3 = "SELECT id FROM url ORDER BY id";
                $res3 = $mysqli->query($requete3);
                
                while($row3 = $res3->fetch_array(MYSQLI_ASSOC)) {
                    $id3 = $row3["id"];
                    
                    $requete4 = "SELECT * FROM url WHERE id = '$id3' ";
                    $res4 = $mysqli->query($requete4);
                    
                    $row4 = $res4->fetch_array(MYSQLI_ASSOC);
                    
                    $xa1 = htmlspecialchars($row4["FR_url"]);
                    $xa2 = htmlspecialchars($row4[$_SESSION["lang"]."_url"]);
                    
                    $xa = $xa1;
                    
                    if ($xa2 != "") {
                        $xa = $xa2;
                    }	
                    
                    $the_url	= html_entity_decode($xa); 
                    $x4 = str_replace("#url$id3#","$the_url",$x4);
                }
                
                //creation d'un lien
                $retour[$id]["url"] = $row2["id"]."_".gen_slug($x1);
                */

			}
			return $retour;	
		}   
	}
?>