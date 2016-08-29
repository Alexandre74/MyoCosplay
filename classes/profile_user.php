<?

class profile_user {
	
	function __construct() { 
		}
		
		function modify()
        {
			global $mysqli;
			
			if (isset($_POST['valide'])) {
				$profile_id = $_SESSION['id'];
				
				$requete = "SELECT * FROM usr WHERE id='$profile_id'";
				$res = $mysqli->query($requete);

				$profile = array();
			
				while($row = $res->fetch_array(MYSQLI_ASSOC)) {	

					$profile["login"] =        	 		$row["login"];
					$profile["mdp"] =   				$row["mdp"];
					$profile["email"] =     			$row["email"];
					$profile["telephone"] =   			$row["telephone"];
					$profile["nom"] =         			$row["nom"];
					$profile["prenom"] =        		$row["prenom"];
					$profile["sexe"] = 					$row["sexe"];
					$profile["tour_de_poitrine"] = 		$row["tour_de_poitrine"];
					$profile["tour_des_hanches"] = 		$row["tour_des_hanches"];
					$profile["tour_de_taille"] = 		$row["tour_de_taille"];
					$profile["jambes_exterieures"] = 	$row["jambes_exterieures"];
					$profile["largeur_depaules"] = 		$row["largeur_depaules"];
					$profile["longeur_des_manches"] = 	$row["longeur_des_manches"];
					$profile["taille"] = 				$row["taille"];
					$profile["poids"] = 				$row["poids"];
					$profile["tour_de_tete"] = 			$row["tour_de_tete"];
					$profile["tour_de_cou"] = 			$row["tour_de_cou"];
					$profile["tour_de_cuisse"] = 		$row["tour_de_cuisse"];
					$profile["tour_de_cheville"] = 		$row["tour_de_cheville"];
					$profile["tour_de_bicep"] = 		$row["tour_de_bicep"];
					$profile["tour_de_poignet"] = 		$row["tour_de_poignet"];
					$profile["longueur_du_pied"] = 		$row["longueur_du_pied"];
				}
				if (!empty($_POST['nom'])) {
					$nom = htmlspecialchars($_POST['nom']);
				}
				else {
					$nom = $profile["nom"];
				}
				if (!empty($_POST['prenom'])) {
					$prenom = htmlspecialchars($_POST['prenom']);
				}
				else {
					$prenom = $profile["prenom"];
				}
				if (!empty($_POST['email'])) {
					$email = htmlspecialchars($_POST['email']);
				}
				else {
					$email = $profile["email"];
				}
				if (!empty($_POST['telephone'])) {
					$telephone = htmlspecialchars($_POST['telephone']);
				}
				else {
					$telephone = $profile["telephone"];
				}
				if (!empty($_POST['sexe'])) {
					$sexe = htmlspecialchars($_POST['sexe']);
				}
				else {
					$sexe = $profile["sexe"];
				}
				if (!empty($_POST['tour_de_poitrine'])) {
					$tour_de_poitrine = htmlspecialchars($_POST['tour_de_poitrine']);
				}
				else {
					$tour_de_poitrine = $profile["tour_de_poitrine"];
				}
				if (!empty($_POST['tour_des_hanches'])) {
					$tour_des_hanches = htmlspecialchars($_POST['tour_des_hanches']);
				}
				else {
					$tour_des_hanches = $profile["tour_des_hanches"];
				}
				if (!empty($_POST['tour_de_taille'])) {
					$tour_de_taille = htmlspecialchars($_POST['tour_de_taille']);
				}
				else {
					$tour_de_taille = $profile["tour_de_taille"];
				}
				if (!empty($_POST['jambes_exterieures'])) {
					$jambes_exterieures = htmlspecialchars($_POST['jambes_exterieures']);
				}
				else {
					$jambes_exterieures = $profile["jambes_exterieures"];
				}
				if (!empty($_POST['largeur_depaules'])) {
					$largeur_depaules = htmlspecialchars($_POST['largeur_depaules']);
				}
				else {
					$largeur_depaules = $profile["largeur_depaules"];
				}
				if (!empty($_POST['longeur_des_manches'])) {
					$longeur_des_manches = htmlspecialchars($_POST['longeur_des_manches']);
				}
				else {
					$longeur_des_manches = $profile["longeur_des_manches"];
				}
				if (!empty($_POST['taille'])) {
					$taille = htmlspecialchars($_POST['taille']);
				}
				else {
					$taille = $profile["taille"];
				}
				if (!empty($_POST['poids'])) {
					$poids = htmlspecialchars($_POST['poids']);
				}
				else {
					$poids = $profile["poids"];
				}
				if (!empty($_POST['tour_de_tete'])) {
					$tour_de_tete = htmlspecialchars($_POST['tour_de_tete']);
				}
				else {
					$tour_de_tete = $profile["tour_de_tete"];
				}
				if (!empty($_POST['tour_de_cou'])) {
					$tour_de_cou = htmlspecialchars($_POST['tour_de_cou']);
				}
				else {
					$tour_de_cou = $profile["tour_de_cou"];
				}
				if (!empty($_POST['tour_de_cuisse'])) {
					$tour_de_cuisse = htmlspecialchars($_POST['tour_de_cuisse']);
				}
				else {
					$tour_de_cuisse = $profile["tour_de_cuisse"];
				}
				if (!empty($_POST['tour_de_cheville'])) {
					$tour_de_cheville = htmlspecialchars($_POST['tour_de_cheville']);
				}
				else {
					$tour_de_cheville = $profile["tour_de_cheville"];
				}
				if (!empty($_POST['tour_de_bicep'])) {
					$tour_de_bicep = htmlspecialchars($_POST['tour_de_bicep']);
				}
				else {
					$tour_de_bicep = $profile["tour_de_bicep"];
				}
				if (!empty($_POST['tour_de_poignet'])) {
					$tour_de_poignet = htmlspecialchars($_POST['tour_de_poignet']);
				}
				else {
					$tour_de_poignet = $profile["tour_de_poignet"];
				}
				if (!empty($_POST['longueur_du_pied'])) {
					$longueur_du_pied = htmlspecialchars($_POST['longueur_du_pied']);
				}
				else {
					$longueur_du_pied = $profile["longueur_du_pied"];
				}
				if (!empty($_POST['old_password']) && !empty($_POST['new_password'])) {
					$old_password = htmlspecialchars($_POST['old_password']);
					$new_password = htmlspecialchars($_POST['new_password']);
					$new_password = sha1($new_password);
					$user = $this->lire($_SESSION['id']);
					if (sha1($old_password) == $user['mdp'])
					{
						$requete = "UPDATE usr SET mdp=\"$new_password\" WHERE id=\"$profile_id\"";
						$mysqli->query($requete);
					}
				}
				$requete = "UPDATE usr SET nom=\"$nom\", prenom=\"$prenom\", email=\"$email\", telephone=\"$telephone\", sexe=\"$sexe\",
				longeur_des_manches=\"$longeur_des_manches\", largeur_depaules=\"$largeur_depaules\", jambes_exterieures=\"$jambes_exterieures\",
				tour_de_taille=\"$tour_de_taille\", tour_des_hanches=\"$tour_des_hanches\", tour_de_poitrine=\"$tour_de_poitrine\",
				longueur_du_pied=\"$longueur_du_pied\", tour_de_poignet=\"$tour_de_poignet\", tour_de_bicep=\"$tour_de_bicep\",
				tour_de_cheville=\"$tour_de_cheville\", tour_de_cuisse=\"$tour_de_cuisse\", tour_de_cou=\"$tour_de_cou\", tour_de_tete=\"$tour_de_tete\",
				poids=\"$poids\", taille=\"$taille\" WHERE id=\"$profile_id\"";
                $mysqli->query($requete);
				header("Refresh:0");
			}
		}
		
