<div class="container">
<br>
  <h5>¿Cómo quieres darte de alta?</h5>
  <script type="text/javascript">
function validarNombrepa() {
            		var nombre = document.getElementById("id-nompa").value.trim();
                    var rgExp = /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (nombre.length > 2 && nombre.length < 20) {
                        document.getElementById("errorNombrepa").innerHTML="";
                    
                     if (!rgExp.test(nombre)){
                        document.getElementById("errorNombrepa").innerHTML="El nombre tiene caracteres no validos";
                    }
                     else {
                     	document.getElementById("errorNombrepa").innerHTML="";
                    }
                }
                else {
                        document.getElementById("errorNombrepa").innerHTML="El nombre tiene menos de 3 caracteres o mas de 21 caracteres";
                    }
                }

function validarApellidoUnopa() {
            		var apellidoUno = document.getElementById("id-ape1pa").value.trim();
                    var rgExp = /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,30}$/;
        
                    if (apellidoUno.length > 2 && apellidoUno.length < 20) {
                        document.getElementById("errorApellidoUnopa").innerHTML="";
                    
                     if (!rgExp.test(apellidoUno)){
                        document.getElementById("errorApellidoUnopa").innerHTML="El primer apellido tiene caracteres no validos";
                    }
                     else {
                     	document.getElementById("errorApellidoUnopa").innerHTML="";
                    }
                }
                else {
                        document.getElementById("errorApellidoUnopa").innerHTML="El primer apellido tiene menos de 3 caracteres o mas de 21 caracteres";
                    }
                }

function validarApellidoDospa() {
            		var apellidoDos = document.getElementById("id-ape2pa").value.trim();
                    var rgExp = /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,30}$/;
        
                    if (apellidoDos.length > 2 && apellidoDos.length < 20) {
                        document.getElementById("errorApellidoDospa").innerHTML="";
                    
                     if (!rgExp.test(apellidoDos)){
                        document.getElementById("errorApellidoDospa").innerHTML="El segundo apellido tiene caracteres no validos";
                    }
                     else {
                     	document.getElementById("errorApellidoDospa").innerHTML="";
                    }
                }
                else {
                        document.getElementById("errorApellidoDospa").innerHTML="El segundo apellido tiene menos de 3 caracteres o mas de 21 caracteres";
                    }
                }

function validarDNIpa() {
            		var dni = document.getElementById("id-dnipa").value.trim();
                    var rgExp = /^\d{8}[ABCDEFGHJKMNPQRSTVWXYZ]$/;
        
                    if (dni.length == 9) {
                        document.getElementById("errorDNIpa").innerHTML="";
                    
                     if (!rgExp.test(dni)){
                        document.getElementById("errorDNIpa").innerHTML="El segundo dni tiene caracteres no validos";
                    }
                     else {
                     	document.getElementById("errorDNIpa").innerHTML="";
                    }
                }
                else {
                        document.getElementById("errorDNIpa").innerHTML="El dni no tiene 9 caracteres";
                    }
                }
                            
function validarContrapa() {
            		var contraseña = document.getElementById("id-pwdpa").value.trim();
                    var rgExp = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
        
                    if (contraseña.length >= 8 && contraseña.length <= 16) {
                        document.getElementById("errorPWDpa").innerHTML="";
                    
                     if (!rgExp.test(contraseña)){
                        document.getElementById("errorPWDpa").innerHTML="La contraseña tiene caracteres no validos, Mayúsculas, minúsculas y digitos necesarios";
                    }
                     else {
                     	document.getElementById("errorPWDpa").innerHTML="";
                    }
                }
                else {
                        document.getElementById("errorPWDpa").innerHTML="La contraseña tiene menos de 8 caracteres o mas de 16 caracteres";
                    }
                }
                
function validarTelefonopa() {
            		var telefono = document.getElementById("id-telefonopa").value.trim();
                    var rgExp = /^[0-9]{9}$/;
        
                    if (telefono.length == 9) {
                        document.getElementById("errorTelefonopa").innerHTML="";
                    
                    if (!rgExp.test(telefono)){
                        document.getElementById("errorTelefonopa").innerHTML="El teléfono tiene caracteres no validos o no empieza por 9, 8, 7 o 6";
                    }
                    else {
                    	document.getElementById("errorTelefonopa").innerHTML="";
                    }
                    }
                    else {
                        document.getElementById("errorTelefonopa").innerHTML="El teléfono tiene menos o más de 9 caracteres";
                    }
                }
                
                             
