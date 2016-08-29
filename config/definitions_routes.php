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
    "tuto-video-form" => "tuto_video_form",
	"tuto-video/*" => "tuto_video",
	"profile-user" => "profile_user",
    "news/*" => "news",
    "evenement/*" => "event",
    "password-forgotten" => "password_forgotten",
    "streaming" => "streaming",
    
    "locations" => "serie_loca",
    "locations/*" => "personnage",
    "locations/*/*" => "fiche_loca",
    "location/*" => "loca_display",
    
    "ventes" => "serie_vente",
    "ventes/*" => "personnage",
    "ventes/*/*" => "fiche_vente",
    "vente/*" => "vente_display",
    
    "tutoriel-videos" => "tuto_video",
    "tutoriel-videos/*" => "personnage",
    "tutoriel-videos/*/*" => "fiche_video",
    "tutoriel-video/*" => "video_display",
    
    "tutoriel-ecrits" => "tuto_texte",
    "tutoriel-ecrits/*" => "personnage",
    "tutoriel-ecrits/*/*" => "fiche_tuto",
    "tutoriel-ecrit/*" => "tuto_display",
    
    "faq" => "faq"
);
?>
