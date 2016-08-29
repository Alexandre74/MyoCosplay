<?php
/* Smarty version 3.1.29, created on 2016-07-28 10:42:57
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/tuto_video_form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5799e1b1348f57_36818189',
  'file_dependency' => 
  array (
    'a081649c0dabe33cb0c7334e4e85d79c144e579d' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/tuto_video_form.tpl',
      1 => 1467905917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5799e1b1348f57_36818189 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div class="pdt20 pdb20">
<div class="row">
	<div class="small-12 columns">
		<div class="txtac fs25px">
			<h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['texte']->value[60];?>
</span></h1>
		</div>
	</div>
</div>

<div class="mgt30 mgb30">
</div>

<div class="row">
    <div class="small-12 columns ">
        <div class="">
			<form method="post" enctype="multipart/form-data">
                <div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="titre"> <?php echo $_smarty_tpl->tpl_vars['texte']->value[12];?>
 </label>
                        <input type="text" name="titre" required />
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="nom_manga"> <?php echo $_smarty_tpl->tpl_vars['texte']->value[13];?>
 </label>
                        <input type="text" name="nom_manga" required />
                    </div>
                </div>
				<div class="row">
					<div class="small-12 medium-6 columns">
                        <label class="c1" for="nom_perso"> <?php echo $_smarty_tpl->tpl_vars['texte']->value[14];?>
 </label>
                        <input type="text" name="nom_perso" required />
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="video"> <?php echo $_smarty_tpl->tpl_vars['texte']->value[59];?>
 </label>
						<input type="text" name="video" required />
                    </div>
                </div>
				<div class="mgt15 mgb15">
				</div>
				<div class="row">
                    <div class="medium-6 columns">
                        <input class="btn_blanc" type="submit" value="envoyer" />
                    </div>
                </div>
				<div class="mgt15 mgb15">
				</div>
			</form>
			
		</div>
    </div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
