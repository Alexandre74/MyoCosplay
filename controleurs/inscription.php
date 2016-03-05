<?
    include("./classes/inscription.php");
    $form = new inscription;
    $smarty->assign("inscription", $form->form());
    $smarty->display("themes/$the_theme/inscription.tpl");
?>