<?
   /* include("./classes/tuto_texte.php");
    $tuto_txt = new tuto_txt;
    $smarty->assign("toto", $tuto_txt->last_tuto());*/
    
    include("./classes/personnage.php");
    $personnage = new personnages;
    $smarty->assign("toto", $personnage->aff_perso());
    
    include("./classes/arbo_gene.php");
    
    $arbo = new arbo_gene;
	$smarty->assign("mypath", $arbo->path_seeker());
    
    $smarty->display("themes/$the_theme/arbo_gene.tpl");
?>