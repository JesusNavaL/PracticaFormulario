function validarfor(){
	var nom = document.getElementById("nombre").value;
    var apater = document.getElementById("ap").value;
    var amater = document.getElementById("am").value;

	if((nom == "")||(apater == "")||(amater == "")){
		alert("Los campos no pueden quedar vacios");
        return true;
	}
}