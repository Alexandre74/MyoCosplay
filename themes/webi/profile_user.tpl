{include file="$header_tpl"}

<div class="pdt10 pdb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtac fs25px">
			<h1><span class="SouligneOrange">{$texte[85]}</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>
<div class="row">
	<div class="small-12 columns ">
		<div>
			<form method="post">
				<div class="row">
					<div class="small-12 medium-6 columns">
						<div>
							<label class="c1" for="nom">{$texte[86]}</label>
							<label class="c1" for="nom"> {$profile["nom"]} </label>
							<input class="HideMe" type="text" name="nom" id="nom" />
						</div>
					</div>
					<div class="small-12 medium-6 columns">
						<div>
							<label class="c1" for="prenom">{$texte[87]}</label>
							<label class="c1" for="prenom"> {$profile["prenom"]} </label>
							<input class="HideMe" type="text" name="prenom" id="prenom"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12 medium-6 columns">
						<div>
							<label class="c1" for="email"> Email : </label>
							<label class="c1" for="email"> {$profile["email"]} </label>
							<input class="HideMe" type="text" name="email" id="email"/>
						</div>
					</div>
					<div class="small-12 medium-6 columns">
						<div>
							<label class="c1" for="telephone">{$texte[88]}</label>
							<label class="c1" for="telephone"> {$profile["telephone"]} </label>
							<input class="HideMe" type="text" name="telephone" id="telephone"/>
						</div>
					</div>
				</div>
				<div class="row">
						<div class="small-12 medium-6 columns">
							<div>
								<p class="c1">{$texte[89]}</p>
								<div class="HideMe">
									<input type="checkbox" name="langue" value="Francais" /><label class="c1"> Francais </label>
									<input type="checkbox" name="langue" value="Anglais" /><label class="c1"> Anglais </label>
								</div>
							</div>
						</div>
						<div class="small-12 medium-3 columns">
							<div>
								<label class="c1">{$texte[66]}</label>
								<label class="c1"> {$profile["taille"]} </label>
								<input class="HideMe" type="text" name="taille" />
							</div>
						</div>
						<div class="small-12 medium-3 columns">
							<div>
								<label class="c1">{$texte[67]}</label>
								<label class="c1"> {$profile["poids"]} </label>
								<input class="HideMe" type="text" name="poids" />
							</div>
						</div>
				</div>
				<div class="row">
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[69]}</label>
							<label class="c1"> {$profile["tour_de_poitrine"]} </label>
							<input class="HideMe" type="text" name="tour_de_poitrine" />	
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[70]}</label>
							<label class="c1"> {$profile["tour_de_taille"]} </label>
							<input class="HideMe" type="text" name="tour_de_taille" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[71]}</label>
							<label class="c1"> {$profile["tour_des_hanches"]} </label>
							<input class="HideMe" type="text" name="tour_des_hanches" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[78]}</label>
							<label class="c1"> {$profile["jambes_exterieures"]} </label>
							<input class="HideMe" type="text" name="jambes_exterieures" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[74]}</label>
							<label class="c1"> {$profile["largeur_depaules"]} </label>
							<input class="HideMe" type="text" name="largeur_depaules" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[75]}</label>
							<label class="c1"> {$profile["longeur_des_manches"]} </label>
							<input class="HideMe" type="text" name="longeur_des_manches" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[73]}</label>
							<label class="c1"> {$profile["tour_de_cheville"]} </label>
							<input class="HideMe" type="text" name="tour_de_cheville" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[77]}</label>
							<label class="c1"> {$profile["tour_de_poignet"]} </label>
							<input class="HideMe" type="text" name="tour_de_poignet" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[65]}</label>
							<label class="c1"> {$profile["tour_de_tete"]} </label>
							<input class="HideMe" type="text" name="tour_de_tete" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[68]}</label>
							<label class="c1"> {$profile["tour_de_cou"]} </label>
							<input class="HideMe" type="text" name="tour_de_cou" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[72]}</label>
							<label class="c1"> {$profile["tour_de_cuisse"]} </label>
							<input class="HideMe" type="text" name="tour_de_cuisse" />
						</div>
					</div>
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[76]}</label>
							<label class="c1"> {$profile["tour_de_bicep"]} </label>
							<input class="HideMe" type="text" name="tour_de_bicep" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-6 medium-4 large-3 columns">
						<div>
							<label class="c1">{$texte[79]}</label>
							<label class="c1"> {$profile["longueur_du_pied"]} </label>
							<input class="HideMe" type="text" name="longueur_du_pied" />
						</div>
					</div>
					<div class="small-6 medium-4 columns end">
						<div>
							<label class="c1">{$texte[90]}</label>
							<label class="c1"> {$profile["sexe"]} </label>
							<select name="sexe" class="HideMe">
								<option value="Homme">{$texte[91]}</option>
								<option value="Femme">{$texte[92]}</option>
							</select>
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
				<div class="small-12 columns">
					<div class="txtac">{$texte[93]}</div>
				</div>
				</div>
				<div class="mgt15 mgb15">
				</div>
				<div class="row">
					<div class="small-12 medium-6 large-4 columns">
						<div>
							<label class="c1">{$texte[94]}</label>
							<input class="HideMe" type="password" name="old_password" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12 medium-6 large-4 columns">
						<div>
							<label class="c1">{$texte[95]}</label>
							<input class="HideMe" type="password" name="new_password" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12 medium-6 columns">
						<div>
							<button class="btn_blanc" id="button" type="button">{$texte[97]}</button>
						</div>
					</div>
					<div class="small-12 medium-6 columns">
						<div>
							<input class="btn_blanc" type="submit" value="{$texte[98]}" name="valide" />
						</div>
					</div>
				</div>
				<script>
				$("#button").click( function()
			   {
				 $(".HideMe").attr('style', 'display: block !important');
			   }
			);
				</script>
			</div>
		</form>
	</div>
</div>

{include file="$footer_tpl"}