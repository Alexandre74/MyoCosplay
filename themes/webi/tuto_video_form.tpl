{include file="$header_tpl"}
<div class="pdt20 pdb20">
<div class="row">
	<div class="small-12 columns">
		<div class="txtac fs25px">
			<h1><span class="SouligneOrange">{$texte[60]}</span></h1>
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
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="video"> {$texte[59]} </label>
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

{include file="$footer_tpl"}