{include file="$header_tpl"}

<div class="row">
	<div class="small-12 columns">
		<div class="txtac">Page de connexion</div>
	</div>
</div>

<div class="row">
	<div class="small-12 columns">
        <div class="">
			<form method="post">
				<div class="row">   
                    <div class="small-12 medium-6 columns">
                        <label for="Login"> Login : </label>
                        <input type="text" name="Login" required />
                    </div>
                    <div class="small-12 medium-6 columns">
                        <label for="Password"> Password : </label>
                        <input type="password" name="Password" required />
                    </div>
                </div>
				<div class="row">
                    <div class="medium-6 columns">
                        <input type="submit" value="connexion" />
                    </div>
                </div>
			</form>
		</div>
    </div>
</div>

{include file="$footer_tpl"}