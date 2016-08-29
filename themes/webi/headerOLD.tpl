<!doctype html>
<html class="no-js">
<head>
	<!-- section meta generalistes -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
    
    <!-- section SEO -->
    <title>{$title}</title>
    <meta name='description' content="{$desc}">
    
    <!-- og -->
    <meta property="og:locale" content="fr_FR" />
	{if $og_type != ""}<meta property="og:type" content="{$og_type}" />{/if}
	{if $og_title != ""}<meta property="og:title" content="{$og_title}" />{/if}
	{if $og_description != ""}<meta property="og:description" content="{$og_description}" />{/if}
	{if $og_url != ""}<meta property="og:url" content="{$og_url}" />{/if}
	{if $og_site_name != ""}<meta property="og:site_name" content="{$og_site_name}" />{/if}
	{if $og_image != ""}<meta property="og:image" content="{$og_image}" />{/if}
	
	<!-- google fonts -->
	
	<!-- section CSS frameworks -->
    <link rel="stylesheet" href="{$master_url}/inc/css/foundation.css" /> 
    <link rel="stylesheet" href="{$master_url}/inc/css/font-awesome.css" />
    <link rel="stylesheet" href="{$master_url}/inc/css/jquery.mmenu.css" />
	<link rel="stylesheet" href="{$master_url}/inc/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    
    <!-- section CSS Webissime -->
    <link rel='stylesheet' href='{$master_url}/themes/{$the_theme}/style.css'>
	<!--<link rel='stylesheet' href='{$master_url}/themes/{$the_theme}/styleOLD.css'> -->
    <link rel='stylesheet' href='{$master_url}/inc/css/sl_style.css'>
    <!--<link rel='stylesheet' href='{$master_url}/inc/css/th_style.css'>-->
	
	
    <!-- section JS frameworks -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
	<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="{$master_url}/inc/js/jssor.js"></script>
	<script type="text/javascript" src="{$master_url}/inc/js/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript" src="{$master_url}/inc/js/jssor.slider.min.js"></script>
	<script src="../../ckeditor/ckeditor.js"></script>
	
	
	<!--<script type="text/javascript" src="{$master_url}/inc/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="{$master_url}/inc/js/jssor.slider.mini.js"></script>
	<script type="text/javascript" src="{$master_url}/inc/js/jssor.slider.min.js"></script>-->
   
    
	<!-- section JS Webissime -->
    <script src='{$master_url}/inc/js/script.js'></script>
	<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
	<!--
	  <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
	  <script>
		var recaptcha1;
		var recaptcha2;
		var myCallBack = function() {
		  //Render the recaptcha1 on the element with ID "recaptcha1"
		  recaptcha1 = grecaptcha.render('recaptcha1', {
			'sitekey' : '6LdkkwcTAAAAAFUgnDmlWk92jRfpMKIrxU2gYgZt', //Replace this with your Site key
			'theme' : 'light'
		  });
		  
		  //Render the recaptcha2 on the element with ID "recaptcha2"
		  recaptcha2 = grecaptcha.render('recaptcha2', {
			'sitekey' : '6LdkkwcTAAAAAFUgnDmlWk92jRfpMKIrxU2gYgZt', //Replace this with your Site key
			'theme' : 'light'
		  });
		};
	  </script>
	-->
	
    <!-- section google analytics -->
	 {literal}
    <script>
	/*
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-9857370-35', 'auto');
	  ga('send', 'pageview');
	*/
	</script>
	{/literal}
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>


<nav class="top-bar" data-topbar role="navigation" data-options="is_hover: true;mobile_show_parent_link: true">	
  <ul class="title-area">
    <li class="name">
      <h1><a href="{$master_url}">Myo Cosplay</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">  
	<ul class="left">
      <li><a href="{$master_url}/index">Accueil</a></li>
	  
	  <li class="has-dropdown not-click moved"><a href="">Nos tutoriaux</a>
		<ul class="dropdown">
		  <li><a href="{$master_url}/tuto-text-form">Création tuto écrit</a></li>
		  <li><a href="{$master_url}/tuto-video-form">Création tuto vidéo</a></li>
		  <li><a href="{$master_url}/tutoriel-videos">Tuto vidéo</a></li>
		  <li><a href="{$master_url}/tutoriel-ecrits">Fiches tutoriel</a></li>
		</ul>
	  </li>
	  
	  <li class="has-dropdown not-click moved"><a href="">Notre boutique</a>
		<ul class="dropdown">
		  <li><a href="{$master_url}/locations" class="verrou">Location</a></li>
		  <li><a href="{$master_url}/ventes" class="verrou">Ventes</a></li>
		</ul>
	  </li>
	 
      <li><a href="{$master_url}/tuto-accueil">Recherche</a></li>
	  
	  <li><a href="{$master_url}/inscription">Inscription</a></li>
	  <li><a href="{$master_url}/connexion">Connexion</a></li>
	  <li><a href="{$master_url}/deconnexion">Deconnexion</a></li>
    </ul>

  </section>
</nav>

<!-- fin menu -->

<!-- debut div maitre englobante -->
<div id="master" style="overflow:hidden;">
  
<div class="couleurFond">

<style>
  
  ul.title-area {
	line-height: inherit !important;
  }
  
  #master {
	background: url("{$master_url}/images/sakura.jpg") no-repeat center center fixed;
	background-size: cover;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	 color: #fff;
  }
  
  .couleurFond {
	background-color: rgba(0, 0, 0, 0.65) !important;
  }

  a.verrou {
    cursor: default;
}
  
</style>

{literal}
<script>
  $('a.verrou').click(function(){
    return false;
});
</script>
{/literal}