<?php
$this->load->helper('url');
?>

<div id="contenu">
	<h2>Modifier la fiche de frais du mois <?php echo $numMois."-".$numAnnee; ?> | Identifiant visiteur: <?php echo $idVisiteur ?></h2>
					
	<?php if(!empty($notify)) echo '<p id="notify" >'.$notify.'</p>';?>
	 
	<form method="post"  action="<?php echo base_url("c_comptable/majForfait/".$numAnnee.$numMois.'/'.$idVisiteur);?>">
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
								<input name="lesFrais['.$idFrais.']" disabled="disabled" type="text" id="'.$idFrais.'" size="10" maxlength="5" value="'.$quantite.'" />
							</td>
							<td>
								<input name="lesMontants['.$idFrais.']" required="required" type="text" id="montant'.$idFrais.'" size="10" maxlength="5" value="'.$montant.'" onchange="calculTotal('.$idFrais.')"/>€ 
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
				<td><b>Total forfaitisé :</b></td>
				<td><label id="totalfinal">0</label></td>
				</tr>
				</table>
				<br>
				<div id="erreurSaisi"></div>
			</fieldset>
		</div>
		<div class="piedForm">
			<p>
				<input class="button" id="ok" type="submit" value="Enregistrer" size="20" onclick="verifCaractereAutorise()" />
				<input class="button" id="annuler" type="reset" value="Effacer" size="20" />
			</p> 
		</div>
	</form>


</div>
