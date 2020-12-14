<div class="container" id="vistaperfil">
	<div class="tab-content">
	<script type="text/javascript">
	var x = document.getElementsByTagName("turnop").options;
	console.log(x);	
	
		function validarNombrePro() {
            		var nombre = document.getElementById("id-nombrep").value.trim().toLowerCase();
                    var rgExp = /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,20}$/;
        
                    if (nombre.length > 2 && nombre.length < 20) {
                        document.getElementById("errorNombrePro").innerHTML="";
                    
                     if (!rgExp.test(nombre)){
                        document.getElementById("errorNombrePro").innerHTML="El nombre tiene caracteres no validos";
                    }
                     else {
                     	document.getElementById("errorNombrePro").innerHTML="";
                    }
                }
                else {
                        document.getElementById("errorNombrePro").innerHTML="El nombre tiene menos de 3 caracteres o mas de 21 caracteres";
                    }
                }
           
function validarTelefonoPro() {
            		var telefono = document.getElementById("id-telefonop").value.trim();
                    var rgExp= /^[9876][0-9]{8}$/;
        
                    if (telefono.length == 9) {
                        document.getElementById("errorTelefonoPro").innerHTML="";
                    
                    if (!rgExp.test(telefono)){
                        document.getElementById("errorTelefonoPro").innerHTML="El teléfono tiene caracteres no validos o no empieza por 9, 8, 7 o 6";
                    }
                    else {
                    	document.getElementById("errorTelefonoPro").innerHTML="";
                    }
                    }
                    else {
                        document.getElementById("errorTelefonoPro").innerHTML="El teléfono tiene menos o más de 9 caracteres";
                    }
                }

function validarEmailPro() {
            		var email=document.getElementById("id-correop").value.trim().toLowerCase();
                    var rgExp= /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
        
                    if (email.length > 7 && email.length < 40) {
                        document.getElementById("errorEmailPro").innerHTML="";
						
						if (!rgExp.test(email)){
                        	document.getElementById("errorEmailPro").innerHTML="El nombre tiene caracteres no validos";
                    	}
                     	else {
                     		document.getElementById("errorEmailPro").innerHTML="";
                    	}	
                	}
                	else {
                        document.getElementById("errorEmailPro").innerHTML="El nombre tiene menos de 8 caracteres o mas de 40 caracteres";
                    }
                }

function validarFranjaPro() {
            		var franja = document.getElementById("id-franjap").value.trim();
            		var opcionSeleccionada = document.getElementById("id-turnop").options.selectedIndex;
                    var rgExpMañana = /^(0?[0-9]|1[012])(:[0-5]\d)(-(0?[0-9]|1[012]))(:[0-5]\d)$/;
                    var rgExpTarde = /^(1?[2-9]|2[0123])(:[0-5]\d)(-(1?[2-9]|2[0123]))(:[0-5]\d)$/;
                    var rgExpAmbos = /^([01]?[0-9]|2[0-3]):[0-5][0-9](-([01]?[0-9]|2[0-3])):[0-5][0-9]$/;
        
                    if(opcionSeleccionada == 0) {
                    	if(!rgExpMañana.test(franja)) {
                    		document.getElementById("errorFranjaPro").innerHTML="Mañana seleccionada como turno de trabajo 00:00-11:59"
                    	}
                    	else{
                    		document.getElementById("errorFranjaPro").innerHTML="";
                    	}
                    }
                    
                    else if(opcionSeleccionada == 1){
                    	if(!rgExpTarde.test(franja)) {
                    		document.getElementById("errorFranjaPro").innerHTML="Tarde seleccionada como turno de trabajo 12:00-23:59"
                    	}
                    	else{
                    		document.getElementById("errorFranjaPro").innerHTML="";
                    	}
                    }
                    
                    else {
                    	if(!rgExpAmbos.test(franja)) {
                    		document.getElementById("errorFranjaPro").innerHTML="Error en el formato hh:mm"
                    	}
                    	else{
                    		document.getElementById("errorFranjaPro").innerHTML="";
                    	}
                    }
                    
                    }
                    
                    
