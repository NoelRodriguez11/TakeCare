<div class="container" id="vistaperfil">
	<div class="tab-content">
	<script type="text/javascript">
		function validarNombrePro() {
            		var nombre=document.getElementById("id-nombrep").value.trim();
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
            		var clinica = document.getElementById("id-franja").value.trim();
                    var rgExp = /^[a-zA-z çÇñÑáÁéÉíÍóÓúÚ]{2,30}$/;
        
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
                	var spanNombre = document.getElementById("errorNombrePro").innerHTML;
                	var boton = document.getElementById("botonConfirmarPro");
                	
                	if (spanNombre.length > 0) {
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
					<span style="float:right" id="errorNombrePro"></span>
				</div>

				<div class="form-group">
					<a href="#" id="btn_modal" data-toggle="modal" class="forgot" data-target="#exampleModal" data-whatever="@getbootstrap">Cambiar contraseña</a>
				</div>

				<div class="col-xs-8">
					<label for="id-telefonop">Teléfono</label> 
					<input id="id-telefonop" type="number" class="form-control" name="tlfp" onkeyup="validarTelefonoPro(),deshabilitarBotonPro()" />
					<span style="float:right" class="errorTelefonoPro"></span>
				</div>

				<div class="col-xs-8">
					<label for="id-correop">Correo</label> 
					<input id="id-correop" type="text" class="form-control" name="correop" onkeyup="validarEmailPro(),deshabilitarBotonPro()" />
					<span style="float:right" class="errorEmailPro"></span>
				</div>

				<div class="col-xs-8">
					<label for="id-valoracionp">Valoraciones</label> 
					<input id="id-valoracionp" type="text" class="form-control"	name="valoracionp" disabled="disabled" />
				</div>
				
				<div class="col-xs-8">
					<label for="id-clinicap">Clínica</label> 
					<input id="id-clinicap" type="text" class="form-control" name="clinicap" onkeyup="validarClinicaPro(),deshabilitarBotonPro()" />
					<span style="float:right" class="errorClinicaPro"></span>
				</div>
				
				<div class="col-xs-8">
					<label for="id-turnop">Turno</label>
                  	<select name="turnop" id="id-turnop">
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Mañana y Tarde">Mañana y Tarde</option>
                    </select> 
				</div>
				
				<div class="col-xs-8">
					<label for="id-franja">Franja Horaria</label>
        			<input id="id-franja" type="text" placeholder="Formato: 09:00-14:00" name="franja" required="required" onkeyup="validarFranjaPro(),deshabilitarBotonPro()"/>
					<span style="float:right" class="errorFranjaPro"></span>
				</div>
				
				<br />
				
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
                                        $("#id-franja").val(franjas);
                             }

                     });
             }
            </script>
        	
				 <input type="submit" value="Guardar Cambios" class="btn btnEstandar" id="botonConfirmarPro" />
				 
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
</div>