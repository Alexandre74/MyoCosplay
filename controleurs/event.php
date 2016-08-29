<? 
    include("./classes/evenement.php");
    $evenement = new evenement;
    $smarty->assign("cms", $evenement->lire());
    
    $smarty->display("themes/$the_theme/info.tpl");
?>