<?php
/* Smarty version 3.1.29, created on 2016-07-09 13:38:36
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/faq.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5780fe5ca1d6b2_14364663',
  'file_dependency' => 
  array (
    'e969e085ee93689b1d629313fd654f61791c124d' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/faq.tpl',
      1 => 1467997814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5780fe5ca1d6b2_14364663 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<div class="pdt10 pdb10"></div>
<div class="row">
<div class="small-12 columns">
  <div class="txtac fs25px">
   <h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['block']->value[2]["titre"];?>
</span></h1>
  </div>
 </div>
</div>
<div class="pdt20 pdb20"></div>
<div class="row">
	<div class="small-12 columns">
		<div>
			<?php echo $_smarty_tpl->tpl_vars['block']->value[2]["contenu"];?>

		</div>
	</div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
