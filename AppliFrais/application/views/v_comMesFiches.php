<?php
	$this->load->helper('url');
?>
<div id="contenu">
	<h2>Liste des fiches de frais à Valider</h2>
	 	
	<?php if(!empty($notify)) echo '<p id="notify" >'.$notify.'</p>';?>
	 
	<table class="listeLegere">
		<thead>
			<tr>
				<th>Mois</th>
				<th>Visiteurs</th>
				<th>Etat</th>  
				<th>Montant</th>  
				<th>Date modif.</th>  
				<th colspan="4">Actions</th>              
			</tr>
		</thead>
		<tbody>
          
		<?php    
			foreach( $fichesComptable as $uneFiche) 
			{
				$modLink = '';
				$validLink = '';
				$denyLink = '';

				if ($uneFiche['idEtat'] == 'CL') {
					$modLink = anchor('c_comptable/modFiche/'.$uneFiche['mois'].'/'.$uneFiche['idVisiteur'], 'Modifier',  'title="Modifier la fiche"');
					$validLink = anchor('c_comptable/validFiche/'.$uneFiche['mois'].'/'.$uneFiche['idVisiteur'], 'Valider',  'title="Valider la fiche" onclick="return confirm(\'Voulez-vous vraiment valider cette fiche ?\');"');
					$denyLink = anchor('c_comptable/refuFiche/'.$uneFiche['mois'].'/'.$uneFiche['idVisiteur'], 'Refuser',  'title="Refuser la fiche"');
				}
				
				echo 
				'<tr>
					<td class="date">'.anchor('c_comptable/voirFicheComptable/'.$uneFiche['mois'].'/'.$uneFiche['idVisiteur'], $uneFiche['mois'], $uneFiche['idVisiteur'], 'title="Consulter la fiche"').'</td>
					<td class="libelle">'.$uneFiche['idVisiteur'].'&nbsp;'.$uneFiche['nom'].'</td>
					<td class="libelle">'.$uneFiche['libelle'].'</td>
					<td class="montant">'.$uneFiche['montantValide'].'</td>
					<td class="date">'.$uneFiche['dateModif'].'</td>
					<td class="action">'.$modLink.'</td>
					<td class="actionvalid">'.$validLink.'</td>
					<td class="actiondeny">'.$denyLink.'</td>
				</tr>';
			}
		?>	  
		</tbody>
    </table>

</div>
