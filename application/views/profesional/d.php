<div class="container">

<h1 class="textoexp1-enunciados">Listado Completo de Profesionales</h1>

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
		<img class="divFotoPerfil col-sm-2" style="margin:0;" src="<?=base_url()?>/assets/img/upload/profesional/pro<?=$profesional->id?>.jpg"/>
		
		
		<div class="col-sm-4 especialidadIndicador divEstrellitas" >
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
        
         <!--Horario -->
    	<div class="col-sm-2 especialidadIndicador horario">Horario:<div id="especialidadEstiloHorario"><?=$profesional->turno?><br><?=$profesional->franja?></div></div>
		</div>
            
		<div class="row">
        <!--Nombre del profesional -->
    	<div class="col-sm-6" id="nombreProfesionales">
    	
    	<?=$profesional->nombre?> <?=$profesional->primerApellido?> <?=$profesional->segundoApellido?>
    	</div>
        
         <!--Especialidad -->
    	<div class="col-sm-2 especialidadIndicador">Especialidad:<div id="especialidadEstilo"><?=$profesional->especialidad->nombre?></div></div>
    	
    	  <!--Especialidad -->
    	<div class="col-sm-2 provinciaIndicador">Ubicación:<div id="provinciaEstilo"><?=$profesional->ciudad?>, <?=$profesional->provincia?></div></div>
    	
    	<div class="col-sm-2 provinciaIndicador">
        	<div id="provinciaEstilo">
        		<form action="<?=base_url()?>profesional/dPost" method="post">
            		<input type="hidden" name="id" value="<?=$profesional->id?>">
                    	<button onclick="submit()">
                    		<img src="<?=base_url()?>/assets/img/basura.png" height="20" width="20">
                    	</button>
            	</form>
            </div>
        </div>
    	</div>
</div>
<?php endforeach;?>
</div>