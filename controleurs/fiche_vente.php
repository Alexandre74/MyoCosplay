<?
    include("./classes/vente_cos.php");
    $vente_cos = new vente_cos;
    $smarty->assign("toto", $vente_cos->aff_block_vente());
    
    include("./classes/arbo_gene.php");
    
    $arbo = new arbo_gene;
	$smarty->assign("mypath", $arbo->path_seeker());
    
    $smarty->display("themes/$the_theme/arbo_gene.tpl");
?>