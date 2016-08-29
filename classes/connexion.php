<?
class  connexion{
    function __construct() {
    }
    
    function connect ()
    {
        global $mysqli;
		
		if (isset($_SESSION['pseudo']))
		{
			echo 'Bonjour ' . $_SESSION['pseudo'];
		}
		else
		{
			//echo 'Vous n etes pas connecté';
		}
        
        if (isset($_POST['Login'])) {
            
			$pseudo = htmlspecialchars($_POST['Login']);
			$pass = htmlspecialchars($_POST['Password']);
			$pass_hache = sha1($pass);
			
			//requete pour verifier si le login mdp correspond en base
			$response = $mysqli->query('SELECT id FROM usr WHERE login = "' . $pseudo . '" AND mdp = "' . $pass_hache . '" ');
			$result = $response->fetch_array(MYSQLI_ASSOC);
			if (!$result)
			{
			   echo 'Mauvais identifiant ou mot de passe'; 
			}
			else
			{
				session_start();
				$_SESSION['id'] = $result['id'];
				$_SESSION['pseudo'] = $pseudo;
				$_SESSION['KCFINDER'] = array();
				$_SESSION['KCFINDER']['disabled'] = false;
				$_SESSION['KCFINDER']['uploadURL'] = 'upload/'.$pseudo;
			}
        } 
    }
    
}
?>