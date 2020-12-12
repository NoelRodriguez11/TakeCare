<div class="container" id="vistaperfil">
	<div class="tab-content">
		<div id="paciente" class="tab-pane fade in active">
		
		<script type="text/javascript">
			function validarNombrePac() {
            		var nombre = document.getElementById("id-nombrepac").value.trim();
                    var rgExp= /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (nombre.length < 2 && nombre.length > 20) {
                        document.getElementById("errorNombrePac").innerHTML="El nombre tiene menos de 2 caracteres o mas de 20 caracteres";
                    
                     if (!rgExp.test(nombre)){
                        document.getElementById("errorNombrePac").innerHTML="El nombre tiene caracteres no validos";
                    }
                     else {
                     	document.getElementById("errorNombrePac").innerHTML="";
                    }
                    else {
                        document.getElementById("errorNombrePac").innerHTML="";
                    }
                }
         
function validarTelefonoPac() {
            		var telefono = document.getElementById("id-tlfpac").value.trim();
                    var rgExp= /^[9876][0-9]{8}$/;
        
                    if (telefono.length != 9) {
                        document.getElementById("errorTelefonoPac").innerHTML="El teléfono no tiene 9 caracteres";
                    }
                    else if (!rgExp.test(telefono)){
                        document.getElementById("errorTelefonoPac").innerHTML="El teléfono tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorTelefonoPac").innerHTML="";
                    }
                }
                
function validarDireccionPac() {
            		var direccion = document.getElementById("id-direccionpac").value.trim();
                    var rgExp= /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (direccion.length < 2 && direccion.length > 20) {
                        document.getElementById("errorDireccionPac").innerHTML="La dirección tiene menos de 2 caracteres o mas de 20 caracteres";
                    }
                    
                    else if (!rgExp.test(direccion)){
                        document.getElementById("errorDireccionPac").innerHTML="La dirección tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorDireccionPac").innerHTML="";
                    }
                }
                
function validarCiudadPac() {
            		var ciudad = document.getElementById("id-ciudadpac").value.trim();
                    var rgExp = /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{3,30}$/;
        
                    if (ciudad.length < 3 && ciudad.length > 30) {
                        document.getElementById("errorCiudadPac").innerHTML="La ciudad tiene menos de 3 caracteres o mas de 30 caracteres";
                    }
                    else if (!rgExp.test(ciudad)){
                        document.getElementById("errorCiudadPac").innerHTML="La ciudad tiene caracteres no validos";
                    }
                    else {
                        document.getElementById("errorCiudadPac").innerHTML="";
                    }
                    }
                   
