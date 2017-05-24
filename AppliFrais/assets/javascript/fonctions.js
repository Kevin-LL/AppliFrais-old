function calculTotal(idFrais){
	var id = idFrais.id;
	var qte = document.getElementById(id).value;
	var montant = document.getElementById("montant"+id).value;
	
	if (isNaN(montant) || isNaN(qte)) 
	{
		if (isNaN(qte)){
			document.getElementById(id).style.color='red';
			document.getElementById("erreurSaisi").innerHTML ="Caractère(s) non valide(s) pour la quantité";
			
		}	
		if(isNaN(montant)){
			document.getElementById("montant"+id).style.color='red';
			document.getElementById("erreurSaisi").innerHTML ="Caractère(s) non valide(s) pour le montant";
		}		
	}else{
		document.getElementById(id).style.color='black';
		document.getElementById("montant"+id).style.color='black';
		document.getElementById("erreurSaisi").innerHTML ="";
		
		calculTotalDisplay(); //Fonction chargée dans le template (onload)
	}
}

function calculTotalDisplay(){
		//recherche les quantites
		var qte1 = document.getElementById("ETP").value;
		var qte2 = document.getElementById("KM").value;
		var qte3 = document.getElementById("NUI").value;
		var qte4 = document.getElementById("REP").value;
		
		//recherche les montant
		var montant1 = document.getElementById("montantETP").value;
		var montant2 = document.getElementById("montantKM").value;
		var montant3 = document.getElementById("montantNUI").value;
		var montant4 = document.getElementById("montantREP").value;
		
		//total de chaque lignes
		var t1 = parseFloat(qte1)*parseFloat(montant1);
		document.getElementById("totalETP").innerHTML = t1.toFixed(2)+"€";
		var t2 = parseFloat(qte2)*parseFloat(montant2);
		document.getElementById("totalKM").innerHTML = t2.toFixed(2)+"€";
		var t3 = parseFloat(qte3)*parseFloat(montant3);
		document.getElementById("totalNUI").innerHTML = t3.toFixed(2)+"€";
		var t4 = parseFloat(qte4)*parseFloat(montant4);
		document.getElementById("totalREP").innerHTML = t4.toFixed(2)+"€";
		
		//totalfinal
		var totalfinal = parseFloat(t1)+parseFloat(t2)+parseFloat(t3)+parseFloat(t4);
		document.getElementById("totalfinal").innerHTML = totalfinal.toFixed(2)+"€";
}

function checkMontant(txtMontantHF){
	var montant = document.getElementById(txtMontantHF.id).value;
	
	if (isNaN(montant)){
			document.getElementById(txtMontantHF.id).style.color='red';
			document.getElementById("erreurSaisiMontant").innerHTML ="Caractère(s) non valide(s) pour le montant";
	}else{
			document.getElementById(txtMontantHF.id).style.color='black';
			document.getElementById("erreurSaisiMontant").innerHTML ="";
	}
}
