<div class="container">

<h1 class="textoexp1-enunciados">Listado Completo de Profesionales</h1>

<!-- Estos div de profesionales tiene que ser obtenido de la bbdd segun los prodesionales que haya en la bbdd -->
<?php foreach ($profesionales as $profesional):?>

<div class="divAnuncioProfesionales">

		<!--Foto del profesional -->
		<div class="row">
		<img class="divFotoPerfil col-sm-2" style="margin:0;" src="<?=base_url()?>/assets/img/upload/profesional/pro<?=$profesional->id?>.jpg"/>
		
		<div class="col-sm-4 especialidadIndicador divEstrellitas" >
			Valoración
			<div class="row">
			<?php if($profesional->valoracion == 0):?>
			<div class="estrellas">
			<i class="far fa-star"></i>&nbsp<i class="far fa-star">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp</div>
			&nbsp¡Sé el primero!
			
			<?php elseif($profesional->valoracion >= 0.5 && $profesional->valoracion < 1):?>
			<div class="estrellas">
			<i class="fas fa-star-half-alt"></i>&nbsp</i><i class="far fa-star">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>
			
			<?php elseif($profesional->valoracion >= 1 && $profesional->valoracion < 1.5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="far fa-star">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>
			
			<?php elseif($profesional->valoracion >= 1.5 && $profesional->valoracion < 2):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star-half-alt">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>
			
			<?php elseif($profesional->valoracion >= 2 && $profesional->valoracion < 2.5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>		
			
			<?php elseif($profesional->valoracion >= 2.5 && $profesional->valoracion < 3):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star-half-alt"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>				
			
			<?php elseif($profesional->valoracion >= 3 && $profesional->valoracion < 3.5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>
						
			<?php elseif($profesional->valoracion >= 3.5 && $profesional->valoracion < 4):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="fas fa-star-half-alt"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>	
			
			<?php elseif($profesional->valoracion >= 4 && $profesional->valoracion < 4.5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="fas fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>			
			
			<?php elseif($profesional->valoracion >= 4.5 && $profesional->valoracion < 5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="fas fa-star"></i>&nbsp<i class="fas fa-star-half-alt"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>			
			
			<?php elseif($profesional->valoracion == 5) :?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="fas fa-star"></i>&nbsp<i class="fas fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>						
			<?php endif;?>
			</div>
        </div>
        
         <!--Horario -->
    	<div class="col-sm-2 especialidadIndicador horario" style="margin-left:0; right:.5rem;" >Horario<div id="especialidadEstiloHorario"><?=$profesional->turno?><br><?=$profesional->franja?></div></div>
      
		
       	<form action="<?=base_url()?>profesional/dPost" method="post">
            		<input type="hidden" name="id" value="<?=$profesional->id?>">
                    	<button onclick="submit()" class="botonPedirCita btn btn-danger col-sm-3" id="botonPC">Borrar</button>
        </form>
       

		</div>
            
		<div class="row">
        <!--Nombre del profesional -->
    	<div class="col-sm-6" id="nombreProfesionales">
    	
    	<?=$profesional->nombre?> <?=$profesional->primerApellido?> <?=$profesional->segundoApellido?>
    	</div>
        
         <!--Especialidad -->
    	<div class="col-sm-2 especialidadIndicador" >Especialidad:<div id="especialidadEstilo"><?=$profesional->especialidad->nombre?></div></div>
    	
    	  <!--Especialidad -->
    	<div class="col-sm-2 provinciaIndicador" >Ubicación:<div id="provinciaEstilo"><?=$profesional->ciudad?>, <?=$profesional->provincia?></div></div>
    	
    	<div class="col-sm-2 provinciaIndicador" >Telefono:<div id="provinciaEstilo"><?=$profesional->telefono?></div></div>
    	
    	
    	</div>
</div>
<?php endforeach;?>
</div>
