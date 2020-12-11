var ArrayfechaHoraCompleto = document.getElementsByClassName("textoCasosContenidoConFormatoFechaHora");
var ArrayfechaHoraCompletoInformacion = document.getElementsByClassName("textoCasosContenidoConFormatoFechaHoraInformacion");


function separacionFechaYHora() {
	
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

function separacionFechaYHoraInformacion() {
	
	for (i = 0; i < ArrayfechaHoraCompletoInformacion.length; i++) {
		
		var fechaInfo = ArrayfechaHoraCompletoInformacion[i].innerHTML.split("T")[0];
		var horaInfo = ArrayfechaHoraCompletoInformacion[i].innerHTML.split("T")[1];
		
		
		//Recolocación de la fecha
		var fechaDiaInfo = fechaInfo.split("-")[2];
		var fechaMesInfo = fechaInfo.split("-")[1];
		var fechaAñoInfo = fechaInfo.split("-")[0];
			
		document.getElementsByClassName("textoCasosContenidoConFormatoFechaHoraInformacion")[i].innerHTML = fechaDiaInfo+"/"+fechaMesInfo+"/"+fechaAñoInfo+"   -  "+horaInfo;
	

	}
}

window.addEventListener("load", myInit, true); function myInit(){
	separacionFechaYHora();
	separacionFechaYHoraInformacion();	
}