function deshabilitarBotonPro() {
                	var spanNombre = document.getElementById("errorNombrePro").innerHTML;
                	var spanTelefono = document.getElementById("errorTelefonoPro").innerHTML;
                	var spanEmail = document.getElementById("errorEmailPro").innerHTML;
                	var spanFranja = document.getElementById("errorFranjaPro").innerHTML;
                	var boton = document.getElementById("loginBoton");
                	
                	if (spanNombre.length > 0 || spanTelefono.length > 0 || spanEmail.length > 0 || spanFranja.length > 0) {
                		boton.disabled = true;
                	}
                	else {
                		boton.disabled = false;
                	}
                }
	</script>
	<div id="profesional" class="tab-pane fade in active">

			<h1 class="textoexp1-enunciados">Configuracion Perfil Profesional</h1>

			<form action="<?=base_url()?>profesional/configPerfilPost" method="post" enctype="multipart/form-data">

				<div class="col-xs-8">
					<label for="id-nombrep">Nombre</label> 
					<input id="id-nombrep" type="text" class="form-control" name="nombrep" onkeyup="validarNombrePro(),deshabilitarBotonPro()" />
					<span style="float:right;color:red" id="errorNombrePro"></span>
				</div>

				<div class="form-group">
					<a href="#" id="btn_modal" data-toggle="modal" class="forgot" data-target="#exampleModal" data-whatever="@getbootstrap">Cambiar contraseña</a>
				</div>

				<div class="col-xs-8">
					<label for="id-telefonop">Teléfono</label> 
					<input id="id-telefonop" type="text" class="form-control" name="tlfp" onkeyup="validarTelefonoPro(),deshabilitarBotonPro()" />
					<span style="float:right;color:red" id="errorTelefonoPro"></span>
				</div>

				<div class="col-xs-8">
					<label for="id-correop">Correo</label> 
					<input id="id-correop" type="text" class="form-control" name="correop" onkeyup="validarEmailPro(),deshabilitarBotonPro()" />
					<span style="float:right;color:red" id="errorEmailPro"></span>
				</div>

				<div class="col-xs-8">
					<label for="id-valoracionp">Valoraciones</label> 
					<input id="id-valoracionp" type="text" class="form-control"	name="valoracionp" disabled="disabled" />
				</div>

				<div class="col-xs-8">
                    <label for="id-clinicap">Clínica</label> 
                    <input id="id-clinicap" type="text" class="form-control" name="clinicap"/>
                </div>
				
				<div class="col-xs-8">
					<label for="id-turnop">Turno</label>
                  	<select name="turnop" id="id-turnop" class="form-control">
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Mañana y Tarde">Mañana y Tarde</option>
                    </select> 

                </div>

                <div class="col-xs-8">
                    <label for="id-franjap">Franja Horaria</label>
                    <input id="id-franjap" type="text" placeholder="Formato: 09:00-14:00" name="franja"  class="form-control" required="required" onkeyup="validarFranjaPro(),deshabilitarBotonPro()"/>
                    <span style="float:right;color:red" id="errorFranjaPro"></span>
                </div>
                <input type="submit" value="Guardar Cambios" class="btn btnEstandar" id="loginBoton" />
				 
				 </form>
				 
				 <button class=" btn btn-danger" id="botonConfPerfil" data-toggle="modal" data-target="#BorrarCuenta">
                  Borrar Cuenta
                </button>
                
				<!-- MODAL PARA BORRAR PERSONA  -->
				<div class="modal fade" id="BorrarCuenta" tabindex="-1" role="dialog" aria-labelledby="BorrarProfesionalTitle" aria-hidden="true">
                  		<div class="modal-dialog modal-dialog-centered" role="document">
                    		<div class="modal-content">
                      			<div class="modal-header">
                        			<h5 class="modal-title Borrar Profesional" id="exampleModalLongTitle" style="font-size: 180% !important; color:red !important;">Borrar Profesional</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                      			</div>
                    <div class="modal-body textoBorrarProfesional">
                       	 ¿Estas seguro de que quieres borrar tu cuenta? <br>
                    </div>
                     <div class="modal-footer">
                        
                       <form action="<?=base_url()?>profesional/borrarCuentaPost" method="post">
            				<input type="hidden" id="id-id" name="id" value="<?=$profesional->id?>">
            				<button type="button" onclick="submit()" class="btn btn-danger" id="botonPC">Borrar</button>
            				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            		   </form>
                      </div>
                    </div>
                  </div>
                </div>
	</div>
				
				<br />
				
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
								<form class="form" action="<?=base_url().'profesional/cambiarContraProfesional'?>" method="post">
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
<script type="text/javascript"> 

                    var base_url = "<?php echo base_url()?>";

                       var idProfesional = "<?php echo $_SESSION['profesional']['id']?>";
                         recuperarDatos(idProfesional);
                             function recuperarDatos(idProfesional) {
                                 $.ajax({
                                       type: "GET",
                                       url: base_url + "profesional/obtenerDatos?id="+ idProfesional,
                                      success:  function (response) {
                                         var profesional = JSON.parse(response);
                                         var nombrep = profesional.nombre;
                                        $("#id-nombrep").val(nombrep);
                                        
                                        var id = profesional.id;
                                        $("#id-id").val(id);

                                        var telefonop = profesional.telefono;
                                        $("#id-telefonop").val(telefonop);

                                        var id_correop = profesional.email;
                                        $("#id-correop").val(id_correop);

                                        var valoraciones = profesional.valoracion;
                                        $("#id-valoracionp").val(valoraciones);
                                        
                                        var clinicas = profesional.clinica;
                                        $("#id-clinicap").val(clinicas);
                                        
                                        var turnos = profesional.turno;
                                        $("#id-turnop").val(turnos);

                                        var franjas = profesional.franja
                                        $("#id-franjap").val(franjas);
                             }

                     });
             }
            </script>