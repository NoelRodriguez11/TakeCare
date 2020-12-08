<div class="container">

<h1 class="textoexp1-enunciados">Listado Completo de Personas</h1>

<!-- Estos div de personaes tiene que ser obtenido de la bbdd segun los prodesionales que haya en la bbdd -->
<?php foreach ($personas as $persona):?>

<div class="divAnuncioProfesionales">

		<!--Foto del persona -->
		<div class="row">
		<img class="divFotoPerfil col-sm-2" style="margin:0;" src="<?=base_url()?>/assets/img/upload/persona/persona-<?=$persona->id?>.jpg"/>
            
		<div class="row">
        <!--Nombre del persona -->
    	<div class="col-sm-6" id="nombreProfesionales">
    	
    	<?=$persona->nombre?> <?=$persona->primerApellido?> <?=$persona->segundoApellido?>
    	</div>
        	
    	  <!--Especialidad -->
    	<div class="col-sm-2 provinciaIndicador">Ubicación:<div id="provinciaEstilo"><?=$persona->ciudad?>, <?=$persona->provincia?></div></div>
    	
    	<div class="col-sm-2 provinciaIndicador">
        	<div id="provinciaEstilo">
        		<form action="<?=base_url()?>persona/dPost" method="post">
            		<input type="hidden" name="id" value="<?=$persona->id?>">
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
</div>