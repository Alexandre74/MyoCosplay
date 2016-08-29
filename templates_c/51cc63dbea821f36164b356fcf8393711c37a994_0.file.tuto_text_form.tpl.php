<?php
/* Smarty version 3.1.29, created on 2016-08-20 13:48:52
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/tuto_text_form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57b85fc46eeeb5_53316447',
  'file_dependency' => 
  array (
    '51cc63dbea821f36164b356fcf8393711c37a994' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/tuto_text_form.tpl',
      1 => 1471700928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57b85fc46eeeb5_53316447 ($_smarty_tpl) {
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
			<div class="row">   
					<div class="small-12 medium-6 columns">
						<label class="c1 txtar pdt10 pdb10">Si votre manga n'est pas dans la liste, ajouter le ici</label>
					</div>
					<div class="small-12 medium-6 columns">
						<button class="popup-button btn_blanc" data-modal="popup">Ajouter</button>
					</div>
				</div>
			<form method="post" enctype="multipart/form-data">
				<div class="row">   
					<div class="small-12 medium-6 columns">
						<label class="c1 txtar pdt10 pdb10" for="fileToUpload"><?php echo $_smarty_tpl->tpl_vars['texte']->value[46];?>
</label>
					</div>
					<div class="small-12 medium-6 columns">
						<input type="file" name="fileToUpload" id="fileToUpload" required />
					</div>
				</div>
                <div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1 pdt10 pdb10" for="titre"> <?php echo $_smarty_tpl->tpl_vars['texte']->value[12];?>
 </label>
                        <input type="text" name="titre" required />
                    </div>
                </div>
				<div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1 pdt10 pdb10" for="nom_manga"> <?php echo $_smarty_tpl->tpl_vars['texte']->value[13];?>
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
                        <label class="c1 pdt10 pdb10" for="nom_perso"> <?php echo $_smarty_tpl->tpl_vars['texte']->value[14];?>
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
						
                       
                    </div>
                </div>
				<div class="row">   
                    <div class="small-12 medium-12 columns">
                        <label class="c1 pdt10 pdb10" for="description"><?php echo $_smarty_tpl->tpl_vars['texte']->value[123];?>
</label>
                        <textarea name="description" rows="10" style="resize:none" placeholder="<?php echo $_smarty_tpl->tpl_vars['texte']->value[125];?>
"></textarea>
                    </div>
                </div>
				<div class="row">
					<div class="small-12 medium-12 columns">
						<div class="pdt10 pdb10"><?php echo $_smarty_tpl->tpl_vars['texte']->value[126];?>
</div>
						<textarea name="editor1" id="editor1" rows="20" cols="80" ></textarea>
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
                        <input class="btn_blanc" type="submit" value="envoyer" id="envoyer" />
                    </div>
                </div>
				<div class="mgt15 mgb15">
				</div>
			</form>
		</div>
    </div>
</div>

<!-- LE CONTENU DE LA POPUP -->

<div class="modal blur-effect" id="popup">
	<div class="popup-content">
		<div>
			<p class="para">Ajout d'une nouvelle série</p>
			<form method="post" enctype="multipart/form-data">
				<div><label class="c1">Image :</label><input type="file" name="picture" id="picture" required /></div>
				<div><label class="c1">Titre :</label><input type="text" id="serie_title" required /></div>
				<div><label class="c1">Description :</label><input type="text" id="serie_description" required /></div>
				<div class="pdt10 pdb10"></div>
				<input type="submit" name="valide" class="btn_blanc" value="<?php echo $_smarty_tpl->tpl_vars['texte']->value[98];?>
" />
			</form>
			<div class="close"></div>
		</div>
	</div>
</div>

<!-- FIN DE LA POPUP -->


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/js/popup.min.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
