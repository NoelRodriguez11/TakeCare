<div class="container">
<h1 class="textoexp1-enunciados">Mis casos</h1>

  
<?php foreach ($casos as $caso):?>
<?php if($caso->profesional->id == $datosGen["profesional"]->id && $caso->estado=="aceptado"):?>
<div class="divCasosPendientes">
		<div class="row">
                <!--Nombre del paciente -->
            	<div class="col-sm-2 tituloCasosIndicador" >Paciente:<div id="nombrePersona">
            	<?=$caso->persona->nombre?> <?=$caso->persona->primerApellido?> <?=$caso->persona->segundoApellido?>
            	</div></div>
            	
            	<!--fecha solicitada -->
            	<div class="col-sm-2 tituloCasosIndicador" >Fecha Solicitada:<div class="textoCasosContenido"><?=$caso->fechaInicio?></div></div>
                
                 <!--diagnostico -->
            	<div class="col-sm-3 tituloCasosIndicador" >Diagnostico Preliminar:<div class="textoCasosContenido"><?=$caso->diagnosticoGeneral?></div></div>
            	

            	<form class="col-sm-2" action="<?=base_url()?>profesional/cambiarPro" method="get">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Rechazar Caso" onclick="submit()" class="botonCambioPropuesta btn btn-primary textoexp2-sinMargen" id="botonPC">Editar diagnostico</button>
        		</form>    
        		
        		<form class="col-sm-1" action="<?=base_url()?>profesional/cambiarPropuesta" method="get">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Rechazar Caso" onclick="submit()" class="botonCambioPropuesta btn btn-primary textoexp2-sinMargen" id="botonPC">Nueva Cita</button>
        		</form>
        		    
            	<form class="col-sm-1" action="<?=base_url()?>profesional/cambiarPropuesta" method="get">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Rechazar Caso" onclick="submit()" class="botonCambioPropuesta btn btn-success textoexp2-sinMargen" id="botonPC">Dar de alta</button>
        		</form>           	
            	
            	
    		</div>	   
		</div>
<?php else:?>
 <p class="tituloCasosIndicador">No tienes casos pendientes por revisar</p> 
<?php endif;?>      
<?php endforeach;?>

</div>


