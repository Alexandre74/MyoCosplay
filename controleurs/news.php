<? 
    include("./classes/actu.php");
    $actu = new actu;
    $smarty->assign("cms", $actu->lire());
    
    $smarty->display("themes/$the_theme/info.tpl");
?>