<?
    include("./classes/loca_cos.php");
    $loca_cos = new loca_cos;
    $smarty->assign("toto", $loca_cos->aff_block_loca());
    
    $smarty->display("themes/$the_theme/arbo_gene.tpl");
?>