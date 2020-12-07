var ArrayfechaHoraCompleto = document.getElementsByClassName("textoCasosContenidoConFormatoFechaHora");

window.onload = function separacionFechaYHora() {
	
	for (i = 0; i < ArrayfechaHoraCompleto.length; i++) {
		
		var fecha = ArrayfechaHoraCompleto[i].innerHTML.split("T")[0];
		var hora = ArrayfechaHoraCompleto[i].innerHTML.split("T")[1];
		
		
		//Recolocación de la fecha
		var fechaDia = fecha.split("-")[2];
		var fechaMes = fecha.split("-")[1];
		var fechaAño = fecha.split("-")[0];
			
		document.getElementsByClassName("textoCasosContenidoConFormatoFechaHora")[i].innerHTML = fechaDia+"-"+fechaMes+"-"+fechaAño+"<br />"+hora;
	

	}
		
}
