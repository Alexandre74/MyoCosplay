{include file="$header_tpl"}

<div class="row">
	<div class="small-12 columns">
		<div class="txtac pdt15 pdb15"><h1>{$tuto['titre']}</h1></div>
	</div>
</div>
<div class="mgt15 mgb15">
</div>
<div class="row">
	<div class="small-12 columns ">
		<div class="row">
			<div class="small-12 medium-3 columns ">
				<div>
					<div class="tuto_txt_box resiseImg" style="background: url({$tuto['image']}) no-repeat center center"></div>
					<div class="pdt10 pdb10"></div>
					<label class="c1">{$texte[13]} {$tuto['titre_manga']}</label>
					<label class="c1">{$texte[13]} {$tuto['nom_perso']}</label>
					{if isset($smarty.session.pseudo)}
						<label class="c1">{$texte[66]} {$algo['taille']}</label>
						<label class="c1">{$texte[67]} {$algo['poids']}</label>
						<label class="c1">{$texte[65]} {$algo['tour_de_tete']}</label>
						<label class="c1">{$texte[68]} {$algo['tour_de_cou']}</label>
						<label class="c1">{$texte[70]} {$algo['tour_de_taille']}</label>
						<label class="c1">{$texte[79]} {$algo['longueur_du_pied']}</label>
						<label class="c1">{$texte[73]} {$algo['tour_de_cheville']}</label>
						<label class="c1">{$texte[69]} {$algo['tour_de_poitrine']}</label>
						<label class="c1">{$texte[78]} {$algo['jambes_exterieures']}</label>
						<label class="c1">{$texte[71]} {$algo['tour_des_hanches']}</label>
						<label class="c1">{$texte[74]} {$algo['largeur_depaules']}</label>
						<label class="c1">{$texte[75]} {$algo['longeur_des_manches']}</label>
						<label class="c1">{$texte[76]} {$algo['tour_de_bicep']}</label>
						<label class="c1">{$texte[77]} {$algo['tour_de_poignet']}</label>
						<label class="c1">{$texte[72]} {$algo['tour_de_cuisse']}</label>
					{/if}
				</div>
			</div>
			<div class="small-12 medium-9 columns ">
				<div>
					<div align="justify">{$tuto['contenu']}</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 medium-6 columns">
				<div class="txtal ngt10 mgb10">
					{if isset($smarty.session.pseudo)}
						{if $smarty.session.id == {$tuto["id_user"]} }
							<!--<input class="btn_blanc popup-button" type="submit" value="modifier" />-->
							<button class="popup-button btn_blanc" data-modal="popupdel">supprimer</button>
						{/if}
					{/if}
				</div>
			</div>
			<div class="small-12 medium-6 columns">
				<div class="txtar ngt10 mgb10">
					{if isset($smarty.session.pseudo)}
						{if $smarty.session.id == {$tuto["id_user"]} }
							<!--<input class="btn_blanc popup-button" type="submit" value="modifier" />-->
							<button class="popup-button btn_blanc" data-modal="popup">modifier</button>
						{/if}
					{/if}
				</div>
			</div>
		</div>
	</div>
</div>


<!-- LE CONTENU DE LA POPUP -->

<div class="modal blur-effect" id="popup">
	<div class="popup-content">
		<div>
			<p class="para">{$texte[122]}</p>
			<form method="post">
				<div><input type="text" name="titre_mod" value="{$tuto['titre']}"/></div>
				<div><textarea name="description_mod" rows="5" style="resize:none">{$tuto['description']}</textarea></div>
				<div><textarea name="contenu_mod" id="editor1" rows="20" cols="80" >{$tuto['contenu']}</textarea></div>
				<div class="pdt10 pdb10"></div>
				<input type="submit" name="valide" class="btn_blanc" value="{$texte[98]}" />
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
				<input type="submit" name="delok" class="btn_blanc" value="{$texte[98]}" />
			</form>
			<div class="close"></div>
		</div>
	</div>
</div>

<!-- FIN DE LA POPUP -->

<div class="overlay"></div>

<script src="{$master_url}/inc/js/popup.min.js"></script>

<script>
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace( 'editor1',
	{   toolbar:'Perso'    } 
	);
</script>


<!--
<script>
	// this is important for IEs
	var polyfilter_scriptpath = '/inc/js/';
</script>
<script src="{$master_url}/inc/js/cssParser.min.js"></script>
<script src="{$master_url}/inc/js/css-filters-polyfill.min.js"></script>-->

{include file="$footer_tpl"}