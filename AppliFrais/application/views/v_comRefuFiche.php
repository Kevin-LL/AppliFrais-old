<?php
	$this->load->helper('url');
	$path = base_url();
?>

<div id="contenu">
	<h2>Refuser la fiche de frais du mois <?php echo $numMois."-".$numAnnee; ?> | Identifiant visiteur: <?php echo $idVisiteur ?></h2>
<p>
	<form action="<?php echo $path.'c_comptable/refuConfirm/'.$mois.'/'.$idVisiteur;?>" method="post">
	<div class="corpsForm">
		<fieldset>
		<legend>Ajouter un commentaire</legend>
		<br>
		<textarea style="height:60px; width:220px; max-height:160px; max-width:460px;" id="commentaire" type="text" name="commentaire" size="30" maxlength="256"></textarea>
		<br><br>
		<input class="button" type="submit" value="Confirmer le refus" name="valider"/>
		<input class="button" id="annuler" type="reset" value="Effacer"/>
		</fieldset>
	</div>
	</form>
	<form action="<?php echo $path.'c_comptable/fichesComptable';?>" method="post">
	<input class="button" type="submit" value="Retour" name="Retour"/>
	</form>
</p>
</div>