function pulsarStar(id,idProfesional) {
	var label_id = id.split("_")[0];
	var puntuacion = id.split("_")[1]; 
	
	if(puntuacion == '5') {
		$("#" + label_id + "_5").css("color", "orange");
		$("#" + label_id + "_4").css("color", "orange");
		$("#" + label_id + "_3").css("color", "orange");
		$("#" + label_id + "_2").css("color", "orange");
		$("#" + label_id + "_1").css("color", "orange");
	}
	else if (puntuacion == '4'){
		$("#" + label_id + "_5").css("color", "grey"); //cuales pongo gris
		$("#" + label_id + "_4").css("color", "orange");
		$("#" + label_id + "_3").css("color", "orange");
		$("#" + label_id + "_2").css("color", "orange");
		$("#" + label_id + "_1").css("color", "orange");
	}
	
	else if (puntuacion == '3'){
		$("#" + label_id + "_5").css("color", "grey");
		$("#" + label_id + "_4").css("color", "grey"); //cuales pongo gris
		$("#" + label_id + "_3").css("color", "orange");
		$("#" + label_id + "_2").css("color", "orange");
		$("#" + label_id + "_1").css("color", "orange");
	}
	
	else if (puntuacion == '2'){
		$("#" + label_id + "_5").css("color", "grey");
		$("#" + label_id + "_4").css("color", "grey"); //cuales pongo gris
		$("#" + label_id + "_3").css("color", "grey");
		$("#" + label_id + "_2").css("color", "orange");
		$("#" + label_id + "_1").css("color", "orange");
	}
	
	else if (puntuacion == '1'){
		$("#" + label_id + "_5").css("color", "grey");
		$("#" + label_id + "_4").css("color", "grey"); //cuales pongo gris
		$("#" + label_id + "_3").css("color", "grey");
		$("#" + label_id + "_2").css("color", "grey");
		$("#" + label_id + "_1").css("color", "orange");
	}
	puntuacionStar(idProfesional,puntuacion);
}
function puntuacionStar(idProfesional,nuevaValoracion) {
	$.ajax({
		  type: "GET",
		  url: base_url + "profesional/enviarStar?id="+ idProfesional + "&nuevaValoracion=" + nuevaValoracion,
		  success:  function (response) {
					//alert(response);
					
		        }

		});
}

