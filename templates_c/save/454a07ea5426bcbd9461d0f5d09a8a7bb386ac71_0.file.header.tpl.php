<?php
/* Smarty version 3.1.29, created on 2016-07-26 11:50:19
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57974e7bdd5990_62806642',
  'file_dependency' => 
  array (
    '454a07ea5426bcbd9461d0f5d09a8a7bb386ac71' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/header.tpl',
      1 => 1468064632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57974e7bdd5990_62806642 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html class="no-js">
<head>
  <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable('Make Your Own Cosplay', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'title', 0);?>
  <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_Variable('Site internet qui propose des tutoriels afin de confectionner vos propre cosplay selon votre morphologie, il est aussi possible d\'en acheter et bien d\'en louer depuis le site internet.', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'desc', 0);?>
  
	<!-- section meta generalistes -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
	
    <!-- section SEO -->
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta name='description' content="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
">
	
	<!-- google fonts -->
	
	<!-- section CSS frameworks -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/css/foundation.css" /> 
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/css/jquery.mmenu.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    
    <!-- section CSS Webissime -->
    <link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['the_theme']->value;?>
/style.css'>
	<!--<link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['the_theme']->value;?>
/styleOLD.css'> -->
    <link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/css/sl_style.css'>
    <!--<link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/css/th_style.css'>-->
	
	
    <!-- section JS frameworks -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
    
	<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
	<?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/js/jssor.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/js/jquery.fancybox.pack.js?v=2.1.5"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/js/jssor.slider.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../../ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
    
	<!-- section JS Webissime -->
    <?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inc/js/script.js'><?php echo '</script'; ?>
>
	
	<!--captcha-->
	<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
</head>

<!-- emplacement de la baniere header -->
<div class="row banrow">
  <div class="small-12 column banrow">
	<div class="bandiv">
	  <!--<img src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/img/mybann.jpeg" class="baniere">-->
	  <img src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/img/mybann5.jpg" class="baniere">
	</div>
	<div class='langHTop'>
	  <div class="floatr">
		  <span class="" style="cursor:pointer" onclick="change_langue('EN');">
			<img src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/img/Blank.png" class="flag flag-england" alt="angleterre" />
			<span class="txtb fs15px"><?php echo $_smarty_tpl->tpl_vars['texte']->value[33];?>
</span>
		  </span>
		  <span class="pdl10 pdr10">|</span>
		  <span class="" style="cursor:pointer" onclick="change_langue('FR');">
			<img src="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/img/Blank.png" class="flag flag-fr" alt="france" />
			<span class="txtb fs15px"><?php echo $_smarty_tpl->tpl_vars['texte']->value[32];?>
</span>
		  </span>
	  </div>
	</div>
  </div>
</div>

<!-- debut du menu -->
<nav class="top-bar" data-topbar data-responsive-toggle="example-menu" data-hide-for="large" role="navigation">	
  <ul class="title-area">
    <li class="name">
      <h1><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
">Myo Cosplay</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">  
	<ul class="left">
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/index"><?php echo $_smarty_tpl->tpl_vars['texte']->value[19];?>
</a></li>
	  
	  <li class="has-dropdown not-click moved show-for-large-up"><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
" class="verrou"><?php echo $_smarty_tpl->tpl_vars['texte']->value[24];?>
</a>
		<ul class="dropdown">
		  <?php if (isset($_SESSION['pseudo'])) {?>
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tuto-text-form"><?php echo $_smarty_tpl->tpl_vars['texte']->value[20];?>
</a></li>
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tuto-video-form"><?php echo $_smarty_tpl->tpl_vars['texte']->value[21];?>
</a></li>
		  <?php }?>
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tutoriel-videos"><?php echo $_smarty_tpl->tpl_vars['texte']->value[22];?>
</a></li>
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tutoriel-ecrits"><?php echo $_smarty_tpl->tpl_vars['texte']->value[23];?>
</a></li>
		</ul>
	  </li>
	  <?php if (isset($_SESSION['pseudo'])) {?>
	  <li class="has-dropdown not-click moved show-for-medium-down"><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['texte']->value[24];?>
</a>
		<ul class="dropdown">
		  <?php if (isset($_SESSION['pseudo'])) {?>
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tuto-text-form"><?php echo $_smarty_tpl->tpl_vars['texte']->value[20];?>
</a></li>
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tuto-video-form"><?php echo $_smarty_tpl->tpl_vars['texte']->value[21];?>
</a></li>
		  <?php }?>
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tutoriel-videos"><?php echo $_smarty_tpl->tpl_vars['texte']->value[22];?>
</a></li>
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tutoriel-ecrits"><?php echo $_smarty_tpl->tpl_vars['texte']->value[23];?>
</a></li>
		</ul>
	  </li>
	  <?php }?>
	  <?php if (isset($_SESSION['pseudo'])) {?>
	  <li class="has-dropdown not-click moved show-for-large-up"><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
" class="verrou"><?php echo $_smarty_tpl->tpl_vars['texte']->value[25];?>
</a>
		<ul class="dropdown">
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/locations" class="verrou"><?php echo $_smarty_tpl->tpl_vars['texte']->value[26];?>
</a></li>
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/ventes" class="verrou"><?php echo $_smarty_tpl->tpl_vars['texte']->value[27];?>
</a></li>
		</ul>
	  </li>
	  <?php }?>
	  <?php if (isset($_SESSION['pseudo'])) {?>
	  <li class="has-dropdown not-click moved show-for-medium-down"><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['texte']->value[25];?>
</a>
		<ul class="dropdown">
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/locations" class="verrou"><?php echo $_smarty_tpl->tpl_vars['texte']->value[26];?>
</a></li>
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/ventes" class="verrou"><?php echo $_smarty_tpl->tpl_vars['texte']->value[27];?>
</a></li>
		</ul>
	  </li>
	 <?php }?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/tuto-accueil"><?php echo $_smarty_tpl->tpl_vars['texte']->value[28];?>
</a></li>
	  <?php if (isset($_SESSION['pseudo'])) {?>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/profile-user">Profil</a></li>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/streaming">Stream</a></li>
	  <?php }?>
	  <?php if (!isset($_SESSION['pseudo'])) {?>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/inscription"><?php echo $_smarty_tpl->tpl_vars['texte']->value[29];?>
</a></li>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/connexion"><?php echo $_smarty_tpl->tpl_vars['texte']->value[30];?>
</a></li>
	  <?php }?>
	  <?php if (isset($_SESSION['pseudo'])) {?>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/deconnexion"><?php echo $_smarty_tpl->tpl_vars['texte']->value[31];?>
</a></li>
	  <?php }?>
    </ul>

  </section>
</nav>

<!-- fin menu -->
<!-- debut div maitre englobante -->
<div id="master" style="overflow:hidden;">
  
<div class="couleurFond">

<style>
  #master {
	background: url("<?php echo $_smarty_tpl->tpl_vars['master_url']->value;?>
/images/sakura.jpg") no-repeat center center fixed;
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


<?php echo '<script'; ?>
>
  $('a.verrou').click(function(){
    event.preventDefault();
});
  
<?php echo '</script'; ?>
>
<?php }
}
