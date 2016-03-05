<!-- fin div content -->
</div>


<!-- fin div maitre englobante -->
</div>

<!-- chargement des script foundation en fin de page... -->
<script src="{$master_url}/inc/js/foundation.min.js"></script>
<script src="{$master_url}/inc/js/foundation/foundation.topbar.js"></script>
<script src="{$master_url}/inc/js/jquery.cookie.js"></script>

<script>	
	//lancement du javascript Foundation
$(document).foundation({
  equalizer : {
    // Specify if Equalizer should make elements equal height once they become stacked.
    equalize_on_stack: true
  }
});

</script>
		
{if $debug != ""}
	<div class='th_debug'><b>DEBUG : </b>{$debug|var_dump} </div>
{/if}

</body>
</html>