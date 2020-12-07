<div class="container">
<h1 class="textoexp1-enunciados">Casos pendientes</h1>

<?php if(count($casos)==0):?>
<p class="tituloCasosIndicador">No tienes casos pendientes por revisar</p>
<?php else:?>
<?php foreach ($casos as $caso):?>
<?php if($caso->profesional->id == $datosGen["profesional"]->id):?>
<div class="divCasosPendientes">
		<div class="row">
                <!--Nombre del paciente -->
            	<div class="col-sm-2 tituloCasosIndicador" >Paciente:<div id="nombrePersona">
            	<?=$caso->persona->nombre?> <?=$caso->persona->primerApellido?> <?=$caso->persona->segundoApellido?>
            	</div></div>
            	
            	<!--fecha solicitada -->
            	<div class="col-sm-2 tituloCasosIndicador" >Fecha Solicitada:<div class="textoCasosContenidoConFormatoFechaHora"><?=$caso->fechaInicio?></div></div>
                
                 <!--diagnostico -->
            	<div class="col-sm-4 tituloCasosIndicador" >Diagnostico Preliminar:
            	<?php if($caso->diagnosticoGeneral != "(No especificado por el paciente)"):?>
            		<div class="textoCasosContenido" style="word-wrap: break-word;"><?=$caso->diagnosticoGeneral?></div>
            	<?php else:?>
            		<div class="textoCasosContenido" style="word-wrap: break-word; color:grey"><i><?=$caso->diagnosticoGeneral?></i></div>	
            	<?php endif;?>
            	</div>
            	

            	<form class="col-sm-1" action="<?=base_url()?>profesional/cambiarPropuesta" method="post">
        			<input type="hidden" name="idProfesional" value="<?=$caso->id?>">
        			<button title="Rechazar Caso" onclick="submit()" class="botonCambioPropuesta btn btn-primary textoexp2-sinMargen" id="botonPC">Cambiar propuesta</button>
        		</form>           	
            	
            	<form class="col-sm-1" action="<?=base_url()?>profesional/rechazarCaso" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Rechazar Caso" onclick="submit()" class="botonCasoAceptarRechazar btn btn-danger" id="botonPC"><i class="fa fa-times fa-2x ajusteIcono"></i> </button>
        		</form>
        		       		
                <form class="col-sm-1" action="<?=base_url()?>profesional/aceptarCaso" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<input type="hidden" name="idProfesional" value="<?=$caso->profesional->id?>">
        			<input type="hidden" name="idPaciente" value="<?=$caso->persona->id?>">
        			<input type="hidden" name="fechaHora" value="<?=$caso->fechaInicio?>">
        			<button title="Aceptar Caso" onclick="submit()" class="botonCasoAceptarRechazar btn btn-success" id="botonPC"><i class="fa fa-check fa-2x ajusteIcono"></i> </button>
        		</form>
    		</div>	   
		</div> 

<?php endif;?>      
<?php endforeach;?>
<?php endif;?>  
 
</div>


