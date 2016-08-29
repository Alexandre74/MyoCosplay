<?
    include("./classes/tuto_video.php");
    $tuto_video = new tuto_video;
    $smarty->assign("toto", $tuto_video->aff_block());
    
    include("./classes/arbo_gene.php");
    
    $arbo = new arbo_gene;
	$smarty->assign("mypath", $arbo->path_seeker());
    
    $smarty->display("themes/$the_theme/arbo_gene.tpl");
?>