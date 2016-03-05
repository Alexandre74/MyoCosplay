<?
	class metier {
		//***** attributs *****

		
		//***** constructeur *****
		function __construct() { 
			 
		}
		
		//***** méthodes *****
		function lire_all() {
			global $mysqli,$smarty;	
			
			gen_slug($str);
			
			$retour = array();
			
			$requete = "SELECT id FROM metier ORDER BY id";
			$res = $mysqli->query($requete);
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)){
				$id = $row["id"];
					
				$requete2 =  "SELECT * FROM metier WHERE id = '$id' ";
				$res2 = $mysqli->query($requete2);
				$row2 = $res2->fetch_array(MYSQLI_ASSOC);
				
				$retour[$id]["id_ban"] 			= $row2["id_ban"];
				$retour[$id]["id_block"] 		= $row2["id_block"];
				$retour[$id]["id_contact1"] 	= $row2["contact1"];
				$retour[$id]["id_contact2"] 	= $row2["contact2"];
				$myStuff 						= explode(",",trim($row2["categ"],","));
				$retour[$id]["domaine"] 		= explode(",",trim($row2["domaine"],","));
				$myStuff2 						= explode(",",trim($row2["domaine"],","));
				
				/* selection de 3 champs random pour parties de droite */
				
				$reqActu = "SELECT * FROM actu WHERE 1 AND (";
				$reqActu2 = "";
				
				foreach ($myStuff2 as $key => $k){
					$reqActu2 .= " OR domaine = '$k' ";
				}
				
				$reqActu2 = trim($reqActu2, " OR");
				
				$reqActu .= $reqActu2;
				
				$reqActu .= ") ORDER BY id DESC LIMIT 3";
				
				//$smarty->assign("debug", "$reqActu");
				//print_r($reqActu);
				
				$resActu = $mysqli->query($reqActu);
				
				while($rowActu = $resActu->fetch_array(MYSQLI_ASSOC)){
					$id2 = $rowActu["id"];
					
					$x1 = htmlspecialchars($rowActu[$_SESSION["lang"]."_titre"]);
					if ($x1 != ""){
						$x1 = htmlspecialchars($rowActu[$_SESSION["lang"]."_titre"]);
					}
					else {
						$x1 = htmlspecialchars($rowActu["FR_titre"]);
					}
					$retour[$id]["mesActu"][$id2]["date"] = substr($rowActu["date"],8,2)."-".substr($rowActu["date"],5,2)."-".substr($rowActu["date"],0,4);
					$retour[$id]["mesActu"][$id2]["domaine"] = $rowActu["domaine"];
					$retour[$id]["mesActu"][$id2]["id_actu"] = $rowActu["id"];
					$retour[$id]["mesActu"][$id2]["titre"] = html_entity_decode($x1);
				}
				
				/**** publication ****/
				
				$reqPubli = "SELECT * FROM publication WHERE 1 AND (";
				$reqPubli2 = "";
				
				foreach ($myStuff2 as $key => $k){
					$reqPubli2 .= " OR domaine = '$k' ";
				}
				
				$reqPubli2 = trim($reqPubli2, " OR");
				
				$reqPubli .= $reqPubli2;
				
				$reqPubli .= ") ORDER BY id DESC LIMIT 3";
				
				$smarty->assign("debug", "$reqPubli");
				
				$resPubli = $mysqli->query($reqPubli);
				
				while($rowPubli = $resPubli->fetch_array(MYSQLI_ASSOC)){
					$id2 = $rowPubli["id"];
					
					$x1 = htmlspecialchars($rowPubli[$_SESSION["lang"]."_titre"]);
					if ($x1 != ""){
						$x1 = htmlspecialchars($rowPubli[$_SESSION["lang"]."_titre"]);
					}
					else {
						$x1 = htmlspecialchars($rowPubli["FR_titre"]);
					}
					$retour[$id]["mesPubli"][$id2]["date"] = substr($rowPubli["date"],8,2)."-".substr($rowPubli["date"],5,2)."-".substr($rowPubli["date"],0,4);
					$retour[$id]["mesPubli"][$id2]["domaine"] = $rowPubli["domaine"];
					$retour[$id]["mesPubli"][$id2]["id_publi"] = $rowPubli["id"];
					$retour[$id]["mesPubli"][$id2]["titre"] = html_entity_decode($x1);
				}
				
				/***** temoignages *****/
				
				$reqTemoi = "SELECT * FROM temoignage WHERE 1 AND (";
				$reqTemoi2 = "";
				
				foreach ($myStuff as $key => $k){
					$reqTemoi2 .= " OR categ LIKE '%,$k,%'";
				}
				
				$reqTemoi2 = trim($reqTemoi2, " OR");
				
				$reqTemoi .= $reqTemoi2;
				
				$reqTemoi .= ") ORDER BY id DESC LIMIT 3";
				
				$smarty->assign("debug", "$reqTemoi");
				
				$resTemoi = $mysqli->query($reqTemoi);
				
				while($rowTemoi = $resTemoi->fetch_array(MYSQLI_ASSOC)){
					$id2 = $rowTemoi["id"];
					
					$x1 = htmlspecialchars($rowTemoi[$_SESSION["lang"]."_nom"]);
					if ($x1 != ""){
						$x1 = htmlspecialchars($rowTemoi[$_SESSION["lang"]."_nom"]);
						$x2 = htmlspecialchars($rowTemoi[$_SESSION["lang"]."_societe"]);
						$x3 = htmlspecialchars($rowTemoi[$_SESSION["lang"]."_accroche"]);
					}
					else {
						$x1 = htmlspecialchars($rowTemoi["FR_nom"]);
						$x2 = htmlspecialchars($rowTemoi["FR_societe"]);
						$x3 = htmlspecialchars($rowTemoi["FR_accroche"]);
					}
					$retour[$id]["mesTemoi"][$id2]["nom"] 		= html_entity_decode($x1);
					$retour[$id]["mesTemoi"][$id2]["societe"] 	= html_entity_decode($x2);
					$retour[$id]["mesTemoi"][$id2]["accroche"] 	= html_entity_decode($x3);
				}
				
				/* FIN selection de 3 champs random pour parties de droite */
				
				$x1 = htmlspecialchars($row2[$_SESSION["lang"]."_titre"]);
				if ($x1 != ""){
					$x1 = htmlspecialchars($row2[$_SESSION["lang"]."_titre"]);
					$x2 = htmlspecialchars($row2[$_SESSION["lang"]."_cover"]);
					$x3 = htmlspecialchars($row2[$_SESSION["lang"]."_accroche"]); 
					$x4 = htmlspecialchars($row2[$_SESSION["lang"]."_contenu"]);
					$x5 = htmlspecialchars($row2[$_SESSION["lang"]."_btn"]);
					$x6 = htmlspecialchars($row2[$_SESSION["lang"]."_lien"]);
					$x7 = htmlspecialchars($row2[$_SESSION["lang"]."_pdf"]);
				}
				else {
					$x1 = htmlspecialchars($row2["FR_titre"]);
					$x2 = htmlspecialchars($row2["FR_cover"]);
					$x3 = htmlspecialchars($row2["FR_accroche"]); 
					$x4 = htmlspecialchars($row2["FR_contenu"]);
					$x5 = htmlspecialchars($row2["FR_btn"]);
					$x6 = htmlspecialchars($row2["FR_lien"]);
					$x7 = htmlspecialchars($row2["FR_pdf"]);
				}
				
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
				
				$retour[$id]["titre"]	        = html_entity_decode($x1);
				$retour[$id]["cover"]	        = html_entity_decode($x2);
				$retour[$id]["accroche"]	    = html_entity_decode($x3);
				$retour[$id]["contenu"]       	= html_entity_decode($x4);
				$retour[$id]["btn"]	        	= html_entity_decode($x5);
				$retour[$id]["lien"]	   		= html_entity_decode($x6);
				$retour[$id]["pdf"]         	= html_entity_decode($x7);
			}
			return $retour;	
		}
	}
?>