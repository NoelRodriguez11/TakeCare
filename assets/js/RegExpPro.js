function validarNombrePro() {
            		var nombre=document.getElementById("id-nombre").value.trim();
                    var rgExp= /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (nombre.length < 2 && nombre.length > 20) {
                        document.getElementById("errorNombrePro").innerHTML="El nombre tiene menos de 2 caracteres o mas de 20 caracteres";
                    }
                    else if (!rgExp.test(nombre)){
                        document.getElementById("errorNombrePro").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorNombrePro").innerHTML="";
                    }
                }
           
function validarTelefonoPro() {
            		var telefono=document.getElementById("id-telefono").value.trim();
                    var rgExp= /^[9876][0-9]{8}$/;
        
                    if (telefono.length != 9) {
                        document.getElementById("errorTelefonoPro").innerHTML="El teléfono no tiene 9 caracteres";
                    }
                    else if (!rgExp.test(telefono)){
                        document.getElementById("errorTelefonoPro").innerHTML="El telefono tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorTelefonoPro").innerHTML="";
                    }
                }

function validarEmailPro() {
            		var email=document.getElementById("id-email").value.trim();
                    var rgExp= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        
                    if (email.length < 3 && email.length > 30) {
                        document.getElementById("errorEmailPro").innerHTML="El nombre tiene menos de 3 caracteres o mas de 30 caracteres";
                    }
                    else if (!rgExp.test(email)){
                        document.getElementById("errorEmailPro").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorEmailPro").innerHTML="";
                    }
                    }

function validarClinicaPro() {
            		var turno=document.getElementById("id-franja").value.trim();
                    var rgExp= /^(?:0?[1-9]|1[0-2]):[0-5][0-9]/;
        
                    if (turno.length < 3 && turno.length > 30) {
                        document.getElementById("errorClinicaPro").innerHTML="El nombre tiene menos de 3 caracteres o mas de 30 caracteres";
                    }
                    else if (!rgExp.test(turno)){
                        document.getElementById("errorClinicaPro").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorClinicaPro").innerHTML="";
                    }
                    }

function validarFranjaPro() {
            		var turno=document.getElementById("id-franja").value.trim();
                    var rgExp= /^(?:0?[1-9]|1[0-2]):[0-5][0-9]/;
        
                    if (turno.length < 3 && turno.length > 30) {
                        document.getElementById("errorFranjaPro").innerHTML="El nombre tiene menos de 3 caracteres o mas de 30 caracteres";
                    }
                    else if (!rgExp.test(turno)){
                        document.getElementById("errorFranjaPro").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorFranjaPro").innerHTML="";
                    }
                    }
                    
function deshabilitarBotonPro() {
                	var spanNombre = document.getElementById("errorNombrePro");
                	var boton = document.getElementById("botonConfirmarPro");
                	
                	if (spanNombre.length > 0) {
                		boton.disabled = true;
                	}
                	else {
                		boton.disabled = false;
                	}
                }