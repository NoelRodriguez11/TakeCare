<div class="container col-6" id="vistaperfil">
	<div class="tab-content">
	<div id="profesional" class="tab-pane fade in active">

			<h1 class="textoexp1-enunciados">Configuracion Perfil Profesional</h1>

			<form action="<?=base_url()?>profesional/configPerfilPost" method="post" enctype="multipart/form-data">

				<div class="col-xs-8">
					<label for="id-nombrep">Nombre</label> 
					<input id="id-nombrep" type="text" class="form-control" name="nombrep" />
				</div>

				<div class="form-group">
					<a href="#" id="btn_modal" data-toggle="modal" class="forgot" data-target="#exampleModal" data-whatever="@getbootstrap">Cambiar contraseña</a>
				</div>

				<div class="col-xs-8">
					<label for="id-telefonop">Teléfono</label> 
					<input id="id-telefonop" type="number" class="form-control" name="tlfp" />
				</div>

				<div class="col-xs-8">
					<label for="id-correop">Correo</label> 
					<input id="id-correop" type="text" class="form-control" name="correop" />
				</div>

				<div class="col-xs-8">
					<label for="id-valoracionp">Valoraciones</label> 
					<input id="id-valoracionp" type="text" class="form-control"	name="valoracionp" disabled="disabled" />
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