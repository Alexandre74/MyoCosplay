<?

include("./classes/tuto_text_form.php");
    $form = new tuto_text_form;
    $smarty->assign("tuto_text", $form->form());
    $smarty->display("themes/$the_theme/tuto_text_form.tpl");

?>