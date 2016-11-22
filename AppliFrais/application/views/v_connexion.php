<?php
	$this->load->helper('url');
	$path = base_url();
?>

<div id="contenu">
	<h2>Identification utilisateur</h2>

	<?php if (isset($erreur))	echo '<div class ="erreur"><ul><li>'.$erreur.'</li></ul></div>'; ?>

	<form method="POST" action="<?php echo $path.'c_default/connecter';?>">
		<p>
			<label for="login">Login*</label>
			<input id="login" type="text" name="login"  size="30" maxlength="45"/>
		</p>
		<p>
			<label for="nom">Mot de passe*</label>
			<input id="mdp"  type="password"  name="mdp" size="30" maxlength="45"/>
		</p>
		<p>
			<input type="submit" value="Valider" name="valider"/>
			<input type="reset" value="Annuler" name="annuler"/> 
		</p>
	</form>

<img src="http://jigsaw.w3.org/css-validator/images/vcss"></img>
<img src="https://validator.w3.org/images/valid_icons/valid-xhtml10"></img>
</div>