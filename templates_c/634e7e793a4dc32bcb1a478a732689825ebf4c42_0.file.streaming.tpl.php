<?php
/* Smarty version 3.1.29, created on 2016-07-29 11:39:41
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/streaming.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579b407d82f536_23613436',
  'file_dependency' => 
  array (
    '634e7e793a4dc32bcb1a478a732689825ebf4c42' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/streaming.tpl',
      1 => 1467992101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579b407d82f536_23613436 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div class="pdt10 pdb10"></div>
<div class="row">
<div class="small-12 columns">
  <div class="txtac fs25px">
   <h1><span class="SouligneOrange"><?php echo $_smarty_tpl->tpl_vars['texte']->value[81];?>
</span></h1>
  </div>
 </div>
</div>
<div class="pdt20 pdb20"></div>
<div class="row banrow">
        <div class="small-12 medium-6 large-9 columns">
                <div>
                        <object type="application/x-shockwave-flash" height="620" width="100%" id="live_embed_player_flash" data="https://www.twitch.tv/widgets/live_embed_player.swf?channel=ogaminglol" bgcolor="#000000">
                                <param name="allowFullScreen" value="true" />
                                <param name="movie" value="https://www.twitch.tv/widgets/live_embed_player.swf" />
                                <param name="flashvars" value="hostname=https://www.twitch.tv&channel=ogaminglol&auto_play=true&start_volume=50" />
                        </object>
                        <!--<iframe src="https://www.twitch.tv/widgets/live_embed_player.swf?channel=ogaminglol" frameborder="0"  height="620" width="100%"></iframe>-->
                </div>
        </div>
        <div class="small-12 medium-6 large-3 columns">
                <div>
                        <iframe src="https://twitch.tv/ogaminglol/chat?popout=" frameborder="0" height="620" width="100%"></iframe>
                </div>
        </div>
</div>














<!--#object-div {
    float: left;
}

iframe {
    float: right;
}-->
<style>
        
.player-content{
    display: block;
}
 
.embed-container {
    height: 0;
    width: 100%;
    padding-bottom: 56.25%;
    overflow: hidden;
    position: relative;
    display: inline-block;
    margin: 0px
}
 
.chat-container {
    height: 0;
    width: 100%;
    padding-bottom: 56.25%;
    overflow: hidden;
    position: relative;
    display: inline-block;
    margin: 0px;
    float: right;
}
             
.embed-container iframe {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    float: left;
}
 
.chat-container iframe {
    width: 33%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    float: right;
}

 .contentperso {
    width: 50%;
    margin: 0px auto;
}


</style>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
