function validarNombre() {
            		var nombre=document.getElementById("id-nombre").value.trim();
                    var rgExp= /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (nombre.length < 2 && nombre.length > 20) {
                        document.getElementById("errorNombre").innerHTML="El nombre tiene menos de 2 caracteres o mas de 20 caracteres";
                    }
                    else if (!rgExp.test(nombre)){
                        document.getElementById("errorNombre").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorNombre").innerHTML="";
                    }
                }

function validarApellidoUno() {
            		var apellidoUno=document.getElementById("id-nombre").value.trim();
                    var rgExp= /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (apellidoUno.length < 2 && apellidoUno.length > 20) {
                        document.getElementById("errorApellidoUno").innerHTML="El nombre tiene menos de 2 caracteres o mas de 20 caracteres";
                    }
                    else if (!rgExp.test(apellidoUno)){
                        document.getElementById("errorApellidoUno").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorApellidoUno").innerHTML="";
                    }
                }

function validarApellidoDos() {
            		var ApellidoDos=document.getElementById("id-nombre").value.trim();
                    var rgExp= /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (ApellidoDos.length < 2 && ApellidoDos.length > 20) {
                        document.getElementById("errorApellidoDos").innerHTML="El nombre tiene menos de 2 caracteres o mas de 20 caracteres";
                    }
                    else if (!rgExp.test(ApellidoDos)){
                        document.getElementById("errorApellidoDos").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorApellidoDos").innerHTML="";
                    }
                }

function validarDNI() {
            		var dni=document.getElementById("id-nombre").value.trim();
                    var rgExp= /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (dni.length < 2 && dni.length > 20) {
                        document.getElementById("errorDNI").innerHTML="El nombre tiene menos de 2 caracteres o mas de 20 caracteres";
                    }
                    else if (!rgExp.test(dni)){
                        document.getElementById("errorDNI").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorDNI").innerHTML="";
                    }
                }
                
function validarTelefono() {
            		var telefono=document.getElementById("id-tlf").value.trim();
                    var rgExp= /^[9876][0-9]{8}$/;
        
                    if (telefono.length != 9) {
                        document.getElementById("errorTelefono").innerHTML="El teléfono no tiene 9 caracteres";
                    }
                    else if (!rgExp.test(telefono)){
                        document.getElementById("errorTelefono").innerHTML="El telefono tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorTelefono").innerHTML="";
                    }
                }
                
function validarDireccion() {
            		var direccion=document.getElementById("id-direccion").value.trim();
                    var rgExp= /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (direccion.length < 2 && direccion.length > 20) {
                        document.getElementById("errorDireccion").innerHTML="El nombre tiene menos de 2 caracteres o mas de 20 caracteres";
                    }
                    
                    else if (!rgExp.test(direccion)){
                        document.getElementById("errorDireccion").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorDireccion").innerHTML="";
                    }
                }
                
function validarCiudad() {
            		var ciudad=document.getElementById("id-ciudad").value.trim();
                    var rgExp= /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{3,30}$/;
        
                    if (ciudad.length < 3 && ciudad.length > 30) {
                        document.getElementById("errorCiudad").innerHTML="El nombre tiene menos de 3 caracteres o mas de 30 caracteres";
                    }
                    else if (!rgExp.test(ciudad)){
                        document.getElementById("errorCiudad").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorCiudad").innerHTML="";
                    }
                    }

function validarEmail() {
            		var email=document.getElementById("id-ciudad").value.trim();
                    var rgExp= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        
                    if (email.length < 3 && email.length > 30) {
                        document.getElementById("errorEmail").innerHTML="El nombre tiene menos de 3 caracteres o mas de 30 caracteres";
                    }
                    else if (!rgExp.test(email)){
                        document.getElementById("errorEmail").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorEmail").innerHTML="";
                    }
                    }

function validarTurno() {
            		var turno=document.getElementById("id-ciudad").value.trim();
                    var rgExp= /^(?:0?[1-9]|1[0-2]):[0-5][0-9]/;
        
                    if (turno.length < 3 && turno.length > 30) {
                        document.getElementById("errorTurno").innerHTML="El nombre tiene menos de 3 caracteres o mas de 30 caracteres";
                    }
                    else if (!rgExp.test(turno)){
                        document.getElementById("errorTurno").innerHTML="El nombre tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorTurno").innerHTML="";
                    }
                    }
                    
function deshabilitarBoton() {
                	var spanNombre = document.getElementById("errorNombre");
                	var boton = document.getElementById("botonConfirmar");
                	
                	if (spanNombre.length > 0) {
                		boton.disabled = true;
                	}
                	else {
                		boton.disabled = false;
                	}
                }