<div class="container">

<h1 class="textoexp1">Listado Completo de Profesionales</h1>
<h5>En esta seccion podrás consultar el listado completo de profesionales dados de alta en la pagina</h5>
<?php if ($datosGen['persona']==null):?>
<code>Registrate para poder concretar una cita</code><br>
<?php endif;?>

<div class="divAnuncioProfesionales row">
    	<div class="col-sm-11" id="tituloAnuncios">Anuncio ejemplo 1</div>
        <div class="col-sm-1">
        <div class="divEstrellitas">
        <form>
  			<p class="clasificacion" id="star3">
  				<label for="radio1" class ="star">★</label>
    				<input id="radio1" type="radio" name="estrellas" value="5">
    			<label for="radio2" class ="star">★</label>
   					<input id="radio2" type="radio" name="estrellas" value="4">
                <label for="radio3" class ="star">★</label>
                	<input id="radio3" type="radio" name="estrellas" value="3">
                <label for="radio4" class ="star">★</label>
                	<input id="radio4" type="radio" name="estrellas" value="2">
                <label for="radio5" class ="star">★</label>
                	<input id="radio5" type="radio" name="estrellas" value="1">
       			</p>	
		</form>
        </div>
        <?php if ($datosGen['persona']==null):?>
        <button class="botonPedirCita btn btn-primary" id="botonPC" disabled>Pedir cita</button>
        <?php endif;?>
    </div>
</div>

<div class="divAnuncioProfesionales row">
    <div class="col-sm-11" id="tituloAnuncios">Anuncio ejemplo 2</div>
        <div class="col-sm-1">
        <div class="divEstrellitas">
        <form>
  			<p class="clasificacion" id="star2">
  				<label for="radio1" class ="star">★</label>
    				<input id="radio1" type="radio" name="estrellas" value="5">
    			<label for="radio2" class ="star">★</label>
   					<input id="radio2" type="radio" name="estrellas" value="4">
                <label for="radio3" class ="star">★</label>
                	<input id="radio3" type="radio" name="estrellas" value="3">
                <label for="radio4" class ="star">★</label>
                	<input id="radio4" type="radio" name="estrellas" value="2">
                <label for="radio5" class ="star">★</label>
                	<input id="radio5" type="radio" name="estrellas" value="1">
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
        <div class="divEstrellitas" id ="star3" >
        <form>
  			<p class="clasificacion">
  				<label for="radio1" class ="star">★</label>
    				<input id="radio1" type="radio" name="estrellas" value="5">
    			<label for="radio2" class ="star">★</label>
   					<input id="radio2" type="radio" name="estrellas" value="4">
                <label for="radio3" class ="star">★</label>
                	<input id="radio3" type="radio" name="estrellas" value="3">
                <label for="radio4" class ="star">★</label>
                	<input id="radio4" type="radio" name="estrellas" value="2">
                <label for="radio5" class ="star">★</label>
                	<input id="radio5" type="radio" name="estrellas" value="1">
       			</p>	
		</form>
        </div>
        <?php if ($datosGen['persona']==null):?>
        <button class="botonPedirCita btn btn-primary" id="botonPC" disabled>Pedir cita</button>
        <?php endif;?>
    </div>
</div>

</div>

