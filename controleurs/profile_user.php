<?

	include("./classes/profile_user.php");
	
	$profile = new profile_user;
	
    $smarty->assign("profile", $profile->lire($_SESSION['id']));
	$smarty->assign("yolo", $profile->modify());
	
    $smarty->display("themes/$the_theme/profile_user.tpl");
?>