<div class="container">
<h1 class="textoexp1-1" >Solicitar tratamiento con <br><?=$profesional->nombre?> <?=$profesional->primerApellido?> <?=$profesional->segundoApellido?></h1>

			<div class="modal-body" id="divCrearCitas">
				<form class="form" action="<?=base_url()?>caso/cPost" method="post">
					<input type="hidden" name="idProfesional" value=<?=$profesional->id?>>
					<input type="hidden" name="idPersona" value=<?=$datosGen['persona']->id?>>

					
					<div class="form-group">				                     
                        <div style="overflow: hidden;">
                            <p style="float: left;" class="especialidadIndicadorCita">Especialidad:</p>
                            <p style="float: right; margin-right: 40%;" class="especialidadEstiloCita"><?=$profesional->especialidad->nombre?></p>
                        </div>
                        
                        <div style="overflow: hidden;">
                            <p style="float: left;" class="provinciaIndicadorCita">Provincia:</p>
                            <p style="float: right; margin-right: 40%;" class="provinciaEstiloCita"><?=$profesional->provincia?></p>
                        </div>
                       
                     </div>
					
					<div class="form-group">
						<label for="idfh">Fecha y hora cita preliminar</label>
							<input id="idfh" type="datetime-local" name="fechahora"  placeholder="fecha y hora" required="required"/>		
					</div>
					
					 
					<div class="form-group">
					<label for="iddp">Diagnóstico preliminar</label>
					<br>
						<textarea name="diagnosticoPrevio" placeholder="Indica brevemente tus sintomas actuales y dolencias" rows="4" cols="50"></textarea>
					</div>

					<div class="form-group">
						<button type="submit" id="loginBoton" class="btn btnEstandar">Enviar Solicitud</button>
					</div>				
				</form>
				
				<script type="text/javascript">
				var today = new Date().toISOString();
				document.getElementById("idfh").min = today.slice(0,16);
				</script>
				
			</div>
 </div>