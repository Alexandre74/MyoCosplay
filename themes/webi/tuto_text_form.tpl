{include file="$header_tpl"}

<div class="row">
	<div class="small-12 columns">
		<div class="txtac">Formulaire de création de tutoriels écrit</div>
	</div>
</div>

<div class="row">
    <div class="small-12 columns ">
        <div class="">
			<form method="post" enctype="multipart/form-data">
				Select image to upload:
				<input type="file" name="fileToUpload" id="fileToUpload">
				<input type="submit" value="Upload Image" name="submit">
			</form>
			<form method="post">
                <div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="titre"> {$texte[12]} </label>
                        <input type="text" name="titre" required />
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="nom_manga"> {$texte[13]} </label>
                        <input type="text" name="nom_manga" required />
                    </div>
                </div>
				<div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="nom_perso"> {$texte[14]} </label>
                        <input type="text" name="nom_perso" required />
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

{include file="$footer_tpl"}