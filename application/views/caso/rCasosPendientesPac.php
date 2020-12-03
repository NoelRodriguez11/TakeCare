<div class="container">
<h1 class="textoexp1-enunciados">Solicitudes Pendientes</h1>

<?php if(count($casos)==0):?>
<p class="tituloCasosIndicador">No tienes ninguna solicitud pendiente</p>
<?php else:?>
<?php foreach ($casos as $caso):?>
<?php if($caso->persona->id == $datosGen["persona"]->id):?>
<div class="divCasosPendientes">
		<div class="row">
                <!--Nombre del paciente -->
            	<div class="col-sm-2 tituloCasosIndicador" >Paciente:<div id="nombrePersona">
            	<?=$caso->persona->nombre?> <?=$caso->persona->primerApellido?> <?=$caso->persona->segundoApellido?>
            	</div></div>
            	
            	<!--fecha solicitada -->
            	<div class="col-sm-2 tituloCasosIndicador" >Fecha Solicitada:<div class="textoCasosContenido"><?=$caso->fechaInicio?></div></div>
                
                 <!--diagnostico -->
            	<div class="col-sm-7 tituloCasosIndicador" >Diagnostico Preliminar:<div class="textoCasosContenido"><?=$caso->diagnosticoGeneral?></div></div>
            	
         	
            	<form class="col-sm-1" action="<?=base_url()?>caso/dPost" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Rechazar Caso" onclick="submit()" class="botonCambioPropuesta btn btn-danger" id="botonPC">Anular solicitud</button>
        		</form>
        		
    		</div>	   
		</div> 

<?php endif;?>      
<?php endforeach;?>
<?php endif;?>  
 
</div>