function validarEmailpa() {
            		var email = document.getElementById("id-emailpa").value.trim();
                    var rgExp = /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
        
                    if (email.length > 7 && email.length < 40) {
                        document.getElementById("errorEmailpa").innerHTML="";
						
						if (!rgExp.test(email)){
                        	document.getElementById("errorEmailpa").innerHTML="El nombre tiene caracteres no validos";
                    	}
                     	else {
                     		document.getElementById("errorEmailpa").innerHTML="";
                    	}	
                	}
                	else {
                        document.getElementById("errorEmailpa").innerHTML="El nombre tiene menos de 8 caracteres o mas de 40 caracteres";
                    }
                }
                    
function deshabilitarBotonpa() {
                	var spanNombre = document.getElementById("errorNombrepa").innerHTML;
                	var spanApellidoUno = document.getElementById("errorApellidoUnopa").innerHTML;
                	var spanApellidoDos = document.getElementById("errorApellidoDospa").innerHTML;
                	var spanDNI = document.getElementById("errorDNIpa").innerHTML;
                	var spanPWD = document.getElementById("errorPWDpa").innerHTML;
                	var spanTelefono = document.getElementById("errorTelefonopa").innerHTML;
                	var spanEmail = document.getElementById("errorEmailpa").innerHTML;
                	var boton = document.getElementById("botonRegistrarpa");
                	
                	if (spanNombre.length > 0 || spanApellidoUno.length > 0 || spanApellidoDos.length > 0 || spanDNI.length > 0 || spanPWD.length > 0 || spanTelefono.length > 0 || spanEmail.length > 0) {
                		boton.disabled = true;
                	}
                	else {
                		boton.disabled = false;
                	}
                }
                
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function validarNombrepr() {
            		var nombre = document.getElementById("id-nompr").value.trim();
                    var rgExp = /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (nombre.length > 2 && nombre.length < 20) {
                        document.getElementById("errorNombrepr").innerHTML="";
                    
                     if (!rgExp.test(nombre)){
                        document.getElementById("errorNombrepr").innerHTML="El nombre tiene caracteres no validos";
                    }
                     else {
                     	document.getElementById("errorNombrepr").innerHTML="";
                    }
                }
                else {
                        document.getElementById("errorNombrepr").innerHTML="El nombre tiene menos de 3 caracteres o mas de 21 caracteres";
                    }
                }

function validarApellidoUnopr() {
            		var apellidoUno = document.getElementById("id-ape1pr").value.trim();
                    var rgExp = /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,30}$/;
        
                    if (apellidoUno.length > 2 && apellidoUno.length < 20) {
                        document.getElementById("errorApellidoUnopr").innerHTML="";
                    
                     if (!rgExp.test(apellidoUno)){
                        document.getElementById("errorApellidoUnopr").innerHTML="El primer apellido tiene caracteres no validos";
                    }
                     else {
                     	document.getElementById("errorApellidoUnopr").innerHTML="";
                    }
                }
                else {
                        document.getElementById("errorApellidoUnopr").innerHTML="El primer apellido tiene menos de 3 caracteres o mas de 21 caracteres";
                    }
                }

function validarApellidoDospr() {
            		var apellidoDos = document.getElementById("id-ape2pr").value.trim();
                    var rgExp = /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,30}$/;
        
                    if (apellidoDos.length > 2 && apellidoDos.length < 20) {
                        document.getElementById("errorApellidoDospr").innerHTML="";
                    
                     if (!rgExp.test(apellidoDos)){
                        document.getElementById("errorApellidoDospr").innerHTML="El segundo apellido tiene caracteres no validos";
                    }
                     else {
                     	document.getElementById("errorApellidoDospr").innerHTML="";
                    }
                }
                else {
                        document.getElementById("errorApellidoDospr").innerHTML="El segundo apellido tiene menos de 3 caracteres o mas de 21 caracteres";
                    }
                }

