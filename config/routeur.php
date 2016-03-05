<?
	//********* DEBUT definition des routes du site **********
	
	include("definitions_routes.php");
	
	//********* FIN definition des routes du site ************

	$_SESSION["url"] = substr(str_replace(array(".php", ".html"), array("",""), $_SERVER['REQUEST_URI']),1); 
	
	//on remplace les eventuels "_" par "/"
	$_SESSION["url"] = str_replace("_", "/", $_SESSION["url"]);
	
	//explode de la route actuelle
	$route = explode("/",$_SESSION["url"]);
	$getx = 0;
	
	$debug = "";

	//recherche de la bonne route
	foreach($definition_route as $key => $value) {
		$def = explode("/",$key);
		
		if (count($def) == count($route)) {
			
			$flag = 0;
			$getx = 0;
		
			foreach($def as $x => $key2) {
				if ($key2 == $route[$x] || ($x > 0 && $key2 == "*") ) {
					
					$flag++;
					
					if ($key2 == "*") {
						$getx++;
						
						$_SESSION["get$getx"] = $route[$x];
					}
				}
			}
			
			if ($flag == count($def)) {
				//on stocke en session le nom du controleur de la route trouvée
				$_SESSION["controlleur"] = $value;
				break;
			}
		}
	}
?>