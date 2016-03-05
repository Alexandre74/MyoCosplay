<?
	/**************************************************************************************/
	/* Routeur : base FS foundation v10                                                   */
	/* Webissime                                                                          */
	/*                                                                                    */
	/* Moteur de template : Smarty 3                                                      */
	/**************************************************************************************/
	ini_set('display_startup_errors',1);
	ini_set('display_errors',1);
	error_reporting(-1);	
	session_start();
	
	//preparation moteur de template
	require('Smarty.class.php');
	$smarty = new Smarty();
	
	//controleur 404 de base, appellé si auune route n'est trouvée
	$_SESSION["controlleur"] = "404";
	
	//recuperation des parametres d'url
	$_SESSION["get1"] = ""; //1er passage de parametre dans la route url, par defaut
	$_SESSION["get2"] = ""; //2eme passage de parametre dans la route url, par defaut
	$_SESSION["get3"] = ""; //3eme passage de parametre dans la route url, par defaut
	$_SESSION["get4"] = ""; //4eme passage de parametre dans la route url, par defaut
	$_SESSION["get5"] = ""; //5eme passage de parametre dans la route url, par defaut
	$_SESSION["get6"] = ""; //6eme passage de parametre dans la route url, par defaut
	
	//gestion du fichier de traduction
	if ($_COOKIE["lang"] == "") {
		setcookie("lang","FR");
		echo "<script>window.location.reload();</script>";
	}
		
	include("lang/".$_COOKIE["lang"].".php");
	
	if($_COOKIE["lang"] == "")
		include("lang/FR.php");
	
	//fichier de gestion de la base de données
	include("config/bd.php");
	
	//fichier de fonction de base
	include("config/fonctions.php");
	
	//fichier de parametrage global
	include("config/parametrage.php");
	
	//fichier de parametrage des routes
	include("config/routeur.php");
	
	//variables des header et footer de base
	$smarty->assign('header_tpl', "themes/$the_theme/header.tpl");
	$smarty->assign('footer_tpl', "themes/$the_theme/footer.tpl");
	//$smarty->assign('breadcrumb_tpl', "themes/$the_theme/breadcrumb.tpl");
	
	//mise en variable smarty de la base de l'url du site sur lequel on surf
	$smarty->assign('master_url', "$master_url");
	$smarty->assign('the_theme', "$the_theme");
	
	//mise en variable smarty du coockie lang
	$smarty->assign('lang', $_COOKIE["lang"]);
	
	//*************************************************
	// Moteur de route
	//*************************************************
	
	$smarty->assign('url', $_SESSION["url"]);
	
	$smarty->assign('get1', urldecode($_SESSION["get1"]));
	$smarty->assign('get2', urldecode($_SESSION["get2"]));
	$smarty->assign('get3', urldecode($_SESSION["get3"]));
	$smarty->assign('get4', urldecode($_SESSION["get4"]));
	$smarty->assign('get5', urldecode($_SESSION["get5"]));
	$smarty->assign('get6', urldecode($_SESSION["get6"]));
	
	//variables des TPL généralistes utilisés pour ce site
	include("controleurs/texte.php");
	include("controleurs/images.php");
	include("controleurs/block.php");
	
	//include("controleurs/url.php");
	//include("controleurs/email.php");
	
	//! appel des controlleurs generalistes
	//include("controleurs/file.php");
	
	//appel du modele

	
	//! appel du controleur de route
	include("controleurs/".$_SESSION["controlleur"].".php");
	
	
?>