function validarDNIpr() {
            		var dni = document.getElementById("id-dnipr").value.trim();
                    var rgExp = /^\d{8}[ABCDEFGHJKMNPQRSTVWXYZ]$/;
        
                    if (dni.length == 9) {
                        document.getElementById("errorDNIpr").innerHTML="";
                    
                     if (!rgExp.test(dni)){
                        document.getElementById("errorDNIpr").innerHTML="El segundo dni tiene caracteres no validos";
                    }
                     else {
                     	document.getElementById("errorDNIpr").innerHTML="";
                    }
                }
                else {
                        document.getElementById("errorDNIpr").innerHTML="El dni no tiene 9 caracteres";
                    }
                }           
                
function validarContrapr() {
            		var contraseña = document.getElementById("id-pwdpr").value.trim();
                    var rgExp = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
        
                    if (contraseña.length >= 8 && contraseña.length <= 16) {
                        document.getElementById("errorPWDpr").innerHTML="";
                    
                     if (!rgExp.test(contraseña)){
                        document.getElementById("errorPWDpr").innerHTML="La contraseña tiene caracteres no validos, Mayúsculas, minúsculas y digitos necesarios";
                    }
                     else {
                     	document.getElementById("errorPWDpr").innerHTML="";
                    }
                }
                else {
                        document.getElementById("errorPWDpr").innerHTML="La contraseña tiene menos de 8 caracteres o mas de 16 caracteres";
                    }
                }
                
function validarTelefonopr() {
            		var telefono = document.getElementById("id-telefonopr").value.trim();
                    var rgExp = /^[0-9]{9}$/;
        
                    if (telefono.length == 9) {
                        document.getElementById("errorTelefonopr").innerHTML="";
                    
                    if (!rgExp.test(telefono)){
                        document.getElementById("errorTelefonopr").innerHTML="El teléfono tiene caracteres no validos o no empieza por 9, 8, 7 o 6";
                    }
                    else {
                    	document.getElementById("errorTelefonopr").innerHTML="";
                    }
                    }
                    else {
                        document.getElementById("errorTelefonopr").innerHTML="El teléfono tiene menos o más de 9 caracteres";
                    }
                }
                
                             
function validarEmailpr() {
            		var email = document.getElementById("id-emailpr").value.trim();
                    var rgExp= /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
        
                    if (email.length > 7 && email.length < 40) {
                        document.getElementById("errorEmailpr").innerHTML="";
						
						if (!rgExp.test(email)){
                        	document.getElementById("errorEmailpr").innerHTML="El nombre tiene caracteres no validos";
                    	}
                     	else {
                     		document.getElementById("errorEmailpr").innerHTML="";
                    	}	
                	}
                	else {
                        document.getElementById("errorEmailpr").innerHTML="El nombre tiene menos de 8 caracteres o mas de 40 caracteres";
                    }
                }

function validarFranja() {
            		var franja = document.getElementById("id-franja").value.trim();
            		var opcionSeleccionada = document.getElementById("id-turno").options.selectedIndex;
                    var rgExpMañana = /^(0?[0-9]|1[012])(:[0-5]\d)(-(0?[0-9]|1[012]))(:[0-5]\d)$/;
                    var rgExpTarde = /^(1?[2-9]|2[0123])(:[0-5]\d)(-(1?[2-9]|2[0123]))(:[0-5]\d)$/;
                    var rgExpAmbos = /^([01]?[0-9]|2[0-3]):[0-5][0-9](-([01]?[0-9]|2[0-3])):[0-5][0-9]$/;
        
                    if(opcionSeleccionada == 0) {
                    	if(!rgExpMañana.test(franja)) {
                    		document.getElementById("errorFranja").innerHTML="Mañana seleccionada como turno de trabajo 00:00-11:59"
                    	}
                    	else{
                    		document.getElementById("errorFranja").innerHTML="";
                    	}
                    }
                    
                    else if(opcionSeleccionada == 1){
                    	if(!rgExpTarde.test(franja)) {
                    		document.getElementById("errorFranja").innerHTML="Tarde seleccionada como turno de trabajo 12:00-23:59"
                    	}
                    	else{
                    		document.getElementById("errorFranja").innerHTML="";
                    	}
                    }
                    
                    else {
                    	if(!rgExpAmbos.test(franja)) {
                    		document.getElementById("errorFranja").innerHTML="Error en el formato hh:mm"
                    	}
                    	else{
                    		document.getElementById("errorFranja").innerHTML="";
                    	}
                    }
                    
                    }
                    
