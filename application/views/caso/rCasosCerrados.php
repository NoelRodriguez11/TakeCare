<div class="container">
<h1 class="textoexp1-enunciados">Historial de casos cerrados</h1>

<?php if(count($casos)==0):?>
<p class="tituloCasosIndicador">No tienes ningún caso actualmente en curso</p>
<?php else:?>
<?php foreach ($casos as $caso):?>
<?php if($caso->profesional->id == $datosGen["profesional"]->id):?>
<div class="divTratamientoPacientes">
		<div class="row">
                <!--Nombre -->
            	<div class="col-sm-2 tituloCasosIndicador" >Paciente:<div id="nombrePersona">
            	<?=$caso->persona->nombre?> <?=$caso->persona->primerApellido?> <?=$caso->persona->segundoApellido?>
            	</div></div>
            	
            	<div class="col-sm-2 tituloCasosIndicador" ></div>
            	
            	<!--fecha-->
            	<div class="col-sm-3 tituloCasosIndicadorPaciente" style="overflow: hidden;" ><p style="float: left;">Fecha de alta:</p><p style="float: right;" class="textoCasosContenidoConFormatoFechaHora"><?=$caso->fechaInicio?></p></div>
                
                <div class="col-sm-3"></div>
     			
            	<form class="col-sm-2" action="<?=base_url()?>cita/rProfesionalFinalizada" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Ver la información detallada del tratamiento" onclick="submit()" class="botonCambioPropuesta btn btn-primary" id="botonPC">Ver Información Completa</button>
        		</form>
        		
    		</div>	   
		</div> 

<?php endif;?>
<?php endforeach;?>

<?php endif;?>  
 
</div>


