<?
    include("./classes/streaming.php");

    $form_streaming = new streaming;
    $smarty->assign("streaming", $form_streaming->form());
    $smarty->display("themes/$the_theme/streaming.tpl");
?>