function deshabilitarBotonpr() {
                	var spanNombre = document.getElementById("errorNombrepr").innerHTML;
                	var spanApellidoUno = document.getElementById("errorApellidoUnopr").innerHTML;
                	var spanApellidoDos = document.getElementById("errorApellidoDospr").innerHTML;
                	var spanDNI = document.getElementById("errorDNIpr").innerHTML;
                	var spanPWD = document.getElementById("errorPWDpr").innerHTML;
                	var spanTelefono = document.getElementById("errorTelefonopr").innerHTML;
                	var spanEmail = document.getElementById("errorEmailpr").innerHTML;
                	var spanFranja = document.getElementById("errorFranja").innerHTML;
                	var boton = document.getElementById("botonRegistrarpr");
                	
                	if (spanNombre.length > 0 || spanApellidoUno.length > 0 || spanApellidoDos.length > 0 || spanDNI.length > 0 || spanPWD.length > 0 || spanTelefono.length > 0 || spanEmail.length > 0 || spanFranja.length > 0) {
                		boton.disabled = true;
                	}
                	else {
                		boton.disabled = false;
                	}
                }
  </script>

    <button class="active btn btn-danger" onclick="cambiarImagenRegistro(1)" data-toggle="tab" href="#paciente">Paciente</button>
    <button class="btn btn-danger" onclick="cambiarImagenRegistro(2)" id="btnProfesional" data-toggle="tab" href="#profesional">Profesional</button>
