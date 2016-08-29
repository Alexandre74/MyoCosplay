<?    
    include("./classes/password_forgotten.php");
    
    $password = new password_forgotten;
    $smarty->assign("password", $password->forgot());
    
    $smarty->display("themes/$the_theme/password_forgotten.tpl");
    
?>