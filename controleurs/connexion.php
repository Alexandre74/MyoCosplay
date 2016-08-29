<?

include("./classes/connexion.php");
$form = new connexion;
$smarty->assign("session", $_SESSION);
$smarty->assign("connexion", $form->connect());
$smarty->display("themes/$the_theme/connexion.tpl");

?>