<div class="container">
<h1 class="textoexp1-1" >Nueva cita </h1>

			<div class="modal-body" id="divCrearCitas">
				<form class="form" action="<?=base_url()?>cita/cPost" method="post">

					
					<div class="form-group">
						<label for="idfh">Fecha y hora</label>
							<input id="idfh" type="datetime-local" name="fechahora" placeholder="fecha y hora" required="required"/>		
					</div>
					
					<div class="form-group">
					<label for="idCaracter">Carácter</label>
    					<select id="idCaracter" name="caracter">
                          <option value="Revisión">Revisión</option>
                          <option value="Seguimiento">Seguimiento</option>
                          <option value="Tratamiento">Tratamiento</option>
                          <option value="Puntual/Urgencia">Urgencia</option>
                        </select>
                    </div>
					
					<div class="form-group">
						<button type="submit" id="loginBoton" class="btn btnEstandar">Crear cita</button>
					</div>
					<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<input type="hidden" name="idProfesional" value="<?=$caso->profesional->id?>">
        			<input type="hidden" name="idPaciente" value="<?=$caso->persona->id?>">
        			<input type="hidden" name="fechaHora" value="<?=$caso->fechaInicio?>">				
				</form>
				
				
				<script type="text/javascript">
				var today = new Date().toISOString();
				document.getElementById("idfh").min = today.slice(0,16);
				</script>				
			</div>
 </div>