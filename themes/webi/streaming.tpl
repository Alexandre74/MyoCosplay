{include file="$header_tpl"}
<div class="pdt10 pdb10"></div>
<div class="row">
<div class="small-12 columns">
  <div class="txtac fs25px">
   <h1><span class="SouligneOrange">{$texte[81]}</span></h1>
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

{include file="$footer_tpl"}