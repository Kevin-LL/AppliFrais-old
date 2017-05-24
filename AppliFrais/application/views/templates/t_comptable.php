<?php
	$this->load->helper('url');
	$v_path = base_url('application/views');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

	<head>
		<title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="<?php echo $v_path.'/templates/css/styles.css'?>" rel="stylesheet" type="text/css" />

		<script language="JavaScript">
			function hideNotify() {
				document.getElementById("notify").style.display = "none";
			}
		</script>
		<script src="<?php echo js_url('fonctions.js');?>"></script>
		<script type="JavaScript">calculTotal();</script>
		
	</head>

	<body onload="calculTotalDisplay();"><!--<body onload="setTimeout(hideNotify,7000);">-->
		<div id="page">
			<div id="entete">
				<img src="<?php echo $v_path.'/templates/images/logo.jpg'?>" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />
				<h1>Gestion des frais de déplacements</h1>
			</div>
			
			<!-- Division pour le menu -->
			<div id="menuGauche">
				<div id="infosUtil">
					<h2>Comptable :
					<br/>
					<?php echo $this->session->userdata('prenom')."  ".$this->session->userdata('nom');  ?>
					</h2>
				</div>  
				
				<ul id="menuList">
					<li class="smenu">
						<?php echo anchor('c_comptable/', 'Accueil', 'title="Page d\'accueil"'); ?>
					</li>
					<li class="smenu">
						<?php echo anchor('c_comptable/fichesComptable', 'Gérer les fiches de frais', 'title="Consultation des fiches de frais"'); ?>
					</li>
					<br/>
					<li class="smenu">
						<?php echo anchor('c_comptable/deconnecter', 'Se déconnecter', 'title="Déconnexion"'); ?>
					</li>
				</ul>
				
			</div>

			<?php echo $body; ?>

			<div id="pied">
				<img src="http://jigsaw.w3.org/css-validator/images/vcss"></img>
				<img src="https://validator.w3.org/images/valid_icons/valid-xhtml10"></img>
			</div>

		</div>    

	</body>
</html>

	  