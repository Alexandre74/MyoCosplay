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
                    echo 'Thanks for submitting';
                }
                $requete = "INSERT INTO usr VALUES
                (
                '',\"$pseudo\",\"$pass_hache\", 0,\"$ip\",10/10/2015,'windows',\"$email\",\"$tel\",\"$nom\",\"$prenom\"
                )";
                $mysqli->query($requete); 
            }
        }
    }
}
?>