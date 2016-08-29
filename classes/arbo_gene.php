<?

class arbo_gene {
	
	function __construct() { 
		}
		
	function form() {
		global $mysqli;
		
		
	}
	
	function path_seeker() {
        
        $retour = array();
        
        // on recupere l'url du site
        $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
        // dernier element de l url qui correspond a l'id de la serie
        
		$tmp =  explode('/', $monUrl);
		$end = end($tmp);
        // rcupere tout les elements de l'url
        $end2 = (explode('/', $monUrl));
        

        $retour["path0"] = 		 $tmp[3];
        $retour["pathlast"] = 	 $end;
		
		if (isset ($tmp[4])){
			$retour["path1"] = 	 $tmp[4];
		}		
        
        return $retour;	
    } 
}
?>