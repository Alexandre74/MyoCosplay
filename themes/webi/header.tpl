<!DOCTYPE html>
<html class="no-js">
<head>
  {assign var='title' value='Make Your Own Cosplay'}
  {assign var='desc' value='Site internet qui propose des tutoriels afin de confectionner vos propre cosplay selon votre morphologie, il est aussi possible d\'en acheter et bien d\'en louer depuis le site internet.'}
  
	<!-- section meta generalistes -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
	
    <!-- section SEO -->
    <title>{$title}</title>
    <meta name='description' content="{$desc}">
	
	<!-- google fonts -->
	
	<!-- section CSS frameworks -->
    <link rel="stylesheet" href="{$master_url}/inc/css/foundation.css" /> 
    <link rel="stylesheet" href="{$master_url}/inc/css/font-awesome.css" />
    <link rel="stylesheet" href="{$master_url}/inc/css/jquery.mmenu.css" />
	<!--<link rel="stylesheet" href="{$master_url}/inc/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />-->
    
    <!-- section CSS Webissime -->
    <link rel='stylesheet' href='{$master_url}/themes/{$the_theme}/style.css'>
	<link rel='stylesheet' href='{$master_url}/inc/css/sl_style.css'>
	<!--<link rel='stylesheet' href='{$master_url}/themes/{$the_theme}/styleOLD.css'> -->

    <!--<link rel='stylesheet' href='{$master_url}/inc/css/th_style.css'>-->
	
	
    <!-- section JS frameworks -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
	<!-- Jquery-UI sert pour les fonctionnalite de type drag end drop et autre type visuel-->
	<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>-->
	<!--<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />-->
	<!--<script type="text/javascript" src="{$master_url}/inc/js/jquery.fancybox.pack.js?v=2.1.5"></script>-->

	<script src="../../ckeditor/ckeditor.js"></script>
    
	<!-- section JS Webissime -->
    <script src='{$master_url}/inc/js/script.js'></script>
	
	<!--captcha-->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<!-- emplacement de la baniere header -->
<div class="row banrow">
  <div class="small-12 column banrow">
	<div class="bandiv">
	  <!--<img src="{$master_url}/img/mybann.jpeg" class="baniere">-->
	  <img src="{$master_url}/img/mybann5.jpg" class="baniere">
	</div>
	<div class='langHTop'>
	  <div class="floatr">
		  <span class="" style="cursor:pointer" onclick="change_langue('EN');">
			<img src="{$master_url}/img/Blank.png" class="flag flag-england" alt="angleterre" />
			<span class="txtb fs15px">{$texte[33]}</span>
		  </span>
		  <span class="pdl10 pdr10">|</span>
		  <span class="" style="cursor:pointer" onclick="change_langue('FR');">
			<img src="{$master_url}/img/Blank.png" class="flag flag-fr" alt="france" />
			<span class="txtb fs15px">{$texte[32]}</span>
		  </span>
	  </div>
	</div>
  </div>
</div>

<!-- debut du menu -->
<nav class="top-bar" data-topbar data-responsive-toggle="example-menu" data-hide-for="large" role="navigation">	
  <ul class="title-area">
    <li class="name">
      <h1><a href="{$master_url}">Myo Cosplay</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">  
	<ul class="left">
      <li><a href="{$master_url}/index">{$texte[19]}</a></li>
	  
	  <li class="has-dropdown not-click moved show-for-large-up"><a href="{$master_url}" class="verrou">{$texte[24]}</a>
		<ul class="dropdown">
		  {if isset($smarty.session.pseudo)}
		  <li><a href="{$master_url}/tuto-text-form">{$texte[20]}</a></li>
		  <li><a href="{$master_url}/tuto-video-form">{$texte[21]}</a></li>
		  {/if}
		  <li><a href="{$master_url}/tutoriel-videos">{$texte[22]}</a></li>
		  <li><a href="{$master_url}/tutoriel-ecrits">{$texte[23]}</a></li>
		</ul>
	  </li>
	  {if isset($smarty.session.pseudo)}
	  <li class="has-dropdown not-click moved show-for-medium-down"><a href="{$master_url}">{$texte[24]}</a>
		<ul class="dropdown">
		  {if isset($smarty.session.pseudo)}
		  <li><a href="{$master_url}/tuto-text-form">{$texte[20]}</a></li>
		  <li><a href="{$master_url}/tuto-video-form">{$texte[21]}</a></li>
		  {/if}
		  <li><a href="{$master_url}/tutoriel-videos">{$texte[22]}</a></li>
		  <li><a href="{$master_url}/tutoriel-ecrits">{$texte[23]}</a></li>
		</ul>
	  </li>
	  {/if}
	  {if isset($smarty.session.pseudo)}
	  <li class="has-dropdown not-click moved show-for-large-up"><a href="{$master_url}" class="verrou">{$texte[25]}</a>
		<ul class="dropdown">
		  <li><a href="{$master_url}/locations" class="verrou">{$texte[26]}</a></li>
		  <li><a href="{$master_url}/ventes" class="verrou">{$texte[27]}</a></li>
		</ul>
	  </li>
	  {/if}
	  {if isset($smarty.session.pseudo)}
	  <li class="has-dropdown not-click moved show-for-medium-down"><a href="{$master_url}">{$texte[25]}</a>
		<ul class="dropdown">
		  <li><a href="{$master_url}/locations" class="verrou">{$texte[26]}</a></li>
		  <li><a href="{$master_url}/ventes" class="verrou">{$texte[27]}</a></li>
		</ul>
	  </li>
	 {/if}
      <li><a href="{$master_url}/tuto-accueil">{$texte[28]}</a></li>
	  {if isset($smarty.session.pseudo)}
	  <li><a href="{$master_url}/profile-user">Profil</a></li>
	  <li><a href="{$master_url}/streaming">Stream</a></li>
	  {/if}
	  {if !isset($smarty.session.pseudo)}
	  <li><a href="{$master_url}/inscription">{$texte[29]}</a></li>
	  <li><a href="{$master_url}/connexion">{$texte[30]}</a></li>
	  {/if}
	  {if isset($smarty.session.pseudo)}
	  <li><a href="{$master_url}/deconnexion">{$texte[31]}</a></li>
	  {/if}
    </ul>

  </section>
</nav>

<!-- fin menu -->
<!-- debut div maitre englobante -->
<div id="master" style="overflow:hidden;">
  
<div class="couleurFond">

<style>
  #master {
	background: url("{$master_url}/images/sakura.jpg") no-repeat center center fixed;
	background-size: cover;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	 color: #fff;
  }
  
  .langHTop {
	border-radius: 5px;
	color: #1f0273;
	display: inline-block;
	margin: 0 5px;
	padding: 0 5px;
	position: absolute;
	top: 40px;
	right: 4px;	
  }
  
</style>

{literal}
<script>
  $('a.verrou').click(function(){
    event.preventDefault();
});
  
</script>
{/literal}