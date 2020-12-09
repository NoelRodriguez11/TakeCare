function validarNombrePac() {
            		var nombre=document.getElementById("id-nombre").value.trim();
                    var rgExp= /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (nombre.length < 2 && nombre.length > 20) {
                        document.getElementById("errorNombrePac").innerHTML="El nombre tiene menos de 2 caracteres o mas de 20 caracteres";
                    }
                    else if (!rgExp.test(nombre)){
                        document.getElementById("errorNombrePac").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorNombrePac").innerHTML="";
                    }
                }
         
function validarTelefonoPac() {
            		var telefono=document.getElementById("id-telefono").value.trim();
                    var rgExp= /^[9876][0-9]{8}$/;
        
                    if (telefono.length != 9) {
                        document.getElementById("errorTelefonoPac").innerHTML="El teléfono no tiene 9 caracteres";
                    }
                    else if (!rgExp.test(telefono)){
                        document.getElementById("errorTelefonoPac").innerHTML="El telefono tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorTelefonoPac").innerHTML="";
                    }
                }
                
function validarDireccionPac() {
            		var direccion=document.getElementById("id-direccion").value.trim();
                    var rgExp= /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (direccion.length < 2 && direccion.length > 20) {
                        document.getElementById("errorDireccionPac").innerHTML="El nombre tiene menos de 2 caracteres o mas de 20 caracteres";
                    }
                    
                    else if (!rgExp.test(direccion)){
                        document.getElementById("errorDireccionPac").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorDireccionPac").innerHTML="";
                    }
                }
                
function validarCiudadPac() {
            		var ciudad=document.getElementById("id-ciudad").value.trim();
                    var rgExp= /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{3,30}$/;
        
                    if (ciudad.length < 3 && ciudad.length > 30) {
                        document.getElementById("errorCiudadPac").innerHTML="El nombre tiene menos de 3 caracteres o mas de 30 caracteres";
                    }
                    else if (!rgExp.test(ciudad)){
                        document.getElementById("errorCiudadPac").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorCiudadPac").innerHTML="";
                    }
                    }
                   
function deshabilitarBotonPac() {
                	var spanNombre = document.getElementById("errorNombrePac");
                	var boton = document.getElementById("botonConfirmarPac");
                	
                	if (spanNombre.length > 0) {
                		boton.disabled = true;
                	}
                	else {
                		boton.disabled = false;
                	}
                }