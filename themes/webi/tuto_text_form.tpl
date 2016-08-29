{include file="$header_tpl"}

<div class="pdt10 pdb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtac fs25px">
			<h1><span class="SouligneOrange">{$texte[45]}</span></h1>
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
						<label class="c1 txtar pdt10 pdb10" for="fileToUpload">{$texte[46]}</label>
					</div>
					<div class="small-12 medium-6 columns">
						<input type="file" name="fileToUpload" id="fileToUpload" required />
					</div>
				</div>
                <div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1 pdt10 pdb10" for="titre"> {$texte[12]} </label>
                        <input type="text" name="titre" required />
                    </div>
                </div>
				<div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1 pdt10 pdb10" for="nom_manga"> {$texte[13]} </label>
						<select name="serie">
							<option value="" class="c10">{$texte[82]}</option>
							{foreach from=$serie key=i item=k}
								<option value="{$k['titre']}" class="c10">{$k['titre']}</option>	
							{/foreach}	
						</select>
						
						
                       <!-- <input type="text" name="nom_manga" required />-->
                    </div>
					<div class="small-12 medium-6 columns">
                        <label class="c1 pdt10 pdb10" for="nom_perso"> {$texte[14]} </label>
						<select name="perso">
							<option value="" class="c10">{$texte[83]}</option>
							{foreach from=$perso key=i item=k}
								<option value="{$k['titre']}" class="c10">{$k['titre']}</option>
							{/foreach}	
						</select>
						
                       
                    </div>
                </div>
				<div class="row">   
                    <div class="small-12 medium-12 columns">
                        <label class="c1 pdt10 pdb10" for="description">{$texte[123]}</label>
                        <textarea name="description" rows="10" style="resize:none" placeholder="{$texte[125]}"></textarea>
                    </div>
                </div>
				<div class="row">
					<div class="small-12 medium-12 columns">
						<div class="pdt10 pdb10">{$texte[126]}</div>
						<textarea name="editor1" id="editor1" rows="20" cols="80" ></textarea>
						<script>
						// Replace the <textarea id="editor1"> with a CKEditor
						// instance, using default configuration.
						CKEDITOR.replace( 'editor1',
						{   toolbar:'Perso'    } 
						);
						</script>
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
				<input type="submit" name="valide" class="btn_blanc" value="{$texte[98]}" />
			</form>
			<div class="close"></div>
		</div>
	</div>
</div>

<!-- FIN DE LA POPUP -->


<script src="{$master_url}/inc/js/popup.min.js"></script>

{include file="$footer_tpl"}