<?php
/* Smarty version 3.1.29, created on 2016-07-09 13:36:59
  from "/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/info.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5780fdfb24cb39_45742852',
  'file_dependency' => 
  array (
    'cc666ae61d79fc3a3d966e3f752c8e70b0718275' => 
    array (
      0 => '/var/www/vhosts/myocosplay.eu/httpdocs/themes/webi/info.tpl',
      1 => 1467108455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5780fdfb24cb39_45742852 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['header_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>



<div class="pdt20 pdb20"></div>
<!-- titre page -->
<div class="row">
    <div class="small-12 columns">
        <div class="news_titre fs22px"><h1><span class="trait_orange"><?php echo $_smarty_tpl->tpl_vars['cms']->value["titre"];?>
</span></h1></div>
        
    </div>
</div>

<div class="pdt30 pdsb30"></div>

<div class="row">
    <div class="small-12 medium-3 columns">
        <div class="txtac fs18px"><span class="trait_orange"><?php echo $_smarty_tpl->tpl_vars['cms']->value["date"];?>
</span></div>
    </div>
    <div class="small-12 medium-9 columns">
        <div class="txtaj"><?php echo $_smarty_tpl->tpl_vars['cms']->value["contenu"];?>
</div>
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

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['footer_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
