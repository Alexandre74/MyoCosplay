<?
	//appel du modele
	include("./classes/tuto_texte.php");

	$tuto = new tuto_txt;
	$smarty->assign("tuto", $tuto->lire_url());
    $smarty->assign("tuto_mod", $tuto->modif_url());
    $smarty->assign("tuto_del", $tuto->del_url());
    
    include("./classes/algo_mesures.php");
    
    $algo = new algo_mesures;
    $smarty->assign("algo", $algo->lire_algo());
    
    include("./classes/arbo_gene.php");
    
    $arbo = new arbo_gene;
	$smarty->assign("mypath", $arbo->path_seeker());
    
    
	$smarty->display("themes/$the_theme/tuto_display.tpl");
?>