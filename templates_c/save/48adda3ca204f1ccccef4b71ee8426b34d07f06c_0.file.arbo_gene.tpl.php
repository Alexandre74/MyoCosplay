<?php
/* Smarty version 3.1.29, created on 2016-07-09 13:00:35
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/arbo_gene.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5780f573b988b0_96940387',
  'file_dependency' => 
  array (
    '48adda3ca204f1ccccef4b71ee8426b34d07f06c' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/arbo_gene.tpl',
      1 => 1467742500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5780f573b988b0_96940387 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<div class="row">
     <div class="small-12 columns">
          <?php if ($_smarty_tpl->tpl_vars['mypath']->value["path0"] == "locations") {?>
          <div class="txtal mgt20 mgb20"><?php echo $_smarty_tpl->tpl_vars['texte']->value[18];?>
</div> <!-- location -->
          <?php } elseif ($_smarty_tpl->tpl_vars['mypath']->value["path0"] == "ventes") {?>
          <div class="txtal mgt20 mgb20"><?php echo $_smarty_tpl->tpl_vars['texte']->value[17];?>
</div> <!-- vente -->
          <?php } elseif ($_smarty_tpl->tpl_vars['mypath']->value["path0"] == "tutoriel-ecrits") {?>
          <div class="txtal mgt20 mgb20"><?php echo $_smarty_tpl->tpl_vars['texte']->value[15];?>
</div> <!-- tuto ecrit -->
          <?php } elseif ($_smarty_tpl->tpl_vars['mypath']->value["path0"] == "tutoriel-videos") {?>
          <div class="txtal mgt20 mgb20"><?php echo $_smarty_tpl->tpl_vars['texte']->value[16];?>
</div> <!-- tuto video --> 
          <?php }?>
     </div>
</div>

<!-- ligne location cosplay -->

<div class="row">
     <?php
$_from = $_smarty_tpl->tpl_vars['toto']->value;
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
               <?php if ($_smarty_tpl->tpl_vars['k']->value['step'] == 1) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['masterurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mypath']->value["path0"];?>
/<?php echo $_smarty_tpl->tpl_vars['k']->value['id_serie'];?>
">
               <?php } elseif ($_smarty_tpl->tpl_vars['k']->value['step'] == 2) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['masterurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mypath']->value["path0"];?>
/<?php echo $_smarty_tpl->tpl_vars['mypath']->value['path1'];?>
/<?php echo $_smarty_tpl->tpl_vars['k']->value['id_perso'];?>
">
               <?php } elseif ($_smarty_tpl->tpl_vars['k']->value['step'] == 3 && $_smarty_tpl->tpl_vars['mypath']->value["path0"] == "tutoriel-ecrits") {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['masterurl']->value;?>
/tutoriel-ecrit/<?php echo $_smarty_tpl->tpl_vars['k']->value['id_fiche'];?>
">
               <?php } elseif ($_smarty_tpl->tpl_vars['k']->value['step'] == 3 && $_smarty_tpl->tpl_vars['mypath']->value["path0"] == "locations") {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['masterurl']->value;?>
/location/<?php echo $_smarty_tpl->tpl_vars['k']->value['id_fiche'];?>
">
               <?php } elseif ($_smarty_tpl->tpl_vars['k']->value['step'] == 3 && $_smarty_tpl->tpl_vars['mypath']->value["path0"] == "ventes") {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['masterurl']->value;?>
/ventes/<?php echo $_smarty_tpl->tpl_vars['k']->value['id_fiche'];?>
">
               <?php } elseif ($_smarty_tpl->tpl_vars['k']->value['step'] == 3 && $_smarty_tpl->tpl_vars['mypath']->value["path0"] == "tutoriel-videos") {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['masterurl']->value;?>
/tutoriel-video/<?php echo $_smarty_tpl->tpl_vars['k']->value['id_fiche'];?>
">
               <?php }?>
                    <div class="tuto_txt_box resiseImg" style="background: url(<?php echo $_smarty_tpl->tpl_vars['k']->value['image'];?>
) no-repeat center center">
                         <div class="vente_index">
                              <div class="trais mgt5 mgb5"></div>
                              <div class="txtac mgt10 mgb10"><?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
</div>
                         </div>
                    </div>

                    </a>

               <div class="pdt10 pdb10"></div>
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

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
