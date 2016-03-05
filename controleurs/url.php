<?
	//appel du modele
	include("./classes/url.php");
	
	$url = new url;
	
	$smarty->assign("url", $url->lire());
?>