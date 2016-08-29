{include file="$header_tpl"}

<!-- include du slider -->
{include file="$slider_tpl"}


<!-- start of main content -->

<!-- start of tuto cosplay content -->

<div class="pdt10 pdb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtal">
			<h1><span class="SouligneOrange">{$texte[7]}</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>

<div class="row">
     {foreach from=$tuto_txt key=i item=k}
          <div class="small-12 medium-6 large-3 columns">
               <a href="{$master_url}/tutoriel-ecrit/{$k['id_tuto']}">
                    <div class="tuto_txt_box resiseImg" style="background: url({$k['image']}) no-repeat center center">
                         <div class="text_tuto" id="myid-{$i}">
                              <div class="trais mgt5 mgb5"></div>
                              <div class="txtac mgt10 mgb10">{$k['titre']}</div>
                              <div class="hide_preview">{$k['description']|truncate:150:"...":false}</div>
                         </div>
                    </div>
               </a>
               <div class="show-for-medium-down pdt20 pdb20"></div>
           </div>
     {/foreach}
</div>

<div class="mgt10 mgb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtal">
			<h1><span class="SouligneOrange">{$texte[9]}</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>
<!-- ligne vente cosplay -->


<div class="row">
     {foreach from=$vente_cos key=i item=k}
          <div class="small-12 medium-6 large-3 columns">
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

<div class="mgt10 mgb10"></div>
<div class="row">
	<div class="small-12 columns">
		<div class="txtal">
			<h1><span class="SouligneOrange">{$texte[11]}</span></h1>
		</div>
	</div>
</div>
<div class="pdt20 pdb20"></div>
<!-- ligne location cosplay -->

<div class="row">
     {foreach from=$loca_cos key=i item=k}
          <div class="small-12 medium-6 large-3 columns">
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

<div class="row" data-equalizer>
     <div class="small-12 medium-6 columns">
          <div class="txtal mgt20 mgb20"><h1><span class="SouligneOrange">{$texte[10]}</span></h1></div>
          <div class="EventBox" data-equalizer-watch>
               {foreach from=$event key=i item=k}
                    <a href="{$master_url}/evenement/{$k['event_id']}">
                         <div class="row">
                              <div class="small-12 large-6 columns">
                                   <div class="fs18px mgr5 mgl15 pdb8 pdt8 txtal lh20 pneutre c1">{$k['date']}</div>
                              </div>
                              <div class="small-12 large-6 columns">
                                   <div class="fs18px mgr5 mgl15 pdr4 pdt8 txtal lh20 pneutre c1">{$k['titre']}</div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="small-12 columns">
                                   <div class="fs15px mgr5 mgl10 txtaj lh15 pneutre pdb8 c1">{$k['contenu']}</div>
                              </div>
                         </div>
                    </a>
                    <div class="row"><div class="small-12 columns"><div class="TraitOrange"></div></div></div>
               {/foreach}
                <div class="pdt5 pdb5"></div>
          </div>
     </div>
     <div class="small-12 medium-6 columns">
          <div class="txtal mgt20 mgb20"><h1><span class="SouligneOrange">{$texte[8]}</span></h1></div>
          <div class="EventBox" data-equalizer-watch>
               {foreach from=$actu key=i item=k}
                    <a href="{$master_url}/news/{$k['id_actu']}">
                         <div class="row">
                              <div class="small-12 large-6 columns">
                                   <div class="fs18px mgr5 mgl15 pdb8 pdt8 txtal lh20 pneutre c1">{$k['date']}</div>
                              </div>
                              <div class="small-12 large-6 columns">
                                   <div class="fs18px mgr5 mgl15 pdr4 pdt8 txtal lh20 pneutre c1">{$k['titre']}</div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="small-12 columns">
                                   <div class="fs15px mgr10 mgl10 txtaj lh15 pneutre pdb8 c1">{$k['accroche']}</div>
                              </div>
                         </div>
                    </a>
                    <div class="row"><div class="small-12 columns"><div class="TraitOrange"></div></div></div>
               {/foreach}
          </div>
     </div>
</div>

{include file="$footer_tpl"}