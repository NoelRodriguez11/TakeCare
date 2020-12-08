<div class="container col-6" id="vistaperfil">
	<div class="tab-content">
	<div id="profesional" class="tab-pane fade in active">

			<h1 class="textoexp1">Configuracion Perfil Profesional</h1>

			<form action="<?=base_url()?>hdu/anonymous/configPerfilPost" method="post" enctype="multipart/form-data">

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
        								alert(response);
         							var nombrep = profesional.nombre;
    									$("#id-nombrep").val(nombrep);
    									alert(nombrep);
   								
   								
    									var telefonop = profesional.telefono;
    									$("#id-telefonop").val(telefonop);
    									alert(telefonop);

   								
    									var id_correop = profesional.email;
    									$("#id-correop").val(id_correop);
    									alert(id_correop);
   								
    									var valoraciones = profesional.valoracion;
    									$("#id-valoracionp").val(valoraciones);							
    									alert(valoracionesp);
         			        }

         			});
         	}
        	</script>
				
				 <input type="submit" value="Guardar Cambios" class="btn btnEstandar" />
				 
				 <div class="modal right fade" class="modal custom show" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
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
								<form class="form" action="<?=base_url().'hdu/anonymous/cambiarContraProfesional'?>" method="post">
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
				</form>
			</div>
	</div>
</div>