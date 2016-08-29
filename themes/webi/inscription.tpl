{include file="$header_tpl"}


<div class="pdt10 pdb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtac fs25px">
			<h1><span class="SouligneOrange">{$texte[58]}</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>

<div class="row">
    <div class="small-12 columns ">
        <div class="">
			<form method="post">
                <div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Nom">
							<span>{$texte[5]}</span>
							<input type="text" name="Nom" required />
						</label>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Prenom">
							<span>{$texte[6]}</span>
							<input type="text" name="Prenom" required />
						</label>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Email">
							<span>{$texte[3]}</span>
							<input type="email" name="Email" required />
						</label>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Email">
							<span>{$texte[55]}</span>
							<input type="email" name="ConfirmEmail" />
						</label>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Pass">
							<span>{$texte[2]}</span>
							<input type="password" name="Pass" required />
						</label>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="ConfirmPass">
							<span>{$texte[56]}</span>
							<input type="password" name="ConfirmPass" />
						</label>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns">
                        <label class="c1">
							<span>{$texte[4]}</span>
                            <input type="text" placeholder="ex: 0612xxxx25" name="Telephone" />
                        </label>
                    </div>
					<div class="medium-6 columns">
						<label class="c1">
							<span>{$texte[51]}</span>
							<input type="text" name="Pseudo" required />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="medium-6 columns">
                        <div class="g-recaptcha" data-sitekey="6LfYoxETAAAAAIMVQNXxpr2qSR_puOgyT3heqlH8"></div>
                    </div>
					<div class="espaceMobile">&nbsp;</div>
                    <div class="medium-6 columns">
                        <input class="btn_blanc" type="submit" value="{$texte[57]}" />
                    </div>
                </div>
			</form>
			
		</div>
    </div>
</div>

{include file="$footer_tpl"}