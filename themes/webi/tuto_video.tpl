{include file="$header_tpl"}

<div class="row">
	<div class="small-12 columns">
		<div class="txtac">Tutoriel vidéo</div>
	</div>
</div>
<div class="mgt15 mgb15">
</div>
<div class="row">
	<div class="small-12 columns ">
		<div class="row">
			<div>
				<div class="small-12 columns">
					<iframe src="{$tuto_video['video']}" width="320" height="200"></iframe>
					<div>Nom du manga : <br />{$tuto_video['titre_manga']}</div>
					<div>Nom du personnage : <br />{$tuto_video['nom_perso']}</div>
				</div>
			</div>
		</div>
	</div>
</div>


{include file="$footer_tpl"}