<!-- fin div content -->
<div class="pdt30 pdb30"></div>
</div>

<!-- fin div couleur -->
</div>
<div class="bc9 c1">
  <div class="pdt15 pdb15"></div>
  <div class="row">
	<div class="small-12 medium-6 large-3 columns">
	  <div class="">
		<span>{$texte[34]}</span>
		<div class="mgt10 ">
		  <div><a href=""><span class="">{$texte[36]}</span></a></div>
		  <div><a href="{$master_url}/forum"><span class="">{$texte[39]}</span></a></div>
		</div>
	  </div>
	</div>
	<div class="small-12 medium-6 large-3 columns">
	  <div class="">
		<span>{$texte[41]}</span>
		<div class="mgt10 ">
		  <div><a href="{$master_url}/faq"><span class="">{$texte[35]}</span></a></div>
		  <div><a href=""><span class="">{$texte[38]}</span></a></div>
		</div>
	  </div>
	</div>
	<div class="small-12 medium-6 large-3 columns">
	  <div class="">
		<span>{$texte[40]}</span>
		<div class="mgt10 ">
		  <div><a href=""><span class="">{$texte[44]}</span></a></div>
		</div>
	  </div>
	</div>
	<div class="small-12 medium-6 large-3 columns">
	  <div class="">
		<span>{$texte[42]}</span>
		<div class="mgt10 ">
		  <a href="mailto:contact@myocosplay.com"><span class="">contact@myocosplay.com</span></a>	  
		</div>
	  </div>
	</div>
  </div>
  <div class="pdt20 pdb20"></div>
  <div class="row">
	<div class="small-12 colums">
	  <div>
		  <span>{$texte[37]}</span>
		  <div class="mgt10">
			<div>
			  <a href="https://www.facebook.com/MakeYourOwnCosplay" target="_blank">
				<span class="fa-stack fa-lg icone_social">
				  <i class="fa fa-circle fa-stack-2x c9"></i>
				  <i class="fa fa-facebook fa-stack-1x c1"></i>
				</span>
				<span class="">Facebook</span>
			  </a>
			</div>
			<div>
			  <a href="" target="_blank">
				<span class="fa-stack fa-lg icone_social">
				  <i class="fa fa-circle fa-stack-2x c9"></i>
				  <i class="fa fa-twitter fa-stack-1x c1"></i>
				</span>
				<span class="">Twitter</span>
			  </a>
			</div>
			<div>
			  <a href="" target="_blank">
				<span class="fa-stack fa-lg icone_social">
				  <i class="fa fa-circle fa-stack-2x c9"></i>
				  <i class="fa fa-instagram fa-stack-1x c1"></i>
				</span>
				<span class="">Instagram</span>
			  </a>
			</div>
		</div>
	  </div>
	</div>
</div>
  <div class="pdt15 pdb15"></div>
  <div class="row">
	<div class="small-12 colums">
	  <div class="txtac">© 2016 Make Your Own Cosplay - Projet EPITECH EIP</div>
	  <!--<div class="fs5px refcolor" style="text-align: right"><a href="https://www.ideoref.com" title="Référencement automatique gratuit" target="_blank"><span class="refcolor">Référencement gratuit</span></a></div>-->
	</div>
  </div>
    <div class="pdt15 pdb15"></div>
</div>

<!-- fin div maitre englobante -->
</div>

<!-- chargement des script foundation en fin de page... -->
<script src="{$master_url}/inc/js/foundation.min.js"></script>
<script src="{$master_url}/inc/js/foundation/foundation.topbar.js"></script>
<script src="{$master_url}/inc/js/jquery.cookie.js"></script>

<script>
  
  {literal}

	//lancement du javascript Foundation
$(document).foundation({
  equalizer : {
    // Specify if Equalizer should make elements equal height once they become stacked.
    equalize_on_stack: true
  }
});


// gestion du responsive au niveau des images

	function set_height() {
		var x = $(".resiseImg").width();
		
		$(".resiseImg").css("background-size"," "+x+"px auto");
	}
	
	//*** lancement du resize des box au chargement de la page ***
	set_height();
	 
	//*** lancement du resize des box au redimensionnement de la fenetre du navigateur ***
	$( window ).resize(function() {
	    set_height();
	});
  
{/literal}


</script>

</body>
</html>