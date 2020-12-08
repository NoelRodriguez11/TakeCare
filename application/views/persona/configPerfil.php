<div class="container col-6" id="vistaperfil">
	<div class="tab-content">
		<div id="paciente" class="tab-pane fade in active">
			<h1 class="textoexp1-enunciados">Configuracion Perfil Paciente</h1>

			<form action="<?=base_url()?>persona/configPerfilPost" method="post" enctype="multipart/form-data">
        	
        	<script type="text/javascript">
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
                    
                    function deshabilitarBoton() {
                	var spanNombre = document.getElementsById("errorNombre").innerHTML;
                	var spanTelefono = document.getElementsById("errorTelefono").innerHTML;
                	var spanCiudad = document.getElementsById("errorCiudad").innerHTML;
                	var spanDireccion = document.getElementsById("errorDireccion").innerHTML;
                	
                	
                	var boton = document.getElementById("botonConfirmar");
                	
                	if (spanNombre.length > 0 || spanTelefono.length > 0 || spanCiudad.length > 0 || spanDireccion.length > 0) {
                		boton.disabled = true;
                	}
                	else {
                		boton.disabled = false;
                	}
                }
                    
			</script>

				<div class="col-xs-8">
					<label for="id-nombre">Nombre</label> 
					<input id="id-nombre" type="text" class="form-control" name="nombre" onkeyup="validarNombre(),deshabilitarBoton()"/>
					<span style="float:right" class="errorNombre"></span>
				</div>

				<div class="col-xs-8">
					<label for="id-ape1">Primer Apellido</label> 
					<input id="id-ape1" type="text" class="form-control" name="apellido1" disabled="disabled" />
				</div>

				<div class="col-xs-8">
					<label for="id-ape2">Segundo Apellido</label> 
					<input id="id-ape2" type="text" class="form-control" name="apellido2" disabled="disabled" />
				</div>

				<div class="form-group">
					<a href="#" id="btn_modal" data-toggle="modal" class="forgot" data-target="#exampleModal" data-whatever="@getbootstrap">Cambiar contraseña</a>
				</div>



				<div class="col-xs-8">
					<label for="id-tlf">Telefono</label> 
					<input id="id-tlf" type="text" class="form-control" name="tlf" onkeyup="validarTelefono()"/>
					<span style="float:right" class="errorTelefono"></span>
				</div>

				<div class="col-xs-8">
					<label for="id-dni">DNI</label> 
					<input id="id-dni" type="text" class="form-control" name="dni" disabled="disabled" />
				</div>

				<div class="col-xs-8">
					<label for="id-grsang">Grupo Sanguíneo</label> 
					<input id="id-grsang" type="text" class="form-control" name="gruposanguineo" disabled="disabled" />
				</div>

				<div class="col-xs-8">
					<label for="id-direccion">Dirección</label> 
					<input id="id-direccion" type="text" name="direccion" class="form-control" onkeyup="validarDireccion()" />
					<span style="float:right" id="errorDireccion"></span>
				</div>

				<div class="col-xs-8">
					<label for="id-ciudad">Ciudad</label> 
					<input id="id-ciudad" type="text" class="form-control" name="ciudad" onkeyup="validarCiudad()" />
					<span style="float:right" id="errorCiudad"></span>
				</div>

			<div class="col-xs-8">
				<label for="id-provincia">Provincia</label>
            		<select id="id-provincia" class="form-control" name="provincia">
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
            	</div>
				<br />

			<div class="col-xs-8">
				<label for="id-pais">Pais</label>
        	<select id="id-pais" class="form-control" name="pais">
				<?php foreach ($paises as $pais):?>
    				<?php if ($pais->nombre != $persona->nace->nombre) :?>
    					<option value="<?=$pais->id?>"><?= $pais->nombre?></option>
    				<?php endif;?>
				<?php endforeach;?>
        	</select>
        	</div>
				



				<script type="text/javascript">

        	var base_url = "<?php echo base_url()?>";
        	
       			var idPersona = "<?php echo $_SESSION['persona']['id']?>";
        		recuperarDatos(idPersona);
        	function recuperarDatos(idPersona) {
        		$.ajax({
        			  type: "GET",
        			  url: base_url + "persona/obtenerDatos?id="+ idPersona,
        			  success:  function (response) {
        						var persona = JSON.parse(response);
        						
        						var nombre = persona.nombre;
   								$("#id-nombre").val(nombre);
   								
   								
   								var primer_apellido = persona.primer_apellido;
   								$("#id-ape1").val(primer_apellido);

   								
   								var segundo_apellido = persona.segundo_apellido;
   								$("#id-ape2").val(segundo_apellido);

   								
   								var telefono = persona.telefono;
   								$("#id-tlf").val(telefono);
   								

   								var dni = persona.dni;
   								$("#id-dni").val(dni);
   							

   								var grupo_sanguineo = persona.grupo_sanguineo;
   								$("#id-grsang").val(grupo_sanguineo);
   								

   								var direccion = persona.direccion;
   								$("#id-direccion").val(direccion);
   								

   								var ciudad = persona.ciudad;
   								$("#id-ciudad").val(ciudad);
   								

   								var provincia_id = persona.provincia;
   								$("#id-provincia").val(provincia_id);
   								

   								var nace_id = persona.nace_id;
   								$("#id-pais").val(nace_id);
   																
   								
        			        }

        			});
        	}
        	</script>

				<input type="submit" value="Guardar Cambios" class="btn btnEstandar" id="botonConfirmar"/>
			</form>

			<div class="modal right fade" class="modal custom show"
				id="exampleModal" tabindex="-1" role="dialog"
				aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña</h5>
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form class="form" action="<?=base_url().'persona/cambiarContraPersona'?>" method="post">
							<div class="modal-body">

								<!-- Cambiar url -->
								<!--           <div class="form-group"> -->
								<!--             <label for="recipient-name" class="col-form-label">Old Password:</label> -->
								<!--             <input type="text" class="form-control" name ="oldpwd" id="btn_modal"> -->
								<!--           </div> -->

								<div class="form-group">
									<label for="recipient-name" class="col-form-label">New Password:</label> 
										<input type="password" class="form-control" name="newpwd" id="btn_modal">
								</div>

								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Repeat New Password:</label> 
									<input type="password" class="form-control" name="new1pwd" id="btn_modal">
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" id="loginBoton" class="btn btn-secondary"
									data-dismiss="modal">Close</button>
								<button type="submit" id="loginBoton" class="btn btn-secondary">Confirmar</button>
							</div>
						</form>
					</div>

				</div>

			</div>

		</div>


		
	</div>
</div>