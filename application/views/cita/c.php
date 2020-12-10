<div class="container">
<h1 class="textoexp1-1" >Pedir cita con <?=$profesional->nombre?></h1>

			<div class="modal-body" id="divCrearCitas">
				<form class="form" action="<?=base_url()?>cita/cPost" method="post">

					
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
						<label for="idfh">Fecha y hora</label>
							<input id="idfh" type="datetime-local" name="fechahora" placeholder="fecha y hora" required="required"/>		
					</div>
					
					 
					<div class="form-group">
					<label for="iddp">Diagnóstico particular</label>
					<br>
						<textarea placeholder="Aqui iria el diagnostico particular" rows="4" cols="50">
						
						</textarea>
					</div>
					<div class="form-group">
						<button type="submit" id="loginBoton" class="btn btnEstandar">Crear cita</button>
					</div>				
				</form>
				<script type="text/javascript">
				var today = new Date().toISOString();
				document.getElementById("idfh").min = today.slice(0,16);
				</script>				
			</div>
 </div>