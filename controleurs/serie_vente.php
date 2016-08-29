<? 
    include("./classes/series.php");
    $series = new series;
    $smarty->assign("toto", $series->aff_vente_serie());
    
    include("./classes/arbo_gene.php");
    
    $arbo = new arbo_gene;
	$smarty->assign("mypath", $arbo->path_seeker());
    
    $smarty->display("themes/$the_theme/arbo_gene.tpl");
?>