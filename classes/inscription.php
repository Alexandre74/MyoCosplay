<?
class inscription {
    function __construct() {
    }
    
    function form() {
        global $mysqli;
        
        if (isset($_POST['Prenom'])) {
           
            $reponse = $mysqli->query('SELECT login FROM usr WHERE login = "' . $_POST['Pseudo'] . '" ');
            $login = $reponse->fetch_array(MYSQLI_ASSOC);
             
            $reponse = $mysqli->query('SELECT email FROM usr WHERE email = "' . $_POST['Email'] . '" ');
            $mail = $reponse->fetch_array(MYSQLI_ASSOC);
            if ($_POST['Pseudo'] == $login['login'])
            {
                echo "Ce nom d'utilisateur est déjà utilisé.";
            }
            elseif ($_POST['Email'] == $mail['email'])
            {
                echo "Cette adresse de mail est déjà utilisée.";
            }
            else
            {
                $pseudo = htmlspecialchars($_POST['Pseudo']);
                $pass = htmlspecialchars($_POST['Pass']);
                $pass_hache = sha1($pass);
                $email = htmlspecialchars($_POST['Email']);
                $tel = htmlspecialchars($_POST['Telephone']);
                $nom = htmlspecialchars($_POST['Nom']);
                $prenom = htmlspecialchars($_POST['Prenom']);
                $ip = getenv('HTTP_CLIENT_IP')?:
                      getenv('HTTP_X_FORWARDED_FOR')?:
                      getenv('HTTP_X_FORWARDED')?:
                      getenv('HTTP_FORWARDED_FOR')?:
                      getenv('HTTP_FORWARDED')?:
                      getenv('REMOTE_ADDR');
                $date = date("Y-m-d");
                if (isset($_POST['g-recaptcha-response']))
                {
                    $captcha = $_POST['g-recaptcha-response'];  
                }
                if (!$captcha)
                {
                    echo 'Please check the captcha form.';
                    exit;
                }
                $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfYoxETAAAAAL9arfuSn92P9qCg_UG9cnMoxFih&response=".$captcha);
                if ($response.success == false)
                {
                    echo 'You are spammer';
                }
                else
                {
                    
                        //Envoie d un mail de confirmation
                        $msg = 	"
                        Bonjour, nous vous confirmons votre inscription sur le site MyoCosplay\n";
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
                    $mail->addAddress($_POST['Email'], $_POST['Nom']);
                    //Read an HTML message body from an external file, convert referenced images to embedded,
                    //convert HTML into a basic plain-text alternative body
                    $mail->isHTML(false);  
                    $mail->Subject = utf8_decode('Confirmation inscription sur MyoCosplay');
                    $mail->Body    = utf8_decode("$msg");
                    //send the message, check for errors
                    if (!$mail->send()) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                    }
                    $var = NULL;
                    //Requete SQL
                    $requete = "INSERT INTO usr VALUES
                    (
                    '',\"$pseudo\",\"$pass_hache\", 0,\"$ip\",NOW(),'windows',\"$email\",\"$tel\",\"$nom\",\"$prenom\", '[FR]', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''
                    )";
                    $mysqli->query($requete);
                    //echo "$requete";
                   // echo "Thanks for submitting";
                }
                
            }
        }
    }
}
?>