<?

class tuto_accueil {
    function __construct() {
    }
    
    function form() {
        global $mysqli;
        
        if (isset($_POST['submit'])) {
            
            $search = mysql_real_escape_string(htmlspecialchars(trim($_POST['search'])));
            if(empty($search))
            {}
            else
            {
                $results_manga_query = $mysqli->query('SELECT titre_manga FROM tuto_ecrit WHERE titre_manga LIKE %'.$search.'% ');
                //$results_char_query = $mysqli->query('SELECT nom_perso FROM tuto_ecrit WHERE nom_perso LIKE '%$search%' ');
               while($results_manga_num = $results_manga_query->fetch_array(MYSQLI_ASSOC))
               {
                    echo "paqua    ".$results_manga_num['titre_manga']."      paqua";
               }
            }
        }
    }
}
?>