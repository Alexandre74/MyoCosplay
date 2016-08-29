<?php
/* Smarty version 3.1.29, created on 2016-08-02 13:15:47
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/profile_user.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a09d03edb047_01616618',
  'file_dependency' => 
  array (
    '61e908b6661baee6473c6ff5df62aa2d982508c7' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/profile_user.tpl',
      1 => 1470143727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a09d03edb047_01616618 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<div class="pdt10 pdb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtac fs25px">
			<h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['texte']->value[85];?>
</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>
<div class="row">
	<div class="small-12 columns ">
		<div>
			<form method="post">
				<div class="row">
					<div class="small-12 medium-6 columns">
						<div>
							<label class="c1" for="nom"><?php echo $_smarty_tpl->tpl_vars['texte']->value[86];?>
</label>
							<label class="c1" for="nom"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["nom"];?>
 </label>
							<input class="HideMe" type="text" name="nom" id="nom" />
						</div>
					</div>
					<div class="small-12 medium-6 columns">
						<div>
							<label class="c1" for="prenom"><?php echo $_smarty_tpl->tpl_vars['texte']->value[87];?>
</label>
							<label class="c1" for="prenom"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["prenom"];?>
 </label>
							<input class="HideMe" type="text" name="prenom" id="prenom"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12 medium-6 columns">
						<div>
							<label class="c1" for="email"> Email : </label>
							<label class="c1" for="email"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["email"];?>
 </label>
							<input class="HideMe" type="text" name="email" id="email"/>
						</div>
					</div>
					<div class="small-12 medium-6 columns">
						<div>
							<label class="c1" for="telephone"><?php echo $_smarty_tpl->tpl_vars['texte']->value[88];?>
</label>
							<label class="c1" for="telephone"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["telephone"];?>
 </label>
							<input class="HideMe" type="text" name="telephone" id="telephone"/>
						</div>
					</div>
				</div>
				<div class="row">
						<div class="small-12 medium-6 columns">
							<div>
								<p class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[89];?>
</p>
								<div class="HideMe">
									<input type="checkbox" name="langue" value="Francais" /><label class="c1"> Francais </label>
									<input type="checkbox" name="langue" value="Anglais" /><label class="c1"> Anglais </label>
								</div>
							</div>
						</div>
						<div class="small-12 medium-3 columns">
							<div>
								<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[66];?>
</label>
								<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["taille"];?>
 </label>
								<input class="HideMe" type="text" name="taille" />
							</div>
						</div>
						<div class="small-12 medium-3 columns">
							<div>
								<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[67];?>
</label>
								<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["poids"];?>
 </label>
								<input class="HideMe" type="text" name="poids" />
							</div>
						</div>
				</div>
				<div class="row">
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[69];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["tour_de_poitrine"];?>
 </label>
							<input class="HideMe" type="text" name="tour_de_poitrine" />	
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[70];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["tour_de_taille"];?>
 </label>
							<input class="HideMe" type="text" name="tour_de_taille" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[71];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["tour_des_hanches"];?>
 </label>
							<input class="HideMe" type="text" name="tour_des_hanches" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[78];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["jambes_exterieures"];?>
 </label>
							<input class="HideMe" type="text" name="jambes_exterieures" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[74];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["largeur_depaules"];?>
 </label>
							<input class="HideMe" type="text" name="largeur_depaules" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[75];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["longeur_des_manches"];?>
 </label>
							<input class="HideMe" type="text" name="longeur_des_manches" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[73];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["tour_de_cheville"];?>
 </label>
							<input class="HideMe" type="text" name="tour_de_cheville" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[77];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["tour_de_poignet"];?>
 </label>
							<input class="HideMe" type="text" name="tour_de_poignet" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[65];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["tour_de_tete"];?>
 </label>
							<input class="HideMe" type="text" name="tour_de_tete" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[68];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["tour_de_cou"];?>
 </label>
							<input class="HideMe" type="text" name="tour_de_cou" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[72];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["tour_de_cuisse"];?>
 </label>
							<input class="HideMe" type="text" name="tour_de_cuisse" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[76];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["tour_de_bicep"];?>
 </label>
							<input class="HideMe" type="text" name="tour_de_bicep" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[79];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["longueur_du_pied"];?>
 </label>
							<input class="HideMe" type="text" name="longueur_du_pied" />
						</div>
					</div>
					<div class="small-6 medium-4 columns end">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[90];?>
</label>
							<label class="c1"> <?php echo $_smarty_tpl->tpl_vars['profile']->value["sexe"];?>
 </label>
							<select name="sexe" class="HideMe">
								<option value="Homme"><?php echo $_smarty_tpl->tpl_vars['texte']->value[91];?>
</option>
								<option value="Femme"><?php echo $_smarty_tpl->tpl_vars['texte']->value[92];?>
</option>
							</select>
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
				<div class="small-12 columns">
					<div class="txtac"><?php echo $_smarty_tpl->tpl_vars['texte']->value[93];?>
</div>
				</div>
				</div>
				<div class="mgt15 mgb15">
				</div>
				<div class="row">
					<div class="small-12 medium-6 large-4 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[94];?>
</label>
							<input class="HideMe" type="password" name="old_password" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12 medium-6 large-4 columns">
						<div>
							<label class="c1"><?php echo $_smarty_tpl->tpl_vars['texte']->value[95];?>
</label>
							<input class="HideMe" type="password" name="new_password" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12 medium-6 columns">
						<div>
							<button class="btn_blanc" id="button" type="button"><?php echo $_smarty_tpl->tpl_vars['texte']->value[97];?>
</button>
						</div>
					</div>
					<div class="small-12 medium-6 columns">
						<div>
							<input class="btn_blanc" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['texte']->value[98];?>
" name="valide" />
						</div>
					</div>
				</div>
				<?php echo '<script'; ?>
>
				$("#button").click( function()
			   {
				 $(".HideMe").attr('style', 'display: block !important');
			   }
			);
				<?php echo '</script'; ?>
>
			</div>
		</form>
	</div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
