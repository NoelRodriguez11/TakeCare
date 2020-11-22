<div class="container col-6" id="vistaperfil">

	<button class="active btn btn-danger" data-toggle="tab"
		href="#paciente">Paciente</button>
	<button class="btn btn-danger" data-toggle="tab" href="#profesional">Profesional</button>


	<div class="tab-content">
		<div id="paciente" class="tab-pane fade in active">
			<h1 class="textoexp1">Configuracion Perfil Paciente</h1>

			<form action="<?=base_url()?>hdu/anonymous/configPerfilPost" method="post" enctype="multipart/form-data">

				<!-- JAVASCRIPT PARA VISUALIZAR LA FOTO -->
				<script>
        	$(".main-menu").hide();
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

				<div class="form-group">
					<label for="id-foto">Foto</label> 
					<input id="id-foto" type="file" name="foto" /><br> 
					<img class="offset-1 col-2" id="id-out-foto" width="10%" height="10%" src="" alt="" /><br>
				</div>

				<div class="form-group">
					<label for="id-nombre">Nombre</label> 
					<input id="id-nombre" type="text" class="form-control" name="nombre" />
				</div>

				<div class="form-group">
					<label for="id-ape1">Primer Apellido</label> 
					<input id="id-ape1" type="text" class="form-control" name="apellido1" disabled="disabled" />
				</div>

				<div class="form-group">
					<label for="id-ape2">Segundo Apellido</label> 
					<input id="id-ape2" type="text" class="form-control" name="apellido2" disabled="disabled" />
				</div>

				<div class="form-group">
					<a href="#" id="btn_modal" data-toggle="modal" class="forgot" data-target="#exampleModal" data-whatever="@getbootstrap">Cambiar contraseña</a>
				</div>



				<div class="form-group">
					<label for="id-tlf">Telefono</label> 
					<input id="id-tlf" type="text" class="form-control" name="tlf" />
				</div>

				<div class="form-group">
					<label for="id-dni">DNI</label> 
					<input id="id-dni" type="text" class="form-control" name="dni" disabled="disabled" />
				</div>

				<div class="form-group">
					<label for="id-grsang">Grupo Sanguíneo</label> 
					<input id="id-grsang" type="text" class="form-control" name="gruposanguineo" disabled="disabled" />
				</div>

				<div class="form-group">
					<label for="id-direccion">Dirección</label> 
					<input id="id-direccion" type="text" name="direccion" class="form-control" />
				</div>

				<div class="form-group">
					<label for="id-ciudad">Ciudad</label> 
					<input id="id-ciudad" type="text" class="form-control" name="ciudad" />
				</div>

				<div class="form-group">
					<label for="id-provincia">Provincia</label> 
					<input id="id-provincia" type="text" class="form-control" name="provincia" />
				</div>

				<div class="form-group">
					<label for="id-pais">Pais</label> 
					<input id="id-pais" type="text" class="form-control" name="pais" />
				</div>
				<br />



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
   								alert(nombre);
   								
   								var primer_apellido = persona.primer_nombre;
   								$("#id-ape1").val(primer_apellido);
   								alert(primer_apellido);

   								var segundo_apellido = persona.segundo_nombre;
   								$("#id-ape2").val(segundo_apellido);
   								alert(segundo_apellido);

   								var telefono = persona.telefono;
   								$("#id-tlf").val(telefono);
   								alert(telefono);

   								var dni = persona.dni;
   								$("#id-dni").val(dni);
   								alert(dni);

   								var grupo_sanguineo = persona.grupo_sanguineo;
   								$("#id-grsang").val(grupo_sanguineo);
   								alert(grupo_sanguineo);

   								var direccion = persona.direccion;
   								$("#id-direccion").val(direccion);
   								alert(direccion);

   								var ciudad = persona.ciudad;
   								$("#id-ciudad").val(ciudad);
   								alert(ciudad);

   								var provincia = persona.provincia;
   								$("#id-provincia").val(provincia);
   								alert(provincia);

   								var pais = persona.pais;
   								$("#id-pais").val(pais);
   								alert(pais);  								
   								
        			        }

        			});
        	}
        	</script>

				<input type="submit" value="Guardar Cambios" class="btn btnEstandar" />
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
						<form class="form"
							action="<?=base_url().'persona/changePassPerfil'?>" method="post">
							<div class="modal-body">

								<!-- Cambiar url -->
								<!--           <div class="form-group"> -->
								<!--             <label for="recipient-name" class="col-form-label">Old Password:</label> -->
								<!--             <input type="text" class="form-control" name ="oldpwd" id="btn_modal"> -->
								<!--           </div> -->

								<div class="form-group">
									<label for="recipient-name" class="col-form-label">New
										Password:</label> <input type="text" class="form-control"
										name="newpwd" id="btn_modal">
								</div>

								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Repeat New
										Password:</label> <input type="text" class="form-control"
										name="new1pwd" id="btn_modal">
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


		<div id="profesional" class="tab-pane fade">

			<h1 class="textoexp1">Configuracion Perfil Profesional</h1>

			<form action="<?=base_url()?>hdu/anonymous/configPerfilPost"
				method="post" enctype="multipart/form-data">




				<!-- JAVASCRIPT PARA VISUALIZAR LA FOTO -->
				<script>
        	$(".main-menu").hide();
        	$(window).on("load", (function (){
        		$(function() {
        			$("#id-foto2").change(function(e) {addImage(e);});
        
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
        			$('#id-out-foto2').attr("src",result);
        		}});}));
        	</script>

				<div class="form-group">
					<label for="id-foto2">Foto</label> <input id="id-foto2" type="file"
						name="foto2" /><br> <img class="offset-1 col-2" id="id-out-foto2"
						width="10%" height="10%" src="" alt="" /><br>
				</div>

				<div class="form-group">
					<label for="id-nombrep">Nombre</label> <input id="id-nombrep"
						type="text" class="form-control" name="nombrep" />
				</div>

				<div class="form-group">
					<a href="#" id="btn_modal" data-toggle="modal" class="forgot"
						data-target="#exampleModal1" data-whatever="@getbootstrap">Cambiar
						contraseña</a>
				</div>
				<div class="modal right fade" class="modal custom show"
					id="exampleModal1" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalLabel1" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel1">Cambiar
									contraseña</h5>
								<button type="button" class="close" data-dismiss="modal"
									aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form class="form"
									action="<?=base_url().'persona/changePassPerfil'?>"
									method="post">
									<!-- Cambiar url -->
									<!--           <div class="form-group"> -->
									<!--             <label for="recipient-name" class="col-form-label">Old Password:</label> -->
									<!--             <input type="text" class="form-control" name ="oldpwdp" id="btn_modal"> -->
									<!--           </div> -->

									<div class="form-group">
										<label for="recipient-name" class="col-form-label">New
											Password:</label> <input type="text" class="form-control"
											name="newpwdp" id="btn_modal">
									</div>

									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Repeat New
											Password:</label> <input type="text" class="form-control"
											name="new1pwdp" id="btn_modal">
									</div>
							
							</div>
							<div class="modal-footer">
								<button type="button" id="loginBoton" class="btn btn-secondary"
									data-dismiss="modal">Close</button>
								<button type="submit" id="loginBoton" class="btn btn-secondary">Confirmar</button>
							</div>
						</div>
					</div>
				</div>
				<div class="form-check">
					<label for="id-turno">Turno</label> <input id="id-turno"
						type="checkbox" class="form-check-input" name="mañana" />Mañana <input
						id="id-turno" type="checkbox" class="form-check-input"
						name="noche" />Noche
				</div>

				<div class="form-group">
					<label for="id-telefonop">Teléfono</label> <input id="id-telefonop"
						type="number" class="form-control" name="tlfp" />
				</div>

				<div class="form-group">
					<label for="id-correop">Correo</label> <input id="id-correop"
						type="text" class="form-control" name="correop" />
				</div>

				<div class="form-group">
					<label for="id-valoracionp">Valoraciones</label> <input
						id="id-valoracionp" type="text" class="form-control"
						name="valoracionp" disabled="disabled" />
				</div>
				<br /> <input type="submit" value="Guardar Cambios"
					class="btn btnEstandar" />

			</form>
		</div>
	</div>
</div>