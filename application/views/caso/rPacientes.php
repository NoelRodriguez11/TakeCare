<div class="container">
<h1 class="textoexp1-enunciados">Mis Tratamientos</h1>

<?php if(count($casos)==0):?>
<p class="tituloCasosIndicador">No tienes ningún tratamiento actualmente en curso</p>
<?php else:?>
<?php foreach ($casos as $caso):?>
<?php if($caso->persona->id == $datosGen["persona"]->id):?>
<div class="divTratamientoPacientes">
		<div class="row">
                <!--Nombre del profesional -->
            	<div class="col-sm-2 tituloCasosIndicador" >Profesional:<div id="nombrePersona">
            	<?=$caso->profesional->nombre?> <?=$caso->profesional->primerApellido?> <?=$caso->profesional->segundoApellido?>
            	</div></div>
            	
            	<div class="col-sm-2 tituloCasosIndicador" >Especialidad:<div class="textoCasosContenidoPaciente"><?=$caso->profesional->especialidad->nombre?></div></div>
            	
            	<!--fecha solicitada -->
            	<div class="col-sm-3 tituloCasosIndicadorPaciente" style="overflow: hidden;" ><p style="float: left;">Próxima cita:</p><p style="float: right;" class="textoCasosContenidoConFormatoFechaHora"><?=$caso->fechaInicio?></p></div>
                
                <div class="col-sm-1"></div>
     			
            	<form class="col-sm-2" action="<?=base_url()?>caso/#" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Ver la información detallada del tratamiento" onclick="submit()" class="botonCambioPropuesta btn btn-primary" id="botonPC">Ver Información Completa</button>
        		</form>
        		
        		 <form class="col-sm-2" action="<?=base_url()?>caso/#" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Finalizar el tratamiento" onclick="submit()" class="botonCambioPropuesta btn btn-danger" id="botonPC">Finalizar tratamiento</button>
                <!--NUEVO CASO QUE CONVIERTE EL ESTADO DE EL CASO EN "CERRADO POR EL PACIENTE" -->
        		</form>
 
    		</div>	   
		</div> 

<?php endif;?>
<?php endforeach;?>

<?php endif;?>  
 
</div>


