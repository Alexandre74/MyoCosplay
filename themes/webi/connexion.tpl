{include file="$header_tpl"}

<div class="pdt10 pdb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtac fs25px">
			<h1><span class="SouligneOrange">{$texte[48]}</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>
<div class="row">
	<div class="small-12 columns">
        <div class="">
			<form method="post">
				<div class="row">
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Login">{$texte[51]}</label>
                        <input type="text" name="Login" required />
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label class="c1" for="Password">{$texte[52]}</label>
                        <input type="password" name="Password" required />
                    </div>
                </div>
				<div class="row">
                    <div class="medium-6 columns">
						<div class="pdt10 pdb10"></div>
                        <input class="btn_blanc" type="submit" value="{$texte[54]}" />
                    </div>
					
					<div class="medium-6 columns">
						<div class="pdt10 pdb10"></div>
                        <a class="c1" href="/password-forgotten">{$texte[53]}</a>
                    </div>
                </div>
			</form>
		</div>
    </div>
</div>

{include file="$footer_tpl"}