<?
	//appel du modele
	include("./classes/block.php");
	
	$annonce = new block;
	
	$smarty->assign("block", $annonce->lire());
?>