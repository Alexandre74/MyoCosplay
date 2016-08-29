<?php
/* Smarty version 3.1.29, created on 2016-07-09 13:11:01
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/tuto_accueil.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5780f7e5e50ed6_93285716',
  'file_dependency' => 
  array (
    'e78850d2e7d2fb33a5bc6ca402db80ee3bddf4e5' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/tuto_accueil.tpl',
      1 => 1468059806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5780f7e5e50ed6_93285716 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<div class="pdt10 pdb10"></div>
<div class="row">
 <div class="small-12 columns">
  <div class="txtac fs25px">
   <h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['texte']->value[49];?>
</span></h1>
  </div>
 </div>
</div>
<div class="pdt10 pdb10"></div>

<div class="pdt10 pdb10"></div>
<div class="row">
 <div class="small-12 columns">
  <div class="txtac fs25px">
<form>
 <div class="row">
  <div class="small-12 medium-6 columns">
    <input type="radio" name="recherche" class="" value="nom" checked><span class="fs14px">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['texte']->value[50];?>
</span><br>
  </div>
  <div class="small-12 medium-6 columns">
    <input type="radio" name="recherche" class="" value="morphologie"><span class="fs14px">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['texte']->value[80];?>
</span><br>
  </div>
 </div>
</form>
  </div>
 </div>
</div>
<div class="pdt10 pdb10"></div>

<div class="box1" >
 
<div class="pdt20 pdb20"></div>
<div class="row">
 <div class="small-12 colums">
  <form method="post">
   <div class="row">
    <div class="small-12 colums">
     <div class="">
      <input type="text" name="search">
     </div>
    </div>
   </div>
   <div class="row">
    <div class="small-12 colums">
     <input class="btn_blanc" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['texte']->value[50];?>
">
    </div>
   </div>
  </form>
 </div>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['tuto_texte']->value)) {?>
<div class="row">
     <div class="small-12 columns">
          <div class="txtal mgt20 mgb20"><?php echo $_smarty_tpl->tpl_vars['texte']->value[61];?>
</div>  
     </div>
</div>
<!-- tuto_texte -->
<div class="row">
     <?php
$_from = $_smarty_tpl->tpl_vars['tuto_texte']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_k_0_saved_item = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$__foreach_k_0_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
$__foreach_k_0_saved_local_item = $_smarty_tpl->tpl_vars['k'];
?>
          <div class="small-12 medium-6 large-3 columns end">
             <a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tutoriel-ecrit/<?php echo $_smarty_tpl->tpl_vars['k']->value['id_tuto'];?>
">
               <div class="tuto_txt_box resiseImg" style="background: url(<?php echo $_smarty_tpl->tpl_vars['k']->value['image'];?>
) no-repeat center center">
                    <div class="vente_index">
                         <div class="trais mgt5 mgb5"></div>
                         <div class="txtac mgt10 mgb10"><?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
</div>
                    </div>
               </div>
               <div class="show-for-medium-down pdt20 pdb20"></div> 
              </a>
          </div>
     <?php
$_smarty_tpl->tpl_vars['k'] = $__foreach_k_0_saved_local_item;
}
if ($__foreach_k_0_saved_item) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_k_0_saved_item;
}
if ($__foreach_k_0_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_k_0_saved_key;
}
?>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['tuto_video']->value)) {?>
<div class="row">
     <div class="small-12 columns">
          <div class="txtal mgt20 mgb20"><?php echo $_smarty_tpl->tpl_vars['texte']->value[62];?>
</div>  
     </div>
</div>
<!--  tuto_video -->
<div class="row">
     <?php
$_from = $_smarty_tpl->tpl_vars['tuto_video']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_k_1_saved_item = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$__foreach_k_1_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
$__foreach_k_1_saved_local_item = $_smarty_tpl->tpl_vars['k'];
?>
          <div class="small-12 medium-6 large-3 columns end">
             <a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tutoriel-video/<?php echo $_smarty_tpl->tpl_vars['k']->value['id_fiche'];?>
">
               <div class="tuto_txt_box resiseImg" style="background: url(<?php echo $_smarty_tpl->tpl_vars['k']->value['image'];?>
) no-repeat center center">
                    <div class="vente_index">
                         <div class="trais mgt5 mgb5"></div>
                         <div class="txtac mgt10 mgb10"><?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
</div>
                    </div>
               </div>
               <div class="show-for-medium-down pdt20 pdb20"></div>
            </a>
          </div>
     <?php
$_smarty_tpl->tpl_vars['k'] = $__foreach_k_1_saved_local_item;
}
if ($__foreach_k_1_saved_item) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_k_1_saved_item;
}
if ($__foreach_k_1_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_k_1_saved_key;
}
?>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['vente_cos']->value)) {?>
<div class="row">
     <div class="small-12 columns">
          <div class="txtal mgt20 mgb20"><?php echo $_smarty_tpl->tpl_vars['texte']->value[63];?>
</div>  
     </div>
</div>

<!--  vente_cos -->
<div class="row">
     <?php
$_from = $_smarty_tpl->tpl_vars['vente_cos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_k_2_saved_item = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$__foreach_k_2_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
$__foreach_k_2_saved_local_item = $_smarty_tpl->tpl_vars['k'];
?>
          <div class="small-12 medium-6 large-3 columns end">
               <div class="tuto_txt_box resiseImg" style="background: url(<?php echo $_smarty_tpl->tpl_vars['k']->value['image'];?>
) no-repeat center center">
                    <div class="vente_index">
                         <div class="trais mgt5 mgb5"></div>
                         <div class="txtac mgt10 mgb10"><?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
</div>
                    </div>
               </div>
               <div class="show-for-medium-down pdt20 pdb20"></div> 
          </div>
     <?php
$_smarty_tpl->tpl_vars['k'] = $__foreach_k_2_saved_local_item;
}
if ($__foreach_k_2_saved_item) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_k_2_saved_item;
}
if ($__foreach_k_2_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_k_2_saved_key;
}
?>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['loca_cos']->value)) {?>
<div class="row">
     <div class="small-12 columns">
          <div class="txtal mgt20 mgb20"><?php echo $_smarty_tpl->tpl_vars['texte']->value[64];?>
</div>  
     </div>
</div>
<!--  loca_cos -->
<div class="row">
     <?php
$_from = $_smarty_tpl->tpl_vars['loca_cos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_k_3_saved_item = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$__foreach_k_3_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
$__foreach_k_3_saved_local_item = $_smarty_tpl->tpl_vars['k'];
?>
          <div class="small-12 medium-6 large-3 columns end">
               <div class="tuto_txt_box resiseImg" style="background: url(<?php echo $_smarty_tpl->tpl_vars['k']->value['image'];?>
) no-repeat center center">
                    <div class="vente_index">
                         <div class="trais mgt5 mgb5"></div>
                         <div class="txtac mgt10 mgb10"><?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
</div>
                    </div>
               </div>
               <div class="show-for-medium-down pdt20 pdb20"></div> 
          </div>
     <?php
$_smarty_tpl->tpl_vars['k'] = $__foreach_k_3_saved_local_item;
}
if ($__foreach_k_3_saved_item) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_k_3_saved_item;
}
if ($__foreach_k_3_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_k_3_saved_key;
}
?>
</div>
<?php }?>
</div>

<div class="box">
<?php if (!empty($_smarty_tpl->tpl_vars['morpho']->value)) {?>
<div class="row">
     <div class="small-12 columns">
          <div class="txtal mgt20 mgb20"><?php echo $_smarty_tpl->tpl_vars['texte']->value[61];?>
</div>  
     </div>
</div>
<!-- tuto_texte -->
<div class="row">
     <?php
$_from = $_smarty_tpl->tpl_vars['morpho']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_k_4_saved_item = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$__foreach_k_4_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
$__foreach_k_4_saved_local_item = $_smarty_tpl->tpl_vars['k'];
?>
          <div class="small-12 medium-6 large-3 columns end">
             <a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tutoriel-ecrit/<?php echo $_smarty_tpl->tpl_vars['k']->value['id_tuto'];?>
">
               <div class="tuto_txt_box resiseImg" style="background: url(<?php echo $_smarty_tpl->tpl_vars['k']->value['image'];?>
) no-repeat center center">
                    <div class="vente_index">
                         <div class="trais mgt5 mgb5"></div>
                         <div class="txtac mgt10 mgb10"><?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
</div>
                    </div>
               </div>
               <div class="show-for-medium-down pdt20 pdb20"></div> 
              </a>
          </div>
     <?php
$_smarty_tpl->tpl_vars['k'] = $__foreach_k_4_saved_local_item;
}
if ($__foreach_k_4_saved_item) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_k_4_saved_item;
}
if ($__foreach_k_4_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_k_4_saved_key;
}
?>
</div>
<?php } else { ?>
<div>
<?php }?>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="nom"){
            $(".box").hide();
            $(".box1").show();
        }
        if($(this).attr("value")=="morphologie"){
            $(".box1").hide();
            $(".box").show();
        }
    });
});
<?php echo '</script'; ?>
>


<style type="text/css">
    .box{
        display: none;
    }
    .box1{
      display: block;
    }
</style>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
