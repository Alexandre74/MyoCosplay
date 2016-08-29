<?php
/* Smarty version 3.1.29, created on 2016-07-09 13:30:34
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/password_forgotten.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5780fc7ae96628_58641348',
  'file_dependency' => 
  array (
    '0ad5c65120cc0e69c96ac49326e5c48e44444328' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/password_forgotten.tpl',
      1 => 1467031786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5780fc7ae96628_58641348 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<div class="row">
	<div class="small-12 columns">
		<div class="txtac">Mot de passe oublié</div>
	</div>
</div>

<div class="row">
	<div class="small-12 columns">
        <div class="">
			<form method="post">
				<div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Email"> Adresse e-mail : </label>
                        <input type="text" name="Email" required />
                    </div>
                </div>
				<div class="row">
                    <div class="medium-6 columns">
                        <input type="submit" value="Récupérer votre mot de passe" />
                    </div>
                </div>
			</form>
		</div>
    </div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
