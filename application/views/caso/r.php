<div class="container">

<h1 class="textoexp1">Casos pendientes</h1>
<h5>Gestiona los casos que puedas aceptar</h5>

<script type="text/javascript">
	var base_url = "<?php echo base_url()?>";
</script>


<!-- Estos div de profesionales tiene que ser obtenido de la bbdd segun los prodesionales que haya en la bbdd -->
<?php foreach ($profesionales as $profesional):?>
<div class="divAnuncioProfesionales">

		<!--Foto del profesional -->
		<div class="row">
		<img class="divFotoPerfil col-sm-4" style="margin:0;" src="<?=base_url()?>/assets/img/upload/profesional/pro<?=$profesional->id?>.jpg"/>
		

      
       	<form action="<?=base_url()?>caso/c" method="get">
			<input type="hidden" name="idProfesional" value="<?=$profesional->id?>">
			<button onclick="submit()" class="botonPedirCita btn btn-primary col-sm-3" id="botonPC" <?php if ($datosGen['persona']==null):?>disabled<?php endif;?>>Enviar Solicitud</button>
		</form>
       
       <div class="divEstrellitas">
        <form>
  			<p class="clasificacion" id="star1">
  				<label for="radio1" id="radio1_5" class ="star" onClick="pulsarStar(this.id,<?=$profesional->id?>);">★</label> <!-- la segunda variable del parentesis es el id del profesional
  				cambiar cuando se cree con ci-->
    				<input type="radio" name="estrellas" value="5">
    			<label for="radio2" id="radio<?=$profesional->id?>_4" class ="star" onClick="pulsarStar(this.id,<?=$profesional->id?>);">★</label>
   					<input type="radio" name="estrellas" value="4">
                <label for="radio3" id="radio<?=$profesional->id?>_3" class ="star" onClick="pulsarStar(this.id,<?=$profesional->id?>);">★</label>
                	<input type="radio" name="estrellas" value="3">
                <label for="radio4" id="radio<?=$profesional->id?>_2" class ="star" onClick="pulsarStar(this.id,<?=$profesional->id?>);">★</label>
                	<input type="radio" name="estrellas" value="2">
                <label for="radio5" id="radio<?=$profesional->id?>_1" class ="star" onClick="pulsarStar(this.id,<?=$profesional->id?>);">★</label>
                	<input type="radio" name="estrellas" value="1">
       			</p>			
		</form>
        </div>
      
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
</div>

