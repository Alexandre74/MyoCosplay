<?php
/* Smarty version 3.1.29, created on 2016-07-26 11:50:19
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57974e7bdf1e62_24500066',
  'file_dependency' => 
  array (
    'ced1b5993722b55741e3fa5bf962dc961427428c' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/footer.tpl',
      1 => 1468068253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57974e7bdf1e62_24500066 ($_smarty_tpl) {
?>
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
		<span><?php echo $_smarty_tpl->tpl_vars['texte']->value[34];?>
</span>
		<div class="mgt10 ">
		  <div><a href=""><span class=""><?php echo $_smarty_tpl->tpl_vars['texte']->value[36];?>
</span></a></div>
		  <div><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/forum"><span class=""><?php echo $_smarty_tpl->tpl_vars['texte']->value[39];?>
</span></a></div>
		</div>
	  </div>
	</div>
	<div class="small-12 medium-6 large-3 columns">
	  <div class="">
		<span><?php echo $_smarty_tpl->tpl_vars['texte']->value[41];?>
</span>
		<div class="mgt10 ">
		  <div><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/faq"><span class=""><?php echo $_smarty_tpl->tpl_vars['texte']->value[35];?>
</span></a></div>
		  <div><a href=""><span class=""><?php echo $_smarty_tpl->tpl_vars['texte']->value[38];?>
</span></a></div>
		</div>
	  </div>
	</div>
	<div class="small-12 medium-6 large-3 columns">
	  <div class="">
		<span><?php echo $_smarty_tpl->tpl_vars['texte']->value[40];?>
</span>
		<div class="mgt10 ">
		  <div><a href=""><span class=""><?php echo $_smarty_tpl->tpl_vars['texte']->value[44];?>
</span></a></div>
		</div>
	  </div>
	</div>
	<div class="small-12 medium-6 large-3 columns">
	  <div class="">
		<span><?php echo $_smarty_tpl->tpl_vars['texte']->value[42];?>
</span>
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
		  <span><?php echo $_smarty_tpl->tpl_vars['texte']->value[37];?>
</span>
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/js/foundation.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/js/foundation/foundation.topbar.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/js/jquery.cookie.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  
  

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
  



<?php echo '</script'; ?>
>

</body>
</html><?php }
}
