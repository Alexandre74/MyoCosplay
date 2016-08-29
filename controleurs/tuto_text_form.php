<?
include("./classes/tuto_text_form.php");
include("./classes/personnage.php");
include("./classes/series.php");

    $form = new tuto_text_form;
    $smarty->assign("tuto_text", $form->form());
   
   	$serie = new series;
	$smarty->assign("serie", $serie->lire_all());
    
	$personnage = new personnages;
	$smarty->assign("perso", $personnage->lire_all());
    
    $smarty->display("themes/$the_theme/tuto_text_form.tpl");

?>