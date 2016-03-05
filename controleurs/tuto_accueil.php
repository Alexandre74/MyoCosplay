<?
    include("./classes/tuto_accueil.php");
    $form = new tuto_accueil;
    $smarty->assign("tuto_acceuil", $form->form());
    $smarty->display("themes/$the_theme/tuto_accueil.tpl");
?>