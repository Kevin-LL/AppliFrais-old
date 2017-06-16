<?php
	$this->load->helper('url');
	$path = base_url();
?>

<div id="contenu">
	<h2>Refuser la fiche de frais du mois <?php echo $numMois."-".$numAnnee; ?> | Identifiant visiteur: <?php echo $idVisiteur ?></h2>
<p>
	<form method="post" action="<?php echo base_url("c_comptable/refuConfirm/".$numAnnee.$numMois.'/'.$idVisiteur);?>">
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
	<form method="post" action="<?php echo base_url("c_comptable/fichesComptable");?>">
	<input class="button" type="submit" value="Retour" name="Retour"/>
	</form>
</p>
</div>