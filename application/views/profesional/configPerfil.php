<div class="container col-6" id="vistaperfil">
	<div class="tab-content">
		<div id="paciente" class="tab-pane fade in active">
			<h1 class="textoexp1">Configuracion Perfil Profesional</h1>

			<form action="<?=base_url()?>profesional/configPerfilPost" method="post" enctype="multipart/form-data">

				<!-- JAVASCRIPT PARA VISUALIZAR LA FOTO   -->
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
					<label for="id-foto2">Foto</label> 
					<input id="id-foto2" type="file" name="foto" /><br> 
					<img class="offset-1 col-2" id="id-out-foto2" width="10%" height="10%" src="" alt="" /><br>
				</div>

				<div class ="col-xs-8">
					<label for="id-nombre">Nombre</label> 
					<input id="id-nombre" type="text" class="form-control" name="nombre" />
				</div>
				
				<div class="col-xs-8">
					<label for="id-email">Correo</label> 
					<input id="id-email" type="text" class="form-control" name="email" />
				</div>
		
				<div class="col-xs-8">
					<label for="id-tlf">Telefono</label> 
					<input id="id-tlf" type="text" class="form-control" name="tlf" />
				</div>
				
				<div class="col-xs-8">
					<label for="id-valoracion">Valoración</label> 
					<input id="id-tlf" type="text" class="form-control" name="valoracion" disabled="disabled"/>
				</div>

				<div class="form-group">
					<a href="#" id="btn_modal" data-toggle="modal" class="forgot" data-target="#exampleModal" data-whatever="@getbootstrap">Cambiar contraseña</a>
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
        						
        						var nombre = profesional.nombre;
   								$("#id-nombre").val(nombre);
   								
   								
   								var email = profesional.email;
   								$("#id-email").val(email);
   								
   								var telefono = profesional.telefono;
   								$("#id-tlf").val(telefono);

   								var valoracion = profesional.valoracion;
   								$("#id-valoracion").val(valoracion);

        			        }

        			});
        	}
        	</script>

				<input type="submit" value="Guardar Cambios" class="btn btnEstandar" id = "botonGuardar" />
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