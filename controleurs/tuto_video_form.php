<?
	include("./classes/tuto_video_form.php");
	
    $form = new tuto_video_form;
    $smarty->assign("tuto_video", $form->form());
	
    $smarty->display("themes/$the_theme/tuto_video_form.tpl");

?>