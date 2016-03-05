<?
	//appel du modele
	include("./classes/tuto_display.php");
	
	$tuto = new Display_tuto;
	$smarty->assign("tuto", $tuto->display());
	$smarty->display("themes/$the_theme/tuto_display.tpl");
?>