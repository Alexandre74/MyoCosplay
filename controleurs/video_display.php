<?
	//appel du modele
	include("./classes/tuto_video.php");
	
	$tuto_video = new tuto_video;
	$smarty->assign("tuto_video", $tuto_video->lire_url());
    
    include("./classes/arbo_gene.php");
    
    $arbo = new arbo_gene;
	$smarty->assign("mypath", $arbo->path_seeker());
    
	$smarty->display("themes/$the_theme/tuto_video.tpl");
?>