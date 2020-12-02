<div class="container">
<h1 class="textoexp1">Listado Completo de profesionales</h1>
<h5>En esta seccion podrás consultar el listado completo de palabraes dados de alta en la pagina</h5>
<?php if ($datosGen['persona']==null):?>
<code>Registrate para poder concretar una cita</code><br>
<?php endif;?>
<div class="filtroProfesionales">
  <p class="textoexp2">Selecciona una especialidad:</p>
  <form class="form-inline" action="<?php echo base_url() . 'buscador/filtroSelect'; ?>" method="post">
        <select name="field">
            <option selected="selected" disabled="disabled" value="">Filtrar por especialidad</option>
            <?php foreach ($especialidades as $especialidad):?>
  			<option value="<?=$especialidad->id?>"><?=$especialidad->nombre?></option>
  			<?php endforeach;?>
        </select>
        <input type="submit" name="filter" value="Go">
    </form>
</div>


<!-- Estos div de palabraes tiene que ser obtenido de la bbdd segun los prodesionales que haya en la bbdd -->
<?php foreach ($palabras as $palabra):?>
<div class="divAnuncioProfesionales">

		<!--Foto del palabra -->
		<div class="row">
		<img class="divFotoPerfil col-sm-4" style="margin:0;" src="<?=base_url()?>/assets/img/upload/profesional/pro<?=$palabra->id?>.jpg"/>
		

      
       	<form action="<?=base_url()?>cita/c" method="get">
			<input type="hidden" name="id" value="<?=$palabra->id?>">
			<button onclick="submit()" class="botonPedirCita btn btn-primary col-sm-3" id="botonPC" <?php if ($datosGen['persona']==null):?>disabled<?php endif;?>>Pedir cita</button>
		</form>
       
       <div class="divEstrellitas">
        <form>
  			<p class="clasificacion" id="star1">
  				<label for="radio1" id="radio1_5" class ="star" onClick="pulsarStar(this.id,<?=$palabra->id?>);">★</label> <!-- la segunda variable del parentesis es el id del palabra
  				cambiar cuando se cree con ci-->
    				<input type="radio" name="estrellas" value="5">
    			<label for="radio2" id="radio<?=$palabra->id?>_4" class ="star" onClick="pulsarStar(this.id,<?=$palabra->id?>);">★</label>
   					<input type="radio" name="estrellas" value="4">
                <label for="radio3" id="radio<?=$palabra->id?>_3" class ="star" onClick="pulsarStar(this.id,<?=$palabra->id?>);">★</label>
                	<input type="radio" name="estrellas" value="3">
                <label for="radio4" id="radio<?=$palabra->id?>_2" class ="star" onClick="pulsarStar(this.id,<?=$palabra->id?>);">★</label>
                	<input type="radio" name="estrellas" value="2">
                <label for="radio5" id="radio<?=$palabra->id?>_1" class ="star" onClick="pulsarStar(this.id,<?=$palabra->id?>);">★</label>
                	<input type="radio" name="estrellas" value="1">
       			</p>			
		</form>
        </div>
      
		</div>
            
		<div class="row">
        <!--Nombre del palabra -->
    	<div class="col-sm-6" id="nombreProfesionales">
    	
    	<?=$palabra->nombre?> <?=$palabra->primerApellido?> <?=$palabra->segundoApellido?>
    	</div>
        
         <!--Especialidad -->
    	<div class="col-sm-3 especialidadIndicador">Especialidad:<div id="especialidadEstilo"><?=$palabra->especialidad->nombre?></div></div>
    	
    	  <!--Especialidad -->
    	<div class="col-sm-3 provinciaIndicador">Provincia:<div id="provinciaEstilo"><?=$palabra->provincia?></div></div>
    	</div>
</div>
<?php endforeach;?>
</div>
