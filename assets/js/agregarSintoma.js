function agregarSintoma() {
	
	var sintoma = document.getElementById("sintoma").value;
	var textareaSintomas = document.getElementById("listaSintomas").innerHTML;
	
	textareaSintomas.innerHTML += sintoma;
	
			
}