<div class="row">
  <div class="tab-content col-sm-5">
    <div id="paciente" class="tab-pane fade in active ">
    <h1 class="textoexp1">Nuevo Paciente</h1>

        <form action="<?=base_url()?>hdu/anonymous/registrarPost" method="post" enctype="multipart/form-data">
        
        	<label for="id-nompa">Nombre</label>
        	<input id="id-nompa" type="text" name="nombre" required="required" onkeyup="validarNombrepa(),deshabilitarBotonpa()"/>
        	<span id="errorNombrepa" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-ape1pa">Primer Apellido</label>
        	<input id="id-ape1pa" type="text" name="primerApellido" required="required" onkeyup="validarApellidoUnopa(),deshabilitarBotonpa()"/>
        	<span id="errorApellidoUnopa" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-ape2pa">Segundo Apellido</label>
        	<input id="id-ape2pa" type="text" name="segundoApellido" required="required" onkeyup="validarApellidoDospa(),deshabilitarBotonpa()"/>
        	<span id="errorApellidoDospa" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-dnipa">DNI</label>
        	<input id="id-dnipa" type="text" name="dni" placeholder="00000000A" required="required" onkeyup="validarDNIpa(),deshabilitarBotonpa()"/>
        	<span id="errorDNIpa" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-fnac">Fecha de Nacimiento</label>
        	<input id="id-fnac" type="date" name="fechaNacimiento" required="required" value="2000-02-29"/>
        	<br/>
        	
        	<label for="id-genero">Género</label>
          	<select id="id-genero" name="genero">
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
            </select>
            <br>
            
            <label for="id-grupoSanguineo">Grupo Sanguíneo</label>
          	<select name="grupoSanguineo" id="id-grupoSanguineo">
            <option value="0+">0+</option>
            <option value="0-">0-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            </select>
            <br>
        	

        	
        	<label for="id-direccion">Dirección</label>
        	<input id="id-direccion" type="text" name="direccion" required="required"/>
        	<br/>
        	
        	<label for="id-ciudad">Ciudad/Zona</label>
        	<input id="id-ciudad" type="text" name="ciudad" required="required"/>
        	<br/>
        	
            <label for="id-provincia">Provincia</label>
            <select id="id-provincia" name="provincia">
                <option value='alava'>Álava</option>
                <option value='albacete'>Albacete</option>
                <option value='alicante'>Alicante/Alacant</option>
                <option value='almeria'>Almería</option>
                <option value='asturias'>Asturias</option>
                <option value='avila'>Ávila</option>
                <option value='badajoz'>Badajoz</option>
                <option value='barcelona'>Barcelona</option>
                <option value='burgos'>Burgos</option>
                <option value='caceres'>Cáceres</option>
                <option value='cadiz'>Cádiz</option>
                <option value='cantabria'>Cantabria</option>
                <option value='castellon'>Castellón/Castelló</option>
                <option value='ceuta'>Ceuta</option>
                <option value='ciudadreal'>Ciudad Real</option>
                <option value='cordoba'>Córdoba</option>
                <option value='cuenca'>Cuenca</option>
                <option value='girona'>Girona</option>
                <option value='laspalmas'>Las Palmas</option>
                <option value='granada'>Granada</option>
                <option value='guadalajara'>Guadalajara</option>
                <option value='guipuzcoa'>Guipúzcoa</option>
                <option value='huelva'>Huelva</option>
                <option value='huesca'>Huesca</option>
                <option value='illesbalears'>Illes Balears</option>
                <option value='jaen'>Jaén</option>
                <option value='acoruña'>A Coruña</option>
                <option value='larioja'>La Rioja</option>
                <option value='leon'>León</option>
                <option value='lleida'>Lleida</option>
                <option value='lugo'>Lugo</option>
                <option value='madrid'>Madrid</option>
                <option value='malaga'>Málaga</option>
                <option value='melilla'>Melilla</option>
                <option value='murcia'>Murcia</option>
                <option value='navarra'>Navarra</option>
                <option value='ourense'>Ourense</option>
                <option value='palencia'>Palencia</option>
                <option value='pontevedra'>Pontevedra</option>
                <option value='salamanca'>Salamanca</option>
                <option value='segovia'>Segovia</option>
                <option value='sevilla'>Sevilla</option>
                <option value='soria'>Soria</option>
                <option value='tarragona'>Tarragona</option>
                <option value='santacruztenerife'>Santa Cruz de Tenerife</option>
                <option value='teruel'>Teruel</option>
                <option value='toledo'>Toledo</option>
                <option value='valencia'>Valencia/Valéncia</option>
                <option value='valladolid'>Valladolid</option>
                <option value='vizcaya'>Vizcaya</option>
                <option value='zamora'>Zamora</option>
                <option value='zaragoza'>Zaragoza</option>
            </select>
            <br/>
        	
        	
        	<label for="id-telefonopa">Teléfono</label>
        	<input id="id-telefonopa" type="text" name="telefono" required="required" onkeyup="validarTelefonopa(),deshabilitarBotonpa()"/>
        	<span id="errorTelefonopa" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-pwdpa">Contraseña</label>
        	<input id="id-pwdpa" type="password" name="password" required="required" placeholder="Mayus, minus y num" onkeyup="validarContrapa(), deshabilitarBotonpa()"/>
        	<span id="errorPWDpa" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-emailpa">Email</label>
        	<input id="id-emailpa" type="text" name="email" placeholder="ejemplo@gmail.com" required="required" onkeyup="validarEmailpa(),deshabilitarBotonpa()"/>
        	<span id="errorEmailpa" style="float:right;color:red"></span>
        	<br/>
        	
        	<input type="hidden" name="tipoUsuario" value=1/>
        	    
        	       	
        	<label for="id-pais">País Origen</label>
        	<select id="id-pais" name="pais">
        		<option selected="selected" value=-1>---</option>
        		<?php foreach ($paises as $pais):?>
        		<option value="<?=$pais->id?>"><?=$pais->nombre?></option>
        		<?php endforeach;?>
        	</select>
        	<br/>
        	
        	<input type="submit" value="Registrar" class="btn btnEstandar" id="botonRegistrarpa"/>
        </form>       
    </div>
    
     

	<div id="profesional" class="tab-pane fade">
    
    <h1 class="textoexp1">Nuevo Profesional</h1>

        <form action="<?=base_url()?>hdu/anonymous/registrarPost" method="post" enctype="multipart/form-data">
        
        	<label for="id-nompr">Nombre</label>
        	<input id="id-nompr" type="text" name="nombre" required="required" onkeyup="validarNombrepr(),deshabilitarBotonpr()"/>
        	<span id="errorNombrepr" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-ape1pr">Primer Apellido</label>
        	<input id="id-ape1pr" type="text" name="primerApellido" required="required" onkeyup="validarApellidoUnopr(),deshabilitarBotonpr()"/>
        	<span id="errorApellidoUnopr" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-ape2pr">Segundo Apellido</label>
        	<input id="id-ape2pr" type="text" name="segundoApellido" required="required" onkeyup="validarApellidoDospr(),deshabilitarBotonpr()"/>
        	<span id="errorApellidoDospr" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-dnipr">DNI</label>
        	<input id="id-dnipr" type="text" name="dni" placeholder="00000000A" required="required" onkeyup="validarDNIpr(),deshabilitarBotonpr()"/>
        	<span id="errorDNIpr" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-fnac">Fecha de Nacimiento</label>
        	<input id="id-fnac" type="date" name="fechaNacimiento" required="required" value="2000-02-29"/>
        	<br/>
        	
        	<label for="id-genero">Género</label>
          	<select name="genero" id="id-genero">
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
            </select>
            <br>
            

        	
        	<label for="id-direccion">Dirección</label>
        	<input id="id-direccion" type="text" name="direccion" required="required" onkeyup="validarDireccionpr(),deshabilitarBotonpr()"/>
        	<br/>
        	
        	<label for="id-ciudad">Ciudad/Zona</label>
        	<input id="id-ciudad" type="text" name="ciudad" required="required" onkeyup="validarCiudadpr(),deshabilitarBotonpr()"/>
        	<br/>
        	
        	<label for="id-provincia">Provincia</label>
            <select id="id-provincia" name="provincia">
                <option value='alava'>Álava</option>
                <option value='albacete'>Albacete</option>
                <option value='alicante'>Alicante/Alacant</option>
                <option value='almeria'>Almería</option>
                <option value='asturias'>Asturias</option>
                <option value='avila'>Ávila</option>
                <option value='badajoz'>Badajoz</option>
                <option value='barcelona'>Barcelona</option>
                <option value='burgos'>Burgos</option>
                <option value='caceres'>Cáceres</option>
                <option value='cadiz'>Cádiz</option>
                <option value='cantabria'>Cantabria</option>
                <option value='castellon'>Castellón/Castelló</option>
                <option value='ceuta'>Ceuta</option>
                <option value='ciudadreal'>Ciudad Real</option>
                <option value='cordoba'>Córdoba</option>
                <option value='cuenca'>Cuenca</option>
                <option value='girona'>Girona</option>
                <option value='laspalmas'>Las Palmas</option>
                <option value='granada'>Granada</option>
                <option value='guadalajara'>Guadalajara</option>
                <option value='guipuzcoa'>Guipúzcoa</option>
                <option value='huelva'>Huelva</option>
                <option value='huesca'>Huesca</option>
                <option value='illesbalears'>Illes Balears</option>
                <option value='jaen'>Jaén</option>
                <option value='acoruña'>A Coruña</option>
                <option value='larioja'>La Rioja</option>
                <option value='leon'>León</option>
                <option value='lleida'>Lleida</option>
                <option value='lugo'>Lugo</option>
                <option value='madrid'>Madrid</option>
                <option value='malaga'>Málaga</option>
                <option value='melilla'>Melilla</option>
                <option value='murcia'>Murcia</option>
                <option value='navarra'>Navarra</option>
                <option value='ourense'>Ourense</option>
                <option value='palencia'>Palencia</option>
                <option value='pontevedra'>Pontevedra</option>
                <option value='salamanca'>Salamanca</option>
                <option value='segovia'>Segovia</option>
                <option value='sevilla'>Sevilla</option>
                <option value='soria'>Soria</option>
                <option value='tarragona'>Tarragona</option>
                <option value='santacruztenerife'>Santa Cruz de Tenerife</option>
                <option value='teruel'>Teruel</option>
                <option value='toledo'>Toledo</option>
                <option value='valencia'>Valencia/Valéncia</option>
                <option value='valladolid'>Valladolid</option>
                <option value='vizcaya'>Vizcaya</option>
                <option value='zamora'>Zamora</option>
                <option value='zaragoza'>Zaragoza</option>
            </select>
            <br/>
        	
        	
        	<label for="id-telefonopr">Teléfono</label>
        	<input id="id-telefonopr" type="text" name="telefono" required="required" onkeyup="validarTelefonopr(),deshabilitarBotonpr()"/>
        	<span id="errorTelefonopr" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-pwdpr">Contraseña</label>
        	<input id="id-pwdpr" type="password" placeholder="Mayus, minus y num" name="password" required="required" onkeyup="validarContrapr(),deshabilitarBotonpr()"/>
        	<span id="errorPWDpr" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-emailpr">Email</label>
        	<input id="id-emailpr" type="text" placeholder="ejemplo@gmail.com" name="email" required="required" onkeyup="validarEmailpr(),deshabilitarBotonpr()"/>
        	<span id="errorEmailpr" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-especialidad">Especialidad</label>
        	<select name="especialidad" id="id-especialidad">
        		<option selected="selected" value=-1>---</option>
        		<?php foreach ($especialidades as $especialidad):?>
        		<option value="<?=$especialidad->id?>"><?=$especialidad->nombre?></option>
        		<?php endforeach;?>
        	</select>
        	<br/>
        		
        	<label for="id-fnac">Fecha de Nacimiento</label>
        	<input id="id-fnac" type="date" name="fechaNacimiento" required="required" value="2000-02-29"/>
        	<br/>
        	
        	<label for="id-clinica">Clínica <i style="color:#a4a6a5; font-size: 1.2rem;">(Dejar en blanco si eres autónomo)</i></label>
        	<input id="id-clinica" type="text" name="clinica"/>
        	<br/>
        	
        	<label for="id-pais">País Origen</label>	
        	<select id="id-pais" name="pais">
        		<option selected="selected" value=-1>---</option>
        		<?php foreach ($paises as $pais):?>
        		<option value="<?=$pais->id?>"><?=$pais->nombre?></option>
        		<?php endforeach;?>
        	</select>
        	<br/>
        	
        	        	
        	<label for="id-turno">Turno</label>
          	<select name="turno" id="id-turno">
            <option value="Mañana">Mañana</option>
            <option value="Tarde">Tarde</option>
            <option value="Mañana y Tarde">Mañana y Tarde</option>
            </select> 
            
            <label for="id-franja">Franja Horaria</label>
        	<input id="id-franja" type="text" placeholder="Formato: 09:00-14:00" name="franja" required="required" onkeyup="validarFranja(),deshabilitarBoton()"/>
        	<span id="errorFranja" style="float:right;color:red"></span>
        	<br/>
        	
        	<label for="id-tarifa">Tarifa <i style="color:#a4a6a5; font-size: 1.2rem;">(€/sesión)</i></label>
        	<input id="id-tarifa" type="text" placeholder="" minlength=1 maxLength=2  size=1 name="tarifa" required="required" onkeyup=""/>
        	<br/>
            
            <br>
        	
        	<input type="hidden" name="tipoUsuario" value=2/>

        	
        	<!-- JAVASCRIPT PARA VISUALIZAR LA FOTO -->
        	<script>
        	$(window).on("load", (function (){
        		$(function() {
        			$("#id-foto").change(function(e) {addImage(e);});
        
        		function addImage (e){
        			var file = e.target.files[0];
        			var imageType = /image.*/;
        
        			if (!file.type.match(imageType)) return;
        
        			var reader = new FileReader();
        			reader.onload = fileOnLoad;
        			reader.readAsDataURL(file);
        			
        		}
        
        		function fileOnLoad(e) {
        			var result=e.target.result;
        			$('#id-out-foto').attr("src",result);
        		}});}));
        	</script>
        	
        	<label for="id-foto">Foto</label>
        	<input id="id-foto" type="file" name="foto"/><br>
        	<img class="" id="id-out-foto" width="20%" height="20%" src="../../assets/img/noimage.png" alt=""/><br><br>
        	
        	<input type="submit" id="botonRegistrarpr" value="Registrar" class="btn btnEstandar"/>
        </form>

    </div>

</div>
<div class="imagenRegistro col-sm-7">
<img id="idimagenregistro" src="../../assets/img/registro/pac2.jpg" alt="" />
</div>
</div>
</div>