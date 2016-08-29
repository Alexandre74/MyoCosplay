<?php
/* Smarty version 3.1.29, created on 2016-07-26 10:31:13
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/connexion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57973bf1617364_71767844',
  'file_dependency' => 
  array (
    'c7aec8033229cca65e74436624eb9738c21fe76f' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/connexion.tpl',
      1 => 1467904300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57973bf1617364_71767844 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<div class="pdt10 pdb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtac fs25px">
			<h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['texte']->value[48];?>
</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>
<div class="row">
	<div class="small-12 columns">
        <div class="">
			<form method="post">
				<div class="row">
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Login"><?php echo $_smarty_tpl->tpl_vars['texte']->value[51];?>
</label>
                        <input type="text" name="Login" required />
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Password"><?php echo $_smarty_tpl->tpl_vars['texte']->value[52];?>
</label>
                        <input type="password" name="Password" required />
                    </div>
                </div>
				<div class="row">
                    <div class="medium-6 columns">
						<div class="pdt10 pdb10"></div>
                        <input class="btn_blanc" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['texte']->value[54];?>
" />
                    </div>
					
					<div class="medium-6 columns">
						<div class="pdt10 pdb10"></div>
                        <a class="c1" href="/password-forgotten"><?php echo $_smarty_tpl->tpl_vars['texte']->value[53];?>
</a>
                    </div>
                </div>
			</form>
		</div>
    </div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
