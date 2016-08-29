<?
    include("./classes/tuto_accueil.php");
    include("./classes/tuto_texte.php");
    include("./classes/tuto_video.php");
    include("./classes/vente_cos.php");
    include("./classes/loca_cos.php");
    
    $form_texte = new tuto_txt;
    $smarty->assign("tuto_texte", $form_texte->lire_like());
    $form_video = new tuto_video;
    $smarty->assign("tuto_video", $form_video->lire_like());
    $form_vente = new vente_cos;
    $smarty->assign("vente_cos", $form_vente->lire_like());
    $form_loca = new loca_cos;
    $smarty->assign("loca_cos", $form_loca->lire_like());
    $form_morpho = new tuto_accueil;
    $smarty->assign("morpho", $form_morpho->recup_mensuration());
    $smarty->display("themes/$the_theme/tuto_accueil.tpl");
?>