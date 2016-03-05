<?
	//appel du modele
	include("./classes/texte.php");
	
	$annonce = new texte;
	
	$smarty->assign("texte", $annonce->lire());
?>