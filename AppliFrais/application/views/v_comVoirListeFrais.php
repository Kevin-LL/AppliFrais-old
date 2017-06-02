<?php
	$this->load->helper('url');
?>

<div id="contenu">
	<h2>Détail de la fiche de frais du mois <?php echo $numMois."-".$numAnnee; ?> | Identifiant visiteur: <?php echo $idVisiteur ?></h2>
					
	<div class="corpsForm">
	  
		<fieldset>
			<legend>Eléments forfaitisés</legend>
				<table>
				<tr>
				<th></th>
				<th>Quantite</th>
				<th>Montant</th>
				</tr>
				<?php
					foreach ($lesFraisForfait as $unFrais)
					{
						$idFrais = $unFrais['idfrais'];
						$libelle = $unFrais['libelle'];
						$quantite = $unFrais['quantite'];
						$montant = $unFrais['montant'];

						echo 
						'
						<tr>
							<td>
								<label for="'.$idFrais.'">'.$libelle.'</label>
							</td>
							<td>
								<input name="lesFrais['.$idFrais.']" disabled="disabled" type="text" id="'.$idFrais.'" size="10" maxlength="5" value="'.$quantite.'" onchange="calculTotal('.$idFrais.')" />
							</td>
							<td>
								<input name="lesMontants['.$idFrais.']" disabled="disabled" type="text" id="montant'.$idFrais.'" size="10" maxlength="5" value="'.$montant.'"/>€
							</td>
						</tr>
						';
					}
				?>
				</table>
		</fieldset>
		<p></p>
	</div>
	
	
	<table class="listeLegere">
		<caption>Descriptif des éléments hors forfait</caption>
		<tr>
			<th>Date</th>
			<th>Libellé</th>  
			<th>Montant</th>
			<th>&nbsp;</th>			
		</tr>
          
		<?php    
			foreach( $lesFraisHorsForfait as $unFraisHorsForfait) 
			{
				$libelle = $unFraisHorsForfait['libelle'];
				$date = $unFraisHorsForfait['date'];
				$montant=$unFraisHorsForfait['montant'];
				$id = $unFraisHorsForfait['id'];
				echo 
				'<tr>
					<td class="date">'.$date.'</td>
					<td class="libelle">'.$libelle.'</td>
					<td class="montant">'.$montant.'</td>
					<td class="action">'.
					anchor(	"c_visiteur/supprFrais/$id", 
							"Supprimer ce frais", 
							'title="Suppression d\'une ligne de frais" onclick="return confirm(\'Voulez-vous vraiment supprimer ce frais ?\');"'
						).
					'</td>
				</tr>';
			}
		?>	  
                                          
    </table>

</div>
