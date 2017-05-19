<?php
	$this->load->helper('url');
?>

<div id="contenu">
	<h2>Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee; ?></h2>
					
	<?php if(!empty($notify)) echo '<p id="notify" >'.$notify.'</p>';?>
	
	<div class="corpsForm">
	<?php if(isset($raison['raison'])) {
				  if($raison['raison'] != NULL) {
						echo "<fieldset><legend>Raison du refus</legend>Commentaire : <text id='refuCommentaire'>".$raison['raison']."</text></fieldset></br>";
				  }
				  }
	?>
	</div>
	<form method="post"  action="<?php echo base_url("c_visiteur/majForfait");?>">
		<div class="corpsForm">
		  
			<fieldset>
				<legend>Eléments forfaitisés</legend>
				<table>
				<tr>
				<th></th>
				<th>Quantite</th>
				<th>Montant</th>
				<th>Total</th>
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
								<input name="lesFrais['.$idFrais.']" required="required" type="text" id="'.$idFrais.'" size="10" maxlength="5" value="'.$quantite.'" onchange="calculTotal('.$idFrais.')" />
							</td>
							<td>
								<input name="lesMontants['.$idFrais.']" disabled="disabled" type="text" id="montant'.$idFrais.'" size="10" maxlength="5" value="'.$montant.'"/>
							</td>
							<td>
								<label id="total'.$idFrais.'" for="'.$idFrais.'">0</label>
							</td>
						</tr>
						';
					}
				?>
				<tr>
				<td></td>
				<td></td>
				<td><b>Total forfaitisés :</b></td>
				<td><label id="totalfinal">0</label></td>
				</tr>
				</table>
				</br>
				<div id="erreurSaisi"></div>
				<text>*Montants sous réserve de validation</text>
			</fieldset>
		</div>
		<div class="piedForm">
			<p>
				<input id="ok" type="submit" value="Enregistrer" size="20" />
				<input id="annuler" type="reset" value="Effacer" size="20" />
			</p> 
		</div>
	</form>

	
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

	<form method="post" action="<?php echo base_url("c_visiteur/ajouteFrais");?>">
		<div class="corpsForm">
			<fieldset>
				<legend>Nouvel élément hors forfait</legend>
				<p>
					<label for="txtDateHF">Date (jj/mm/aaaa): </label>
					<input type="text" id="txtDateHF" name="dateFrais" size="10" maxlength="10" value=""  />
				</p>
				<p>
					<label for="txtLibelleHF">Libellé</label>
					<input type="text" id="txtLibelleHF" name="libelle" size="60" maxlength="256" value="" />
				</p>
				<p>
					<label for="txtMontantHF">Montant : </label>
					<input type="text" id="txtMontantHF" name="montant" size="10" maxlength="10" value="" />
				</p>
			</fieldset>
		</div>
		<div class="piedForm">
			<p>
				<input id="ajouter" type="submit" value="Ajouter" size="20" />
				<input id="effacer" type="reset" value="Effacer" size="20" />
			</p> 
		</div>
	</form>
</div>