function deshabilitarBotonPac() {
                	var spanNombre = document.getElementById("errorNombrePac").innerHTML;
                	var spanTelefono = document.getElementById("errorTelefonoPac").innerHTML;
                	var spanDireccion = document.getElementById("errorDireccionPac").innerHTML;
                	var spanCiudad = document.getElementById("errorCiudadPac").innerHTML;
                	var boton = document.getElementById("botonConfirmarPac");
                	
                	if (spanNombre.length > 0 || spanTelefono.length > 0 || spanDireccion.length > 0 || spanCiudad.length > 0) {
                		boton.disabled = true;
                	}
                	else {
                		boton.disabled = false;
                	}
                }
		</script>
			<h1 class="textoexp1-enunciados">Configuracion Perfil Paciente</h1>

			<form action="<?=base_url()?>persona/configPerfilPost" method="post" enctype="multipart/form-data">

				<div class="col-xs-8">
					<label for="id-nombrepac">Nombre</label> 
					<input id="id-nombrepac" type="text" class="form-control" name="nombre" onkeyup="validarNombrePac(),deshabilitarBotonPac()"/>
					<span style="float:right" id="errorNombrePac"></span>
				</div>

				<div class="col-xs-8">
					<label for="id-ape1pac">Primer Apellido</label> 
					<input id="id-ape1pac" type="text" class="form-control" name="apellido1" disabled="disabled" />
				</div>

				<div class="col-xs-8">
					<label for="id-ape2pac">Segundo Apellido</label> 
					<input id="id-ape2pac" type="text" class="form-control" name="apellido2" disabled="disabled" />
				</div>

				<div class="form-group">
					<a href="#" id="btn_modal" data-toggle="modal" class="forgot" data-target="#exampleModal" data-whatever="@getbootstrap">Cambiar contraseña</a>
				</div>



				<div class="col-xs-8">
					<label for="id-tlfpac">Teléfono</label> 
					<input id="id-tlfpac" type="text" class="form-control" name="tlf" onkeyup="validarTelefonoPac(),deshabilitarBotonPac()"/>
					<span style="float:right" id="errorTelefonoPac"></span>
				</div>

				<div class="col-xs-8">
					<label for="id-dnipac">DNI</label> 
					<input id="id-dnipac" type="text" class="form-control" name="dni" disabled="disabled" />
				</div>

				<div class="col-xs-8">
					<label for="id-grsang">Grupo Sanguíneo</label> 
					<input id="id-grsang" type="text" class="form-control" name="gruposanguineo" disabled="disabled" />
				</div>

				<div class="col-xs-8">
					<label for="id-direccionpac">Dirección</label> 
					<input id="id-direccionpac" type="text" name="direccion" class="form-control" onkeyup="validarDireccionPac(),deshabilitarBotonPac()"/>
					<span style="float:right" id="errorDireccionPac"></span>
				</div>

				<div class="col-xs-8">
					<label for="id-ciudadpac">Ciudad</label> 
					<input id="id-ciudadpac" type="text" class="form-control" name="ciudad" onkeyup="validarCiudadPac(),deshabilitarBotonPac()" />
					<span style="float:right" id="errorCiudadPac"></span>
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
				<br/>
				<input type="submit" value="Guardar Cambios" class="btn btnEstandar" id="loginBoton"/>
			</form>
			<div>
				<button class="botonCambioPropuesta btn btn-danger col-sm-2" id="botonConfPerfil" data-toggle="modal" data-target="#BorrarCuenta" >
    		        Borrar Cuenta 
            	</button>
			</div>	
				<!--  <button class="botonCambioPropuesta btn btn-danger col-sm-2" data-toggle="modal" data-target="#BorrarCuenta" style="width: 15%;">
<!--                   Borrar Cuenta -->
<!--                 </button> -->
                
				<!-- MODAL PARA BORRAR PERSONA  -->
				<div class="modal fade" id="BorrarCuenta" tabindex="-1" role="dialog" aria-labelledby="BorrarProfesionalTitle" aria-hidden="true">
                  		<div class="modal-dialog modal-dialog-centered" role="document">
                    		<div class="modal-content">
                      			<div class="modal-header">
                        			<h5 class="modal-title Borrar Profesional" id="exampleModalLongTitle" style="font-size: 180% !important; color:rgb(40, 167, 69) !important;">Borrar Paciente</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                      			</div>
                    <div class="modal-body textoBorrarProfesional">
                       	 ¿Estas seguro de que quieres borrar tu cuenta? <br>
                    </div>
                     <div class="modal-footer">
                        
                       <form action="<?=base_url()?>persona/borrarCuentaPost" method="post">
            				<input type="hidden" id="id-id" name="id" value="<?=$persona->id?>">
            				<button type="button" onclick="submit()" class="btn btn-danger" id="botonPC">Borrar</button>
            				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            		   </form>
                      </div>
                    </div>
                  </div>
                </div>
                
                

			<div class="modal right fade" class="modal custom show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
   								$("#id-nombrepac").val(nombre);
   								
   								var id = persona.id;
   								$("#id-id").val(id);
   								
   								
   								var primer_apellido = persona.primer_apellido;
   								$("#id-ape1pac").val(primer_apellido);

   								
   								var segundo_apellido = persona.segundo_apellido;
   								$("#id-ape2pac").val(segundo_apellido);

   								
   								var telefono = persona.telefono;
   								$("#id-tlfpac").val(telefono);
   								

   								var dni = persona.dni;
   								$("#id-dnipac").val(dni);
   							

   								var grupo_sanguineo = persona.grupo_sanguineo;
   								$("#id-grsang").val(grupo_sanguineo);
   								

   								var direccion = persona.direccion;
   								$("#id-direccionpac").val(direccion);
   								

   								var ciudad = persona.ciudad;
   								$("#id-ciudadpac").val(ciudad);
   								

   								var provincia_id = persona.provincia;
   								$("#id-provincia").val(provincia_id);
   								

   								var nace_id = persona.nace_id;
   								$("#id-pais").val(nace_id);
   																
   								
        			        }

        			});
        	}
        	</script>


		
	</div>
</div>