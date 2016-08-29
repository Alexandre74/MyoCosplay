<?php
/* Smarty version 3.1.29, created on 2016-08-29 08:09:36
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/tuto_video.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c3edc0ca68c8_98833752',
  'file_dependency' => 
  array (
    '0b117846fc67fd8eb8b616c0fdf45cc22f88ef54' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/tuto_video.tpl',
      1 => 1470392842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c3edc0ca68c8_98833752 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<div class="row">
	<div class="small-12 columns">
		<div class="txtac">Tutoriel vidéo</div>
	</div>
</div>
<div class="mgt15 mgb15">
</div>
<div class="row">
	<div class="small-12 columns ">
		<div class="row">
			<div>
				<div class="small-12 columns">
					<iframe src="<?php echo $_smarty_tpl->tpl_vars['tuto_video']->value['video'];?>
" width="320" height="200"></iframe>
					<div>Nom du manga : <br /><?php echo $_smarty_tpl->tpl_vars['tuto_video']->value['titre_manga'];?>
</div>
					<div>Nom du personnage : <br /><?php echo $_smarty_tpl->tpl_vars['tuto_video']->value['nom_perso'];?>
</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
