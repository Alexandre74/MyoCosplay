<?php
/* Smarty version 3.1.29, created on 2016-07-09 13:15:06
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/inscription.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5780f8da5773e5_89606841',
  'file_dependency' => 
  array (
    '8f61954d44fee5571eb80018d26dfd5fac2b0903' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/inscription.tpl',
      1 => 1467905325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5780f8da5773e5_89606841 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>



<div class="pdt10 pdb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtac fs25px">
			<h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['texte']->value[58];?>
</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>

<div class="row">
    <div class="small-12 columns ">
        <div class="">
			<form method="post">
                <div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Nom">
							<span><?php echo $_smarty_tpl->tpl_vars['texte']->value[5];?>
</span>
							<input type="text" name="Nom" required />
						</label>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Prenom">
							<span><?php echo $_smarty_tpl->tpl_vars['texte']->value[6];?>
</span>
							<input type="text" name="Prenom" required />
						</label>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Email">
							<span><?php echo $_smarty_tpl->tpl_vars['texte']->value[3];?>
</span>
							<input type="email" name="Email" required />
						</label>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Email">
							<span><?php echo $_smarty_tpl->tpl_vars['texte']->value[55];?>
</span>
							<input type="email" name="ConfirmEmail" />
						</label>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Pass">
							<span><?php echo $_smarty_tpl->tpl_vars['texte']->value[2];?>
</span>
							<input type="password" name="Pass" required />
						</label>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="ConfirmPass">
							<span><?php echo $_smarty_tpl->tpl_vars['texte']->value[56];?>
</span>
							<input type="password" name="ConfirmPass" />
						</label>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns">
                        <label class="c1">
							<span><?php echo $_smarty_tpl->tpl_vars['texte']->value[4];?>
</span>
                            <input type="text" placeholder="ex: 0612xxxx25" name="Telephone" />
                        </label>
                    </div>
					<div class="medium-6 columns">
						<label class="c1">
							<span><?php echo $_smarty_tpl->tpl_vars['texte']->value[51];?>
</span>
							<input type="text" name="Pseudo" required />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="medium-6 columns">
                        <div class="g-recaptcha" data-sitekey="6LfYoxETAAAAAIMVQNXxpr2qSR_puOgyT3heqlH8"></div>
                    </div>
					<div class="espaceMobile">&nbsp;</div>
                    <div class="medium-6 columns">
                        <input class="btn_blanc" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['texte']->value[57];?>
" />
                    </div>
                </div>
			</form>
			
		</div>
    </div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
