<div class="container">
<br>

  <h5>¿Como quieres darte de alta?</h5>
  <script type="text/javascript">
  	function validarNombre() {
            		var nombre=document.getElementById("id-nom").value.trim();
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
            		var apellidoUno=document.getElementById("id-ape1").value.trim();
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
            		var ApellidoDos=document.getElementById("id-ape2").value.trim();
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
            		var dni=document.getElementById("id-dni").value.trim();
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
            		var telefono=document.getElementById("id-telefono").value.trim();
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
            		var email=document.getElementById("id-email").value.trim();
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
            		var turno=document.getElementById("id-franja").value.trim();
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
  </script>

    <button class="active btn btn-danger" onclick="cambiarImagenRegistro(1)" data-toggle="tab" href="#paciente">Paciente</button>
    <button class="btn btn-danger" onclick="cambiarImagenRegistro(2)" id="btnProfesional" data-toggle="tab" href="#profesional">Profesional</button>
<div class="row">
  <div class="tab-content col-sm-5">
    <div id="paciente" class="tab-pane fade in active ">
    <h1 class="textoexp1">Nuevo Paciente</h1>

        <form action="<?=base_url()?>hdu/anonymous/registrarPost" method="post" enctype="multipart/form-data">
        
        	<label for="id-nom">Nombre</label>
        	<input id="id-nom" type="text" name="nombre" required="required"/>
        	<span id="errorNombre" style="float:right"></span>
        	<br/>
        	
        	<label for="id-ape1">Primer Apellido</label>
        	<input id="id-ape1" type="text" name="primerApellido" required="required"/>
        	<span id="errorApellidoUno" style="float:right"></span>
        	<br/>
        	
        	<label for="id-ape2">Segundo Apellido</label>
        	<input id="id-ape2" type="text" name="segundoApellido" required="required"/>
        	<span id="errorApellidoDos" style="float:right"></span>
        	<br/>
        	
        	<label for="id-dni">DNI</label>
        	<input id="id-dni" type="text" name="dni" required="required"/>
        	<span id="errorDNI" style="float:right"></span>
        	<br/>
        	
        	<label for="id-fnac">Fecha de Nacimiento</label>
        	<input id="id-fnac" type="date" name="fechaNacimiento" required="required" value="2000-02-29"/>
        	<br/>
        	
        	<label for="id-genero">Genero</label>
          	<select id="id-genero" name="genero">
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
            </select>
            <br>
            
            <label for="id-grupoSanguineo">Grupo Sanguineo</label>
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
        	

        	
        	<label for="id-direccion">Direccion</label>
        	<input id="id-direccion" type="text" name="direccion" required="required"/>
        	<span id="errorDireccion" style="float:right"></span>
        	<br/>
        	
        	<label for="id-ciudad">Ciudad/Zona</label>
        	<input id="id-ciudad" type="text" name="ciudad" required="required"/>
        	<span id="errorCiudad" style="float:right"></span>
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
        	
        	
        	<label for="id-telefono">Telefono</label>
        	<input id="id-telefono" type="text" name="telefono" required="required"/>
        	<span id="errorTelefono" style="float:right"></span>
        	<br/>
        	
        	<label for="id-pwd">Contraseña</label>
        	<input id="id-pwd" type="password" name="password" required="required"/>
        	<br/>
        	
        	<label for="id-email">Email</label>
        	<input id="id-email" type="text" name="email" required="required"/>
        	<span id="errorEmail" style="float:right"></span>
        	<br/>
        	
        	<input type="hidden" name="tipoUsuario" value=1/>
        	    
        	       	
        	<label for="id-pais">Pais Origen</label>
        	<select id="id-pais" name="pais">
        		<option selected="selected" value=-1>---</option>
        		<?php foreach ($paises as $pais):?>
        		<option value="<?=$pais->id?>"><?=$pais->nombre?></option>
        		<?php endforeach;?>
        	</select>
        	<br/>

        	
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
        	
        	<input type="submit" value="Registrar" class="btn btnEstandar"/>
        </form>       
    </div>
    
     

	<div id="profesional" class="tab-pane fade">
    
    <h1 class="textoexp1">Nuevo Profesional</h1>

        <form action="<?=base_url()?>hdu/anonymous/registrarPost" method="post" enctype="multipart/form-data">
        
        	<label for="id-nom">Nombre</label>
        	<input id="id-nom" type="text" name="nombre" required="required"/>
        	<span id="errorNombre" style="float:right"></span>
        	<br/>
        	
        	<label for="id-ape1">Primer Apellido</label>
        	<input id="id-ape1" type="text" name="primerApellido" required="required"/>
        	<span id="errorApellidoUno" style="float:right"></span>
        	<br/>
        	
        	<label for="id-ape2">Segundo Apellido</label>
        	<input id="id-ape2" type="text" name="segundoApellido" required="required"/>
        	<span id="errorApellidoDos" style="float:right"></span>
        	<br/>
        	
        	<label for="id-dni">DNI</label>
        	<input id="id-dni" type="text" name="dni" required="required"/>
        	<span id="errorDNI" style="float:right"></span>
        	<br/>
        	
        	<label for="id-fnac">Fecha de Nacimiento</label>
        	<input id="id-fnac" type="date" name="fechaNacimiento" required="required" value="2000-02-29"/>
        	<br/>
        	
        	<label for="id-genero">Genero</label>
          	<select name="genero" id="id-genero">
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
            </select>
            <br>
            

        	
        	<label for="id-direccion">Direccion</label>
        	<input id="id-direccion" type="text" name="direccion" required="required"/>
        	<span id="errorDireccion" style="float:right"></span>
        	<br/>
        	
        	<label for="id-ciudad">Ciudad/Zona</label>
        	<input id="id-ciudad" type="text" name="ciudad" required="required"/>
        	<span id="errorCiudad" style="float:right"></span>
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
        	
        	
        	<label for="id-telefono">Telefono</label>
        	<input id="id-telefono" type="text" name="telefono" required="required"/>
        	<span id="errorTelefono" style="float:right"></span>
        	<br/>
        	
        	<label for="id-pwd">Contraseña</label>
        	<input id="id-pwd" type="password" name="password" required="required"/>
        	<br/>
        	
        	<label for="id-email">Email</label>
        	<input id="id-email" type="text" name="email" required="required"/>
        	<span id="errorEmail" style="float:right"></span>
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
        	<span id="errorClinica" style="float:right"></span>
        	<br/>
        	
        	<label for="id-pais">Pais Origen</label>	
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
        	<input id="id-franja" type="text" placeholder="Formato: 09:00-14:00" name="franja" required="required"/>
        	<span id="errorFranja" style="float:right"></span>
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
        	
        	<input type="submit" value="Registrar" class="btn btnEstandar"/>
        </form>

    </div>

</div>
<div class="imagenRegistro col-sm-7">
<img id="idimagenregistro" src="../../assets/img/registro/pac2.jpg" alt="" />
</div>
</div>
</div>