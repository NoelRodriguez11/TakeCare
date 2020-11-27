<div class="container">

<h1 class="textoexp1">Listado Completo de Profesionales</h1>
<h5>En esta seccion podrás consultar el listado completo de profesionales dados de alta en la pagina</h5>
<?php if ($datosGen['persona']==null):?>
<code>Registrate para poder concretar una cita</code><br>
<?php endif;?>
<script type="text/javascript">
	var base_url = "<?php echo base_url()?>";
</script>

<div class="filtroProfesionales">
  <p class="textoexp2">Selecciona una especialidad:</p>
  <select name="especialidad" id="idEspecialidad" onchange="myFunction()">
  <option value="0" selected>- - - -</option>
  <?php foreach ($especialidades as $especialidad):?>
  <option value="<?=$especialidad->id?>"><?=$especialidad->nombre?></option>
  <?php endforeach;?>
  </select>   
</div>


<!-- Estos div de profesionales tiene que ser obtenido de la bbdd segun los prodesionales que haya en la bbdd -->
<?php foreach ($profesionales as $profesional):?>
<div class="divAnuncioProfesionales">

		<!--Foto del profesional -->
		<div class="row">
		<img class="divFotoPerfil col-sm-4" style="margin:0;" src="<?=base_url()?>/assets/img/upload/profesional/pro<?=$profesional->id?>.jpg"/>
		
      
       	<form action="<?=base_url()?>cita/c" method="get">
			<input type="hidden" name="id" value="<?=$profesional->id?>">
			<button onclick="submit()" class="botonPedirCita btn btn-primary col-sm-3" id="botonPC" <?php if ($datosGen['persona']==null):?>disabled<?php endif;?>>Pedir cita</button>
		</form>
       
       
      
		</div>
            
		<div class="row">
        <!--Nombre del profesional -->
    	<div class="col-sm-6" id="nombreProfesionales">
    	
    	<?=$profesional->nombre?> <?=$profesional->primerApellido?> <?=$profesional->segundoApellido?>
    	</div>
        
         <!--Especialidad -->
    	<div class="col-sm-3 especialidadIndicador" >Especialidad:<div id="especialidadEstilo"><?=$profesional->especialidad->nombre?></div></div>
    	
    	  <!--Especialidad -->
    	<div class="col-sm-3 provinciaIndicador" >Provincia:<div id="provinciaEstilo"><?=$profesional->provincia?></div></div>
    	</div>
</div>
<?php endforeach;?>





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

