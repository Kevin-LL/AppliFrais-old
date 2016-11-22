<?php
	$this->load->helper('url');
?>

<div id="contenu">
	<h2>Détail de la fiche de frais du mois <?php echo $numMois."-".$numAnnee; ?> | Identifiant visiteur: <?php echo $idVisiteur ?></h2>
					
	<div class="corpsForm">
	  
		<fieldset>
			<legend>Eléments forfaitisés</legend>
			<?php
				foreach ($lesFraisForfait as $unFrais)
				{
					$idFrais = $unFrais['idfrais'];
					$libelle = $unFrais['libelle'];
					$quantite = $unFrais['quantite'];

					echo 
					'<p>
						<label for="'.$idFrais.'">'.$libelle.'</label>
						<input type="text" readonly id="'.$idFrais.'" name="lesFrais['.$idFrais.']" size="10" maxlength="5" value="'.$quantite.'" />
					</p>
					';
				}
			?>
		</fieldset>
		<p></p>
	</div>
</div>
