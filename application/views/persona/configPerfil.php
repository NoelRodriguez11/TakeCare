<div class="container col-6" id="vistaperfil">
	<div class="tab-content">
		<div id="paciente" class="tab-pane fade in active">
			<h1 class="textoexp1">Configuracion Perfil Paciente</h1>

			<form action="<?=base_url()?>persona/configPerfilPost" method="post" enctype="multipart/form-data">

				<!-- JAVASCRIPT PARA VISUALIZAR LA FOTO   -->
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

				<label for="id-pais">Pais</label>
        	<select id="id-pais" class="form-control" name="pais">
				<?php foreach ($paises as $pais):?>
    				<?php if ($pais->nombre != $persona->nace->nombre) :?>
    					<option value="<?=$pais->id?>"><?= $pais->nombre?></option>
    				<?php endif;?>
				<?php endforeach;?>
        	</select>
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
   								

   								var provincia = persona.provincia;
   								$("#id-provincia").val(provincia);
   								

   								var nace_id = persona.nace_id;
   								$("#id-pais").val(nace_id);
   								alert(nace_id); 								
   								
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