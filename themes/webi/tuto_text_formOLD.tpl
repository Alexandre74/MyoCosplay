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
			<form method="post" enctype="multipart/form-data">
				<div class="row">   
					<div class="small-12 medium-6 columns">
						<label class="c1 txtar" for="fileToUpload">{$texte[46]}</label>
					</div>
					<div class="small-12 medium-6 columns">
						<input type="file" name="fileToUpload" id="fileToUpload" required />
					</div>
				</div>
                <div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="titre"> {$texte[12]} </label>
                        <input type="text" name="titre" required />
                    </div>
                </div>
				<div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="nom_manga"> {$texte[13]} </label>
						<select name="serie" onchange="addmanga(this.value);">
							<option value="create" class="c10">{$texte[82]}</option>
							{foreach from=$serie key=i item=k}
								<option value="{$k['titre']}" class="c10">{$k['titre']}</option>	
							{/foreach}	
						</select>
                       <!-- <input type="text" name="nom_manga" required />-->
                    </div>
					<div class="small-12 medium-6 columns">
						<div id="monDiv_create" style="display: block">
							 <label class="c1" for="titreserie"> {$texte[102]} </label>
							 <input type="text" name="titreserie"/>
						</div>
					</div>
				</div>
				<div id="mondiv_create" style="display: block">
					<div class="row">
						<div class="small-12 columns">
							<label class="c1" for="descriptionserie"> {$texte[102]} </label>
							<input type="text" name="descriptionserie"/>
						</div>
					</div>
					<div class="row">   
						<div class="small-12 medium-6 columns">
							<label class="c1 txtar" for="serieimageupload">{$texte[103]}</label>
						</div>
						<div class="small-12 medium-6 columns">
							<input type="file" name="serieimageupload" id="serieimageupload" required />
						</div>
					</div>
				</div>
				
				<div class="row"> 
					<div class="small-12 medium-6 columns">
                        <label class="c1" for="nom_perso"> {$texte[14]} </label>
						<select name="perso"  onchange="addperso(this.value);">
							<option value="persocreate" class="c10">{$texte[83]}</option>
							{foreach from=$perso key=i item=k}
								<option value="{$k['titre']}" class="c10">{$k['titre']}</option>
							{/foreach}	
						</select>
						
                       <!-- <input type="text" name="nom_perso" required />-->
                    </div>
					<div class="small-12 medium-6 columns">
						<div id="monDiv_persocreate" style="display: block">
							 <label class="c1" for="newnomperso"> {$texte[104]} </label>
							 <input type="text" name="newnomperso"/>
						</div>
					</div>
                </div>
				<div id="mondiv_persocreate" style="display: block">
					<div class="row">
						<div class="small-12 medium-6 columns">
							<label class="c1" for="sexe"> {$texte[105]} </label>
							<input type="text" name="sexe"/>
						</div>
						<div class="small-12 medium-6 columns">
							<label class="c1" for="stature"> {$texte[106]} </label>
							<input type="text" name="stature"/>
						</div>
					</div>
					<div class="row">
						<div class="small-12 medium-6 columns">
							<label class="c1" for="poids"> {$texte[107]} </label>
							<input type="text" name="poids"/>
						</div>
						<div class="small-12 medium-6 columns">
							<label class="c1" for="tour_de_tete"> {$texte[108]} </label>
							<input type="text" name="tour_de_tete"/>
						</div>
					</div>
					<div class="row">
						<div class="small-12 medium-6 columns">
							<label class="c1" for="tour_de_cou"> {$texte[109]} </label>
							<input type="text" name="tour_de_cou"/>
						</div>
						<div class="small-12 medium-6 columns">
							<label class="c1" for="tour_de_poitrine"> {$texte[110]} </label>
							<input type="text" name="tour_de_poitrine"/>
						</div>
					</div>
					<div class="row">
						<div class="small-12 medium-6 columns">
							<label class="c1" for="tour_de_taille"> {$texte[111]} </label>
							<input type="text" name="tour_de_taille"/>
						</div>
						<div class="small-12 medium-6 columns">
							<label class="c1" for="tour_des_hanches"> {$texte[112]} </label>
							<input type="text" name="tour_des_hanches"/>
						</div>
					</div>
					<div class="row">
						<div class="small-12 medium-6 columns">
							<label class="c1" for="tour_de_cuisse"> {$texte[113]} </label>
							<input type="text" name="tour_de_cuisse"/>
						</div>
						<div class="small-12 medium-6 columns">
							<label class="c1" for="tour_de_cheville"> {$texte[114]} </label>
							<input type="text" name="tour_de_cheville"/>
						</div>
					</div>
					<div class="row">
						<div class="small-12 medium-6 columns">
							<label class="c1" for="largeur_epaules"> {$texte[115]} </label>
							<input type="text" name="largeur_epaules"/>
						</div>
						<div class="small-12 medium-6 columns">
							<label class="c1" for="manches"> {$texte[116]} </label>
							<input type="text" name="manches"/>
						</div>
					</div>
					<div class="row">
						<div class="small-12 medium-6 columns">
							<label class="c1" for="tour_de_bicep"> {$texte[117]} </label>
							<input type="text" name="tour_de_bicep"/>
						</div>
						<div class="small-12 medium-6 columns">
							<label class="c1" for="tour_de_poignet"> {$texte[118]} </label>
							<input type="text" name="tour_de_poignet"/>
						</div>
					</div>
					<div class="row">
						<div class="small-12 medium-6 columns">
							<label class="c1" for="longueur_de_jambe"> {$texte[119]} </label>
							<input type="text" name="longueur_de_jambe"/>
						</div>
						<div class="small-12 medium-6 columns">
							<label class="c1" for="longueur_du_pied"> {$texte[120]} </label>
							<input type="text" name="longueur_du_pied"/>
						</div>
					</div>
					<div class="row">   
						<div class="small-12 medium-6 columns">
							<label class="c1 txtar" for="persoimageupload">{$texte[121]}</label>
						</div>
						<div class="small-12 medium-6 columns">
							<input type="file" name="persoimageupload" id="persoimageupload" required />
						</div>
					</div>
				</div>
				
				<div class="row">   
                    <div class="small-12 columns">
                        <label class="c1" for="intro">{$texte[84]}</label>
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
                        <input class="btn_blanc" type="submit" value="envoyer" />
                    </div>
                </div>
				<div class="mgt15 mgb15">
				</div>
			</form>
			
		</div>
    </div>
</div>

{literal}
<script>
 function addmanga(valeur) {
	if (valeur == "create") {
		document.getElementById("monDiv_"+valeur).style.display = "block";
		document.getElementById("mondiv_"+valeur).style.display = "block";
	}
	else {
		document.getElementById("monDiv_create").style.display = "none";
		document.getElementById("mondiv_create").style.display = "none";
	}
  }
  
  function addperso(valeur) {
	if (valeur == "persocreate") {
		document.getElementById("monDiv_"+valeur).style.display = "block";
		document.getElementById("mondiv_"+valeur).style.display = "block";
	}
	else {
		document.getElementById("monDiv_persocreate").style.display = "none";
		document.getElementById("mondiv_persocreate").style.display = "none";
	}
  }
  
</script>
{/literal}

{include file="$footer_tpl"}