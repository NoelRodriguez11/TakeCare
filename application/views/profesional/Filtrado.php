<div class="container">

<h1 class="textoexp1-enunciados">Listado Completo de Profesionales</h1>
<h5 class="textoexp2-sinMargen">En esta seccion podrás consultar el listado completo de profesionales dados de alta en la pagina</h5>
<?php if ($datosGen['persona']==null && $datosGen['profesional']==null):?>
<p class="noregistrado">Registrate para poder contactar con un profesional</p><br>
<?php endif;?>
<script type="text/javascript">
	var base_url = "<?php echo base_url()?>";
</script>

<!-- Estos div de palabraes tiene que ser obtenido de la bbdd segun los prodesionales que haya en la bbdd -->
<?php foreach ($palabras as $palabra):?>
<div class="divAnuncioProfesionales">

		<!--Foto del profesional -->
		<div class="row">
		<?php if($palabra->extension_Foto != null):?>
		<img class="divFotoPerfil col-sm-2" style="margin:0;" src="<?=base_url()?>/assets/img/upload/profesional/pro<?=$palabra->id?>.<?= $palabra->extension_Foto?>"/>
		<?php else:?>
		<img class="divFotoPerfil col-sm-2" style="margin:0;" src="<?=base_url()?>/assets/img/upload/profesional/noImage.jpg"/>
		<?php endif;?>
		
		
		<div class="col-sm-4 especialidadIndicador divEstrellitas" >
			Valoración
			<div class="row">
			<?php if($palabra->valoracion == 0):?>
			<div class="estrellas">
			<i class="far fa-star"></i>&nbsp<i class="far fa-star">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp</div>
			&nbsp¡Sé el primero!
			
			<?php elseif($palabra->valoracion >= 0.5 && $palabra->valoracion < 1):?>
			<div class="estrellas">
			<i class="fas fa-star-half-alt"></i>&nbsp</i><i class="far fa-star">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$palabra->numeroValoraciones ?>)</div>
			
			<?php elseif($palabra->valoracion >= 1 && $palabra->valoracion < 1.5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="far fa-star">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$palabra->numeroValoraciones ?>)</div>
			
			<?php elseif($palabra->valoracion >= 1.5 && $palabra->valoracion < 2):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star-half-alt">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$palabra->numeroValoraciones ?>)</div>
			
			<?php elseif($palabra->valoracion >= 2 && $palabra->valoracion < 2.5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$palabra->numeroValoraciones ?>)</div>		
			
			<?php elseif($palabra->valoracion >= 2.5 && $palabra->valoracion < 3):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star-half-alt"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$palabra->numeroValoraciones ?>)</div>				
			
			<?php elseif($palabra->valoracion >= 3 && $palabra->valoracion < 3.5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$palabra->numeroValoraciones ?>)</div>
						
			<?php elseif($palabra->valoracion >= 3.5 && $palabra->valoracion < 4):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="fas fa-star-half-alt"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$palabra->numeroValoraciones ?>)</div>	
			
			<?php elseif($palabra->valoracion >= 4 && $palabra->valoracion < 4.5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="fas fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$palabra->numeroValoraciones ?>)</div>			
			
			<?php elseif($palabra->valoracion >= 4.5 && $palabra->valoracion < 5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="fas fa-star"></i>&nbsp<i class="fas fa-star-half-alt"></i>
			&nbsp (<?=$palabra->numeroValoraciones ?>)</div>			
			
			<?php elseif($palabra->valoracion == 5) :?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="fas fa-star"></i>&nbsp<i class="fas fa-star"></i>
			&nbsp (<?=$palabra->numeroValoraciones ?>)</div>						
			<?php endif;?>
			</div>
        </div>
        
         <!--Horario -->
    	<div class="col-sm-2 especialidadIndicador horario" style="margin-left:0; right:.5rem;" >Horario:<div id="especialidadEstiloHorario"><?=$palabra->turno?><br><?=$palabra->franja?></div></div>
      
		
       	<form action="<?=base_url()?>caso/c" method="get">
			<input type="hidden" name="idProfesional" value="<?=$palabra->id?>">
	
			<button onclick="submit()" class="botonPedirCita btn btn-primary col-sm-3" id="botonPC" <?php if ($datosGen['persona']==null || $datosGen['persona']->dni =="admin"):?>disabled<?php endif;?>>Enviar Solicitud</button>

		</form>
      
		</div>
            
		<div class="row">
        <!--Nombre del palabra -->
    	<div class="col-sm-6" id="nombreProfesionales">
    	
    	<?=$palabra->nombre?> <?=$palabra->primerApellido?> <?=$palabra->segundoApellido?>
    	</div>
        
         <!--Especialidad -->
    	<div class="col-sm-2 especialidadIndicador" >Especialidad:<div id="especialidadEstilo"><?=$palabra->especialidad->nombre?></div></div>
    	
    	  <!--Especialidad -->
    	<div class="col-sm-2 provinciaIndicador" >Ubicación:<div id="provinciaEstilo"><?=$palabra->ciudad?>, <?=$palabra->provincia?></div></div>
    	
    	<div class="col-sm-2 provinciaIndicador" >Telefono:<div id="provinciaEstilo"><?=$palabra->telefono?></div></div>
    	</div>
</div>
<?php endforeach;?>
</div>
