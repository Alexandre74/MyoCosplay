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

    $smarty->display("themes/$the_theme/index.tpl");
?>