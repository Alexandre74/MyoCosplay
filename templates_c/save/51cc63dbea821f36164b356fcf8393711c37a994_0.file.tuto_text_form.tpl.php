<?php
/* Smarty version 3.1.29, created on 2016-07-09 13:00:10
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/tuto_text_form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5780f55a1d2fc4_50048304',
  'file_dependency' => 
  array (
    '51cc63dbea821f36164b356fcf8393711c37a994' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/tuto_text_form.tpl',
      1 => 1468063385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5780f55a1d2fc4_50048304 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<div class="pdt10 pdb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtac fs25px">
			<h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['texte']->value[45];?>
</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>
<div class="row">
    <div class="small-12 columns ">
        <div class="">
			<form method="post" enctype="multipart/form-data">
				<div class="row">   
					<div class="small-12 medium-6 columns">
						<label class="c1 txtar" for="fileToUpload"><?php echo $_smarty_tpl->tpl_vars['texte']->value[46];?>
</label>
					</div>
					<div class="small-12 medium-6 columns">
						<input type="file" name="fileToUpload" id="fileToUpload" required />
					</div>
				</div>
                <div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="titre"> <?php echo $_smarty_tpl->tpl_vars['texte']->value[12];?>
 </label>
                        <input type="text" name="titre" required />
                    </div>
                </div>
				<div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="nom_manga"> <?php echo $_smarty_tpl->tpl_vars['texte']->value[13];?>
 </label>
						<select name="serie">
							<option value="" class="c10"><?php echo $_smarty_tpl->tpl_vars['texte']->value[82];?>
</option>
							<?php
$_from = $_smarty_tpl->tpl_vars['serie']->value;
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
								<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
" class="c10"><?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
</option>	
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
						</select>
						
						
                       <!-- <input type="text" name="nom_manga" required />-->
                    </div>
					<div class="small-12 medium-6 columns">
                        <label class="c1" for="nom_perso"> <?php echo $_smarty_tpl->tpl_vars['texte']->value[14];?>
 </label>
						<select name="perso">
							<option value="" class="c10"><?php echo $_smarty_tpl->tpl_vars['texte']->value[83];?>
</option>
							<?php
$_from = $_smarty_tpl->tpl_vars['perso']->value;
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
								<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
" class="c10"><?php echo $_smarty_tpl->tpl_vars['k']->value['titre'];?>
</option>
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
						</select>
						
                       <!-- <input type="text" name="nom_perso" required />-->
                    </div>
                </div>
				<div class="row">   
                    <div class="small-12 columns">
                        <label class="c1" for="intro"><?php echo $_smarty_tpl->tpl_vars['texte']->value[84];?>
</label>
                        <input type="text" name="intro" required />
                    </div>
                </div>
				<div class="row">   
                    <div class="small-12 medium-12 columns">
                        <label class="c1" for="description"> Description </label>
                        <textarea name="description" rows="10" style="resize:none">
						Write a short description of your tutorial.
						</textarea>
                    </div>
                </div>
				<div class="row">
					<div class="small-12 medium-12 columns">
						<textarea name="editor1" id="editor1" rows="20" cols="80">
						Edit here your tutorial.
						</textarea>
						<?php echo '<script'; ?>
>
						// Replace the <textarea id="editor1"> with a CKEditor
						// instance, using default configuration.
						CKEDITOR.replace( 'editor1',
						{   toolbar:'Perso'    } 
						);
						<?php echo '</script'; ?>
>
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
