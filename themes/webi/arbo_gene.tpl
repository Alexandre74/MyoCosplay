{include file="$header_tpl"}

<div class="row">
     <div class="small-12 columns">
          {if $mypath["path0"] == "locations"}
          <div class="txtal mgt20 mgb20">{$texte[18]}</div> <!-- location -->
          {elseif $mypath["path0"] == "ventes"}
          <div class="txtal mgt20 mgb20">{$texte[17]}</div> <!-- vente -->
          {elseif $mypath["path0"] == "tutoriel-ecrits"}
          <div class="txtal mgt20 mgb20">{$texte[15]}</div> <!-- tuto ecrit -->
          {elseif $mypath["path0"] == "tutoriel-videos"}
          <div class="txtal mgt20 mgb20">{$texte[16]}</div> <!-- tuto video --> 
          {/if}
     </div>
</div>

<!-- ligne location cosplay -->

<div class="row">
     {foreach from=$toto key=i item=k}
               <div class="small-12 medium-6 large-3 columns end"> 
               {if $k['step'] == 1}
                    <a href="{$masterurl}/{$mypath["path0"]}/{$k['id_serie']}">
               {elseif $k['step'] == 2}
                    <a href="{$masterurl}/{$mypath["path0"]}/{$mypath['path1']}/{$k['id_perso']}">
               {elseif $k['step'] == 3 && $mypath["path0"] == "tutoriel-ecrits"}
                    <a href="{$masterurl}/tutoriel-ecrit/{$k['id_fiche']}">
               {elseif $k['step'] == 3 && $mypath["path0"] == "locations"}
                    <a href="{$masterurl}/location/{$k['id_fiche']}">
               {elseif $k['step'] == 3 && $mypath["path0"] == "ventes"}
                    <a href="{$masterurl}/ventes/{$k['id_fiche']}">
               {elseif $k['step'] == 3 && $mypath["path0"] == "tutoriel-videos"}
                    <a href="{$masterurl}/tutoriel-video/{$k['id_fiche']}">
               {/if}
                    <div class="tuto_txt_box resiseImg" style="background: url({$k['image']}) no-repeat center center">
                         <div class="vente_index">
                              <div class="trais mgt5 mgb5"></div>
                              <div class="txtac mgt10 mgb10">{$k['titre']}</div>
                         </div>
                    </div>

                    </a>

               <div class="pdt10 pdb10"></div>
          </div>
     {/foreach}
</div>

{include file="$footer_tpl"}