<div class="container">
<h1 class="textoexp1-1" >Pedir cita con "INSERTAR NOMBRE DE PROFESIONAL POR ID"</h1>

			<div class="modal-body" id="divCrearCitas">
				<form class="form" action="<?=base_url()?>cita/cPost" method="post">
					<div class="form-group">
						<label for="idfh">Fecha y hora</label>
							<input id="idfh" type="datetime-local" name="fechahora" placeholder="fecha y hora" required="required"/>		
					</div>
					<div class="form-group">
						Especialidad 
						<select name="idEspecialidad">
							<?php foreach ($especialidades as $especialidad):?>
									<option value="<?=$especialidad->id?>"><?=$especialidad->nombre?></option>
							<?php endforeach;?>
						</select>
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
				
			</div>
 </div>