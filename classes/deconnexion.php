<?
class  deconnexion{
    function __construct() {
    }
    
    function disconnect ()
    {
        session_start();

		// Suppression des variables de session et de la session
		$_SESSION = array();
		$_SESSION['KCFINDER']['disabled'] = true;
		session_destroy();
    }
    
}


?>