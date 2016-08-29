{include file="$header_tpl"}


<div class="pdt20 pdb20"></div>
<!-- titre page -->
<div class="row">
    <div class="small-12 columns">
        <div class="news_titre fs22px"><h1><span class="trait_orange">{$cms["titre"]}</span></h1></div>
        
    </div>
</div>

<div class="pdt30 pdsb30"></div>

<div class="row">
    <div class="small-12 medium-3 columns">
        <div class="txtac fs18px"><span class="trait_orange">{$cms["date"]}</span></div>
    </div>
    <div class="small-12 medium-9 columns">
        <div class="txtaj">{$cms["contenu"]}</div>
    </div>
</div>

<div class=""></div>


<style>
    
    .news_titre {
        text-align: center !important;
    }
    
    .trait_orange {
        border-bottom: solid 2px  #ff832f; 
    }
    
</style>

{include file="$footer_tpl"}