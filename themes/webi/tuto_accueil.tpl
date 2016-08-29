{include file="$header_tpl"}

<div class="pdt10 pdb10"></div>
<div class="row">
 <div class="small-12 columns">
  <div class="txtac fs25px">
   <h1><span class="SouligneOrange">{$texte[49]}</span></h1>
  </div>
 </div>
</div>
<div class="pdt10 pdb10"></div>

<div class="pdt10 pdb10"></div>
<div class="row">
 <div class="small-12 columns">
  <div class="txtac fs25px">
<form>
 <div class="row">
  <div class="small-12 medium-6 columns">
    <input type="radio" name="recherche" class="" value="nom" checked><span class="fs14px">&nbsp;&nbsp;{$texte[50]}</span><br>
  </div>
  <div class="small-12 medium-6 columns">
    <input type="radio" name="recherche" class="" value="morphologie"><span class="fs14px">&nbsp;&nbsp;{$texte[80]}</span><br>
  </div>
 </div>
</form>
  </div>
 </div>
</div>
<div class="pdt10 pdb10"></div>

<div class="box1" >
 
<div class="pdt20 pdb20"></div>
<div class="row">
 <div class="small-12 colums">
  <form method="post">
   <div class="row">
    <div class="small-12 colums">
     <div class="">
      <input type="text" name="search">
     </div>
    </div>
   </div>
   <div class="row">
    <div class="small-12 colums">
     <input class="btn_blanc" type="submit" name="submit" value="{$texte[50]}">
    </div>
   </div>
  </form>
 </div>
</div>

{if !empty($tuto_texte)}
<div class="row">
     <div class="small-12 columns">
          <div class="txtal mgt20 mgb20">{$texte[61]}</div>  
     </div>
</div>
<!-- tuto_texte -->
<div class="row">
     {foreach from=$tuto_texte key=i item=k}
          <div class="small-12 medium-6 large-3 columns end">
             <a href="{$master_url}/tutoriel-ecrit/{$k['id_tuto']}">
               <div class="tuto_txt_box resiseImg" style="background: url({$k['image']}) no-repeat center center">
                    <div class="vente_index">
                         <div class="trais mgt5 mgb5"></div>
                         <div class="txtac mgt10 mgb10">{$k['titre']}</div>
                    </div>
               </div>
               <div class="show-for-medium-down pdt20 pdb20"></div> 
              </a>
          </div>
     {/foreach}
</div>
{/if}

{if !empty($tuto_video)}
<div class="row">
     <div class="small-12 columns">
          <div class="txtal mgt20 mgb20">{$texte[62]}</div>  
     </div>
</div>
<!--  tuto_video -->
<div class="row">
     {foreach from=$tuto_video key=i item=k}
          <div class="small-12 medium-6 large-3 columns end">
             <a href="{$master_url}/tutoriel-video/{$k['id_fiche']}">
               <div class="tuto_txt_box resiseImg" style="background: url({$k['image']}) no-repeat center center">
                    <div class="vente_index">
                         <div class="trais mgt5 mgb5"></div>
                         <div class="txtac mgt10 mgb10">{$k['titre']}</div>
                    </div>
               </div>
               <div class="show-for-medium-down pdt20 pdb20"></div>
            </a>
          </div>
     {/foreach}
</div>
{/if}

{if !empty($vente_cos)}
<div class="row">
     <div class="small-12 columns">
          <div class="txtal mgt20 mgb20">{$texte[63]}</div>  
     </div>
</div>

<!--  vente_cos -->
<div class="row">
     {foreach from=$vente_cos key=i item=k}
          <div class="small-12 medium-6 large-3 columns end">
               <div class="tuto_txt_box resiseImg" style="background: url({$k['image']}) no-repeat center center">
                    <div class="vente_index">
                         <div class="trais mgt5 mgb5"></div>
                         <div class="txtac mgt10 mgb10">{$k['titre']}</div>
                    </div>
               </div>
               <div class="show-for-medium-down pdt20 pdb20"></div> 
          </div>
     {/foreach}
</div>
{/if}

{if !empty($loca_cos)}
<div class="row">
     <div class="small-12 columns">
          <div class="txtal mgt20 mgb20">{$texte[64]}</div>  
     </div>
</div>
<!--  loca_cos -->
<div class="row">
     {foreach from=$loca_cos key=i item=k}
          <div class="small-12 medium-6 large-3 columns end">
               <div class="tuto_txt_box resiseImg" style="background: url({$k['image']}) no-repeat center center">
                    <div class="vente_index">
                         <div class="trais mgt5 mgb5"></div>
                         <div class="txtac mgt10 mgb10">{$k['titre']}</div>
                    </div>
               </div>
               <div class="show-for-medium-down pdt20 pdb20"></div> 
          </div>
     {/foreach}
</div>
{/if}
</div>

<div class="box">
{if !empty($morpho)}
<div class="row">
     <div class="small-12 columns">
          <div class="txtal mgt20 mgb20">{$texte[61]}</div>  
     </div>
</div>
<!-- tuto_texte -->
<div class="row">
     {foreach from=$morpho key=i item=k}
          <div class="small-12 medium-6 large-3 columns end">
             <a href="{$master_url}/tutoriel-ecrit/{$k['id_tuto']}">
               <div class="tuto_txt_box resiseImg" style="background: url({$k['image']}) no-repeat center center">
                    <div class="vente_index">
                         <div class="trais mgt5 mgb5"></div>
                         <div class="txtac mgt10 mgb10">{$k['titre']}</div>
                    </div>
               </div>
               <div class="show-for-medium-down pdt20 pdb20"></div> 
              </a>
          </div>
     {/foreach}
</div>
{else}
<div>
{/if}
</div>

{literal}
<script type="text/javascript">
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="nom"){
            $(".box").hide();
            $(".box1").show();
        }
        if($(this).attr("value")=="morphologie"){
            $(".box1").hide();
            $(".box").show();
        }
    });
});
</script>
{/literal}

<style type="text/css">
    .box{
        display: none;
    }
    .box1{
      display: block;
    }
</style>


{include file="$footer_tpl"}