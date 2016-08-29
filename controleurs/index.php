<?
    include("./classes/tuto_texte.php");
    $tuto_txt = new tuto_txt;
    $smarty->assign("tuto_txt", $tuto_txt->last_tuto());
    
    include("./classes/loca_cos.php");
    $loca_cos = new loca_cos;
    $smarty->assign("loca_cos", $loca_cos->last_loca());
    
    include("./classes/vente_cos.php");
    $vente_cos = new vente_cos;
    $smarty->assign("vente_cos", $vente_cos->last_vente());
    
    include("./classes/evenement.php");
    $event = new evenement;
    $smarty->assign("event", $event->recup_event());
    
    include("./classes/actu.php");
    $actu = new actu;
    $smarty->assign("actu", $actu->recup_actu());

    $smarty->display("themes/$the_theme/index.tpl");
?>