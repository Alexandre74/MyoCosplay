<?
	//***** clé secrete recaptcha Google *****
	$secret = "6LeGuAkTAAAAADU2EZypA9gaHLaZKaH3rygljeJV";
	
	//gestion du formulaire de contact
	if(isset($_POST["nom"])) {
		$smarty->assign('affiche_box_email', "non");
		
		$nom = 			$_POST["nom"];
		$prenom = 		$_POST["prenom"];
		$email = 		$_POST["email"];
		$societe = 		$_POST["societe"];
		$fonction = 	$_POST["fonction"];
		$message = 		$_POST["message"];
		
		$captcha=		$_POST['g-recaptcha-response'];
		
		if(trim($nom) == "" || trim($prenom) == "" || trim($societe) == "" || trim($fonction) == ""){
			$smarty->assign('affiche_box_email', "non");
		}
		else if(!$captcha){
			$smarty->assign('affiche_box_email', "non");
		}
		else {
	        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
	        
	        if($response.success!=false) {
				$msg = 	"
					Vous avez recu un nouveau contact sur votre site Groupe SFC \n
					\n
					Nom et Prenom: $nom $prenom\n
					Email : $email\n
					Societe : $societe\n
					Fonction : $fonction\n
					\n
					Message : \n
					$message\n
					\n
					";
			
				//*** debut envoi de mail ***		
				require ('./PHPMailer/PHPMailerAutoload.php');
				
				$mail = new PHPMailer;
				//$mail->SMTPDebug = 3;   
				
				$mail->isSMTP(); 
				$mail->Host = 'smtpcorp.com'; 
				$mail->SMTPAuth = false;  
				$mail->Port = 2525;  
				
				$mail->From = 'contact@suite-logique.fr';
				//$mail->From = 'contact@suite-logique.fr';
				$mail->FromName = utf8_decode('Votre site Groupe SFC');
				   
				//$mail->addAddress("g.valette@suite-logique.fr");
				//$mail->addAddress("mj@suite-logique.fr");
				$mail->addAddress("info@groupesfc.fr");
				//$mail->addAddress("t.hay@suite-logique.fr");
				
				$mail->isHTML(false);  
				$mail->Subject = utf8_decode('Message de votre site Groupe SFC');
				$mail->Body    = utf8_decode("$msg");

				$mail->send();	
				
				//$smarty->assign('test', "toto2");
				//*** fin envoi de mail ***
				
				//demande d'affichage d'une box de confirmation d'envoi au template
				$smarty->assign('affiche_box_email', "oui");
			}
			else
				$smarty->assign('affiche_box_email', "mauvais");
		}
	}
?>