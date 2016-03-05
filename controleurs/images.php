<?
	//appel du modele
	include("./classes/images.php");
	
	$images = new images;
	
	$smarty->assign("images", $images->lire());
?>