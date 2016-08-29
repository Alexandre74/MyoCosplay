{include file="$header_tpl"}

<div class="row">
	<div class="small-12 columns">
		<div class="txtac">Mot de passe oublié</div>
	</div>
</div>

<div class="row">
	<div class="small-12 columns">
        <div class="">
			<form method="post">
				<div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Email"> Adresse e-mail : </label>
                        <input type="text" name="Email" required />
                    </div>
                </div>
				<div class="row">
                    <div class="medium-6 columns">
                        <input type="submit" value="Récupérer votre mot de passe" />
                    </div>
                </div>
			</form>
		</div>
    </div>
</div>

{include file="$footer_tpl"}