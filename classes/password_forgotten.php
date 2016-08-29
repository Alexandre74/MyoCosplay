<?

class password_forgotten {
    
    //***** constructeur *****
		function __construct() { 
		}
        
        function forgot() {
            global $mysqli;
            
            if (isset($_POST['Email'])) {
                
                // On ne peu pas decrypter du sha1, il faut modifier le mdp et envoyer le neavou par mail ou envoyer une demande de reinitialisation
                
                $email = htmlspecialchars($_POST['Email']);
                
                $response = $mysqli->query('SELECT id FROM usr WHERE email = "' . $email . '" ');
                $result = $response->fetch_array(MYSQLI_ASSOC);
                
                if (!$result) {
                    echo 'Cette adresse email n existe pas';
                }
                else {
                    
                   //Creer un mdp aleatoire, le crypter en sha1 puis remplacer l ancien dans la bdd
                    $nb_car = 6;
                    $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789';
                    $nb_lettres = strlen($chaine) - 1;
                    $generation = '';
                    for($i=0; $i < $nb_car; $i++)
                    {
                        $pos = mt_rand(0, $nb_lettres);
                        $car = $chaine[$pos];
                        $generation .= $car;
                    }
                    
                    $pass_hache = sha1($generation);
                    $update = $mysqli->query('UPDATE usr SET mdp = "' . $pass_hache . '" WHERE id = "' . $result['id'] . '" ');
                    
                  //Envoie d un mail de confirmation
                        $msg = 	"
                        Bonjour, vous avez fait une requete de mot de passe\n
                        Votre nouveau mot de passe est : " . $generation . " \n
                        Nous vous conseillons de le changer des que possible \n";
                        
                    date_default_timezone_set('Etc/UTC');
                        
                    require ('PHPMailer/PHPMailerAutoload.php');
                    
                    //Create a new PHPMailer instance
                    $mail = new PHPMailer;
                    //Tell PHPMailer to use SMTP
                    $mail->isSMTP();
                    //Enable SMTP debugging
                    // 0 = off (for production use)
                    // 1 = client messages
                    // 2 = client and server messages
                    //$mail->SMTPDebug = 2;
                    //Ask for HTML-friendly debug output
                    //$mail->Debugoutput = 'html';
                    //Set the hostname of the mail server
                    $mail->Host = 'smtp.gmail.com';
                    // use
                    // $mail->Host = gethostbyname('smtp.gmail.com');
                    // if your network does not support SMTP over IPv6
                    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
                    $mail->Port = 587;
                    //Set the encryption system to use - ssl (deprecated) or tls
                    $mail->SMTPSecure = 'tls';
                    //Whether to use SMTP authentication
                    $mail->SMTPAuth = true;
                    //Username to use for SMTP authentication - use full email address for gmail
                    $mail->Username = "alexandre.lalliard74@gmail.com";
                    //Password to use for SMTP authentication
                    $mail->Password = "chatte74";
                    //Set who the message is to be sent from
                    $mail->setFrom('alexandre.lalliard74@gmail.com', 'MyoCosplay');
                    //Set who the message is to be sent to
                    $mail->addAddress($email, '');
                    //Read an HTML message body from an external file, convert referenced images to embedded,
                    //convert HTML into a basic plain-text alternative body
                    $mail->isHTML(false);  
                    $mail->Subject = utf8_decode('Demande de renvoie du mot de passe');
                    $mail->Body    = utf8_decode("$msg");
                    //send the message, check for errors
                    if (!$mail->send()) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                    }  
                }
                
            }
                
        }
    
}

?>