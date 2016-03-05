{include file="$header_tpl"}

<div class="row">
	<div class="small-12 columns">
		<div class="txtac">Page d'inscription</div>
	</div>
</div>

<div class="row">
    <div class="small-12 columns ">
        <div class="">
			<form method="post">
                <div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Nom"> {$texte[5]} </label>
                        <input type="text" name="Nom" required />
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Prenom"> {$texte[6]} </label>
                        <input type="text" name="Prenom" required />
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Email"> {$texte[3]} </label>
                        <input type="email" name="Email" required />
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Email"> E-mail de confirmation</label>
                        <input type="email" name="ConfirmEmail" /> 
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Pass"> {$texte[2]} </label>
                        <input type="password" name="Pass" required />
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="ConfirmPass"> Mot de passe de confirmation</label>
                        <input type="password" name="ConfirmPass" />
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns">
                        <label class="c1"> {$texte[4]}
                            <input type="text" placeholder="ex: 0612xxxx25" name="Telephone" />
                        </label>
                    </div>
					<div class="medium-6 columns">
						<label class="c1"> Pseudo :
							<input type="text" name="Pseudo" required />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="medium-6 columns">
                        <div class="g-recaptcha" data-sitekey="6LfYoxETAAAAAIMVQNXxpr2qSR_puOgyT3heqlH8"></div>
                    </div>
                    <div class="medium-6 columns">
                        <input type="submit" value="envoyer" />
                    </div>
                </div>
			</form>
			
		</div>
    </div>
</div>

{include file="$footer_tpl"}