<?
class  deconnexion{
    function __construct() {
    }
    
    function disconnect ()
    {
		global $master_url;
        session_start();

		// Suppression des variables de session et de la session
		$_SESSION = array();
		$_SESSION['KCFINDER']['disabled'] = true;
		session_destroy();
		header("Location: connexion");
    }
    
}


?>