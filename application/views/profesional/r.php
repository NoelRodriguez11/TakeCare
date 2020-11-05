<div class="container">

<h1 class="textoexp1">Listado Completo de Profesionales</h1>
<h5>En esta seccion podrás consultar el listado completo de profesionales dados de alta en la pagina</h5>
<?php if ($datosGen['persona']==null):?>
<code>Registrate para poder concretar una cita</code><br>
<?php endif;?>
<script type="text/javascript">
	var base_url = "<?php echo base_url()?>";
</script>
<!-- Estos div de profesionales tiene que ser obtenido de la bbdd segun los prodesionales que haya en la bbdd -->

<div class="divAnuncioProfesionales row">
    	<div class="col-sm-11" id="tituloAnuncios">Anuncio ejemplo 1</div>
        <div class="col-sm-1">
        <div class="divEstrellitas">
        <form>
  			<p class="clasificacion" id="star0">
  				<label for="radio1" id="radio0_5" class ="star" onClick="pulsarStar(this.id,1);">★</label>
    				<input type="radio" name="estrellas" value="5">
    			<label for="radio2" id="radio0_4" class ="star" onClick="pulsarStar(this.id,1);">★</label>
   					<input type="radio" name="estrellas" value="4">
                <label for="radio3" id="radio0_3" class ="star" onClick="pulsarStar(this.id,1);">★</label>
                	<input type="radio" name="estrellas" value="3">
                <label for="radio4"  id="radio0_2" class ="star" onClick="pulsarStar(this.id,1);">★</label>
                	<input type="radio" name="estrellas" value="2">
                <label for="radio5" id="radio0_1" class ="star" onClick="pulsarStar(this.id,1);">★</label>
                	<input type="radio" name="estrellas" value="1">
       			</p>	
		</form>
        </div>
        <?php if ($datosGen['persona']==null):?>
        <button class="botonPedirCita btn btn-primary" id="botonPC" disabled>Pedir cita</button>
        <?php endif;?>
    </div>
</div>
<!-- El 1 es el id del profesional -->
<div class="divAnuncioProfesionales row">
    <div class="col-sm-11" id="tituloAnuncios">Anuncio ejemplo 2</div>
        <div class="col-sm-1">
        <div class="divEstrellitas">
        <form>
  			<p class="clasificacion" id="star1">
  				<label for="radio1" id="radio1_5" class ="star" onClick="pulsarStar(this.id,1);">★</label> <!-- la segunda variable del parentesis es el id del profesional
  				cambiar cuando se cree con ci-->
    				<input type="radio" name="estrellas" value="5">
    			<label for="radio2" id="radio1_4" class ="star" onClick="pulsarStar(this.id,1);">★</label>
   					<input type="radio" name="estrellas" value="4">
                <label for="radio3" id="radio1_3" class ="star" onClick="pulsarStar(this.id,1);">★</label>
                	<input type="radio" name="estrellas" value="3">
                <label for="radio4"  id="radio1_2" class ="star" onClick="pulsarStar(this.id,1);">★</label>
                	<input type="radio" name="estrellas" value="2">
                <label for="radio5" id="radio1_1" class ="star" onClick="pulsarStar(this.id,1);">★</label>
                	<input type="radio" name="estrellas" value="1">
       			</p>			
		</form>
        </div>
        <?php if ($datosGen['persona']==null):?>
        <button class="botonPedirCita btn btn-primary" id="botonPC" disabled>Pedir cita</button>
        <?php endif;?>
    </div>
</div>

<div class="divAnuncioProfesionales row">
    <div class="col-sm-11" id="tituloAnuncios">Anuncio ejemplo 3</div>
        <div class="col-sm-1">
        <div class="divEstrellitas" id ="star2">
        <form>
  			<p class="clasificacion" id="star1">
  				<label for="radio1" id="radio2_5" class ="star" onClick="pulsarStar(this.id,2);">★</label>
    				<input type="radio" name="estrellas" value="5">
    			<label for="radio2" id="radio2_4" class ="star" onClick="pulsarStar(this.id,2);">★</label>
   					<input type="radio" name="estrellas" value="4">
                <label for="radio3" id="radio2_3" class ="star" onClick="pulsarStar(this.id,2);">★</label>
                	<input type="radio" name="estrellas" value="3">
                <label for="radio4"  id="radio2_2" class ="star" onClick="pulsarStar(this.id,2);">★</label>
                	<input type="radio" name="estrellas" value="2">
                <label for="radio5" id="radio2_1" class ="star" onClick="pulsarStar(this.id,2);">★</label>
                	<input type="radio" name="estrellas" value="1">
       			</p>	
		</form>
        </div>
        <?php if ($datosGen['persona']==null):?>
        <button class="botonPedirCita btn btn-primary" id="botonPC" disabled>Pedir cita</button>
        <?php endif;?>
    </div>
</div>

</div>

