function calculTotal(input){
	var qte = document.getElementById(input.id).value;
	var montant = document.getElementById("montant"+input.id).innerHTML;
	var total = qte*montant;
	document.getElementById("total"+input.id).innerHTML = total;
}