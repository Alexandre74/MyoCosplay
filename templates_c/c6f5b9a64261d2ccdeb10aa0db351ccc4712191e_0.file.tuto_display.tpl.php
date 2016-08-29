<?php
/* Smarty version 3.1.29, created on 2016-08-03 13:09:32
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/tuto_display.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a1ed0cbb06b0_81876774',
  'file_dependency' => 
  array (
    'c6f5b9a64261d2ccdeb10aa0db351ccc4712191e' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/tuto_display.tpl',
      1 => 1470227024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a1ed0cbb06b0_81876774 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<div class="row">
	<div class="small-12 columns">
		<div class="txtac pdt15 pdb15"><h1><?php echo $_smarty_tpl->tpl_vars['tuto']->value['titre'];?>
</h1></div>
	</div>
</div>
<div class="mgt15 mgb15">
</div>
<div class="row">
	<div class="small-12 columns ">
		<div class="row">
			<div class="small-12 medium-3 columns ">
				<div>
					<div class="tuto_txt_box resiseImg" style="background: url(<?php echo $_smarty_tpl->tpl_vars['tuto']->value['image'];?>
) no-repeat center center"></div>
					<div class="pdt10 pdb10"></div>
					<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[13];?>
 <?php echo $_smarty_tpl->tpl_vars['tuto']->value['titre_manga'];?>
</label>
					<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[13];?>
 <?php echo $_smarty_tpl->tpl_vars['tuto']->value['nom_perso'];?>
</label>
					<?php if (isset($_SESSION['pseudo'])) {?>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[66];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['taille'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[67];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['poids'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[65];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['tour_de_tete'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[68];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['tour_de_cou'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[70];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['tour_de_taille'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[79];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['longueur_du_pied'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[73];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['tour_de_cheville'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[69];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['tour_de_poitrine'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[78];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['jambes_exterieures'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[71];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['tour_des_hanches'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[74];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['largeur_depaules'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[75];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['longeur_des_manches'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[76];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['tour_de_bicep'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[77];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['tour_de_poignet'];?>
</label>
						<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[72];?>
 <?php echo $_smarty_tpl->tpl_vars['algo']->value['tour_de_cuisse'];?>
</label>
					<?php }?>
				</div>
			</div>
			<div class="small-12 medium-9 columns ">
				<div>
					<div align="justify"><?php echo $_smarty_tpl->tpl_vars['tuto']->value['contenu'];?>
</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 medium-6 columns">
				<div class="txtal ngt10 mgb10">
					<?php if (isset($_SESSION['pseudo'])) {?>
						<?php ob_start();
echo $_smarty_tpl->tpl_vars['tuto']->value["id_user"];
$_tmp1=ob_get_clean();
if ($_SESSION['id'] == $_tmp1) {?>
							<!--<input class="btn_blanc popup-button" type="submit" value="modifier" />-->
							<button class="popup-button btn_blanc" data-modal="popupdel">supprimer</button>
						<?php }?>
					<?php }?>
				</div>
			</div>
			<div class="small-12 medium-6 columns">
				<div class="txtar ngt10 mgb10">
					<?php if (isset($_SESSION['pseudo'])) {?>
						<?php ob_start();
echo $_smarty_tpl->tpl_vars['tuto']->value["id_user"];
$_tmp2=ob_get_clean();
if ($_SESSION['id'] == $_tmp2) {?>
							<!--<input class="btn_blanc popup-button" type="submit" value="modifier" />-->
							<button class="popup-button btn_blanc" data-modal="popup">modifier</button>
						<?php }?>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- LE CONTENU DE LA POPUP -->

<div class="modal blur-effect" id="popup">
	<div class="popup-content">
		<div>
			<p class="para"><?php echo $_smarty_tpl->tpl_vars['texte']->value[122];?>
</p>
			<form method="post">
				<div><input type="text" name="titre_mod" value="<?php echo $_smarty_tpl->tpl_vars['tuto']->value['titre'];?>
"/></div>
				<div><textarea name="description_mod" rows="5" style="resize:none"><?php echo $_smarty_tpl->tpl_vars['tuto']->value['description'];?>
</textarea></div>
				<div><textarea name="contenu_mod" id="editor1" rows="20" cols="80" ><?php echo $_smarty_tpl->tpl_vars['tuto']->value['contenu'];?>
</textarea></div>
				<div class="pdt10 pdb10"></div>
				<input type="submit" name="valide" class="btn_blanc" value="<?php echo $_smarty_tpl->tpl_vars['texte']->value[98];?>
" />
			</form>
			<div class="close"></div>
		</div>
	</div>
</div>

<!-- FIN DE LA POPUP -->


<!-- LE CONTENU DE LA POPUP -->

<div class="modal blur-effect" id="popupdel">
	<div class="popup-content">
		<div>
			<div>Attention si vous cliquez sur valider votre tutoriel sera complettement efface, il ne sera pas possible de le recuperer</div>
			<form method="post">
				<input type="submit" name="valide" class="btn_blanc" value="<?php echo $_smarty_tpl->tpl_vars['texte']->value[98];?>
" />
			</form>
			<div class="close"></div>
		</div>
	</div>
</div>

<!-- FIN DE LA POPUP -->

<div class="overlay"></div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/js/popup.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace( 'editor1',
	{   toolbar:'Perso'    } 
	);
<?php echo '</script'; ?>
>


<!--
<?php echo '<script'; ?>
>
	// this is important for IEs
	var polyfilter_scriptpath = '/inc/js/';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/js/cssParser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/js/css-filters-polyfill.min.js"><?php echo '</script'; ?>
>-->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
