<?
// *fichier de paramatrage ***********************************
//
//* definition des routes liées aux controlleurs
//
// "nom de la route" => "nom du controlleur, sans extention",
//
// ***********************************************************

// Comment ecrire une route :
//
// - pas de caracteres accentués
// - pas de majuscules
//
// - les _ doivent etre remplacés par des / dans ce fichier de définitions
//
// pour la page d'accueil, vous devez donner trois ligne de routes, en admettant que votre controlleur s'appelle "index.php" : 
//
// "" => "index",
// "/" => "index",
// "index" => "index",

$definition_route = array(
	"" => "index",
	"/" => "index",
	"index" => "index",
    "connexion" => "connexion",
    "inscription" => "inscription",
	"deconnexion" => "deconnexion",
    "tuto-text-form" => "tuto_text_form",
    "tuto-accueil" => "tuto_accueil",
	"tuto-display" => "tuto_display"
);
?>
