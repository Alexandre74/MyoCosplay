<?

include("./classes/deconnexion.php");
$form = new deconnexion;
$smarty->assign("connexion", $form->disconnect());
//$smarty->display("themes/$the_theme/connexion.tpl");

?>