<div class="container">
<h1 class="textoexp1-1" >Cambiar propuesta de cita con <br> <?=$caso->persona->nombre?> <?=$caso->persona->primerApellido?> <?=$caso->persona->segundoApellido?></h1>

			<div class="modal-body" id="divCrearCitas">
				<form class="form" action="<?=base_url()?>profesional/cambiarPropuestaPost" method="post">

										
					<div class="form-group">
						<label for="idfh">Fecha y hora  </label>
							<input id="idfh" type="datetime-local" name="fechaHora" placeholder="fecha y hora" required="required"/>		
					</div>
					
					 
					<div class="form-group">
					<label for="iddp">Diagnóstico particular</label>
					<br>
						
						<textarea rows="4" cols="50" disabled><?= $caso->diagnosticoPreliminar?></textarea>
					</div>
					<div class="form-group">
						<button type="submit" id="loginBoton" class="btn btnEstandar">Enviar Solicitud</button>
					</div>	
					<input type="hidden" name="idCaso" value="<?=$caso->id?>">		
				</form>
				
				<script type="text/javascript">
				var today = new Date().toISOString();
				document.getElementById("idfh").min = today.slice(0,16);
				</script>	
							
			</div>
 </div>