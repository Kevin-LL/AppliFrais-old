<?php
	$this->load->helper('url');
	$path = base_url();
?>

<div id="contenu">
	<h2>Refuser une fiche</h2>
<p>
	<form action="<?php echo $path.'c_comptable/refuConfirm/'.$mois.'/'.$idVisiteur;?>" method="post">
		<label for="commentaire">Commentaire*</label>
		<input id="commentaire" type="text" name="commentaire" size="30" maxlength="45"/>
		<input type="submit" value="Confirmer le refus" name="valider"/>
	</form>
	<form action="<?php echo $path.'c_comptable/fichesComptable';?>" method="post"><input type="submit" value="Annuler" name="annuler"/></form>
</p>
</div>