		function lire($param) {
			global $mysqli;
			
			$requete = "SELECT * FROM usr WHERE id='$param'";
			$res = $mysqli->query($requete);

			$retour = array();
			
			while($row = $res->fetch_array(MYSQLI_ASSOC)) {			

				$retour["login"] =        	 		$row["login"];
				$retour["mdp"] =   					$row["mdp"];
                $retour["email"] =     				$row["email"];
				$retour["telephone"] =  			$row["telephone"];
                $retour["nom"] =         			$row["nom"];
                $retour["prenom"] =        			$row["prenom"];
				$retour["sexe"] = 					$row["sexe"];
				$retour["tour_de_poitrine"] = 		$row["tour_de_poitrine"];
				$retour["tour_des_hanches"] = 		$row["tour_des_hanches"];
				$retour["tour_de_taille"] = 		$row["tour_de_taille"];
				$retour["jambes_exterieures"] = 	$row["jambes_exterieures"];
				$retour["largeur_depaules"] = 		$row["largeur_depaules"];
				$retour["longeur_des_manches"] = 	$row["longeur_des_manches"];
				$retour["taille"] = 				$row["taille"];
				$retour["poids"] = 					$row["poids"];
				$retour["tour_de_tete"] = 			$row["tour_de_tete"];
				$retour["tour_de_cou"] = 			$row["tour_de_cou"];
				$retour["tour_de_cuisse"] = 		$row["tour_de_cuisse"];
				$retour["tour_de_cheville"] = 		$row["tour_de_cheville"];
				$retour["tour_de_bicep"] = 			$row["tour_de_bicep"];
				$retour["tour_de_poignet"] = 		$row["tour_de_poignet"];
				$retour["longueur_du_pied"] = 		$row["longueur_du_pied"];
			}
			return $retour;	
		}
}

?>