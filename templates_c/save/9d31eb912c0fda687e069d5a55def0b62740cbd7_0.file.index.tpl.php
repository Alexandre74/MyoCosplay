<?php
/* Smarty version 3.1.29, created on 2016-07-26 10:30:55
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57973bdff29af3_89741346',
  'file_dependency' => 
  array (
    '9d31eb912c0fda687e069d5a55def0b62740cbd7' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/index.tpl',
      1 => 1467899124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57973bdff29af3_89741346 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<!-- include du slider -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['slider_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>



<!-- start of main content -->

<!-- start of tuto cosplay content -->

<div class="pdt10 pdb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtal">
			<h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['texte']->value[7];?>
</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>

<div class="row">
     <?php
$_from = $_smarty_tpl->tpl_vars['tuto_txt']->value;
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
          <div class="small-12 medium-6 large-3 columns">
               <a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tutoriel-ecrit/<?php echo $_smarty_tpl->tpl_vars['k']->value['id_tuto'];?>
">
                    <div class="tuto_txt_box resiseImg" style="background: url(<?php echo $_smarty_tpl->tpl_vars['k']->value['image'];?>
) no-repeat center center">
                         <div class="text_tuto" id="myid-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                              <div class="trais mgt5 mgb5"></div>
                              <div class="txtac mgt10 mgb10"><?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
</div>
                              <div class="hide_preview"><?php echo $_smarty_tpl->tpl_vars['k']->value['intro'];?>
</div>
                         </div>
                    </div>
               </a>
               <div class="show-for-medium-down pdt20 pdb20"></div>
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

<div class="mgt10 mgb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtal">
			<h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['texte']->value[9];?>
</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>
<!-- ligne vente cosplay -->


<div class="row">
     <?php
$_from = $_smarty_tpl->tpl_vars['vente_cos']->value;
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
          <div class="small-12 medium-6 large-3 columns">
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

<div class="mgt10 mgb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtal">
			<h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['texte']->value[11];?>
</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>
<!-- ligne location cosplay -->

<div class="row">
     <?php
$_from = $_smarty_tpl->tpl_vars['loca_cos']->value;
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
          <div class="small-12 medium-6 large-3 columns">
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

<div class="row" data-equalizer>
     <div class="small-12 medium-6 columns">
          <div class="txtal mgt20 mgb20"><h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['texte']->value[10];?>
</span></h1></div>
          <div class="EventBox" data-equalizer-watch>
               <?php
$_from = $_smarty_tpl->tpl_vars['event']->value;
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/evenement/<?php echo $_smarty_tpl->tpl_vars['k']->value['event_id'];?>
">
                         <div class="row">
                              <div class="small-12 large-6 columns">
                                   <div class="fs18px mgr5 mgl15 pdb8 pdt8 txtal lh20 pneutre c1"><?php echo $_smarty_tpl->tpl_vars['k']->value['date'];?>
</div>
                              </div>
                              <div class="small-12 large-6 columns">
                                   <div class="fs18px mgr5 mgl15 pdr4 pdt8 txtal lh20 pneutre c1"><?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
</div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="small-12 columns">
                                   <div class="fs15px mgr5 mgl10 txtaj lh15 pneutre pdb8 c1"><?php echo $_smarty_tpl->tpl_vars['k']->value['contenu'];?>
</div>
                              </div>
                         </div>
                    </a>
                    <div class="row"><div class="small-12 columns"><div class="TraitOrange"></div></div></div>
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
                <div class="pdt5 pdb5"></div>
          </div>
     </div>
     <div class="small-12 medium-6 columns">
          <div class="txtal mgt20 mgb20"><h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['texte']->value[8];?>
</span></h1></div>
          <div class="EventBox" data-equalizer-watch>
               <?php
$_from = $_smarty_tpl->tpl_vars['actu']->value;
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/news/<?php echo $_smarty_tpl->tpl_vars['k']->value['id_actu'];?>
">
                         <div class="row">
                              <div class="small-12 large-6 columns">
                                   <div class="fs18px mgr5 mgl15 pdb8 pdt8 txtal lh20 pneutre c1"><?php echo $_smarty_tpl->tpl_vars['k']->value['date'];?>
</div>
                              </div>
                              <div class="small-12 large-6 columns">
                                   <div class="fs18px mgr5 mgl15 pdr4 pdt8 txtal lh20 pneutre c1"><?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
</div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="small-12 columns">
                                   <div class="fs15px mgr10 mgl10 txtaj lh15 pneutre pdb8 c1"><?php echo $_smarty_tpl->tpl_vars['k']->value['accroche'];?>
</div>
                              </div>
                         </div>
                    </a>
                    <div class="row"><div class="small-12 columns"><div class="TraitOrange"></div></div></div>
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
     </div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
