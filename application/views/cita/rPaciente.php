<div class="container">
<h1 class="textoexp1-enunciados">Información sobre el tratamiento</h1>

<?php foreach ($casos as $caso):?>
<?php if($caso->persona->id == $datosGen["persona"]->id):?>
<div class="divInformacionTratamiento">
		<div class="row">
                <!--Nombre del profesional -->
            	<div class="col-sm-4 tituloCasosIndicador" >Profesional:<div id="nombrePersona">
            	<?=$caso->profesional->nombre?> <?=$caso->profesional->primerApellido?> <?=$caso->profesional->segundoApellido?>
            	</div></div>
            	
            	<div class="col-sm-4 tituloCasosIndicador" >Especialidad:<div class="textoCasosContenidoPaciente"><?=$caso->profesional->especialidad->nombre?></div></div>
            	
            
            	<!--fecha solicitada -->
            	<div class="col-sm-3 tituloCasosIndicadorPaciente" style="overflow: hidden;" ><p style="float: left;">Próxima cita:</p><p style="float: right;" class="textoCasosContenidoConFormatoFechaHora"><?=$caso->fechaInicio?></p></div>
                <div class="col-sm-1"></div>
               
     			

        		
        		
 
    	</div>	
    	
    	<hr class="divisorHorizontal">
     	<div class="row">
         	<div class="col-sm-6" style="word-wrap: break-word;">
         	<div class="tituloCasosIndicadorInformacionPaciente" >Diagnostico General</div>
         	
         	
         	
         	
         	
         	</div>
         	<div class="divisorVertical col-sm-5"></div>
         	<div class="col-sm-5" style=" word-wrap: break-word;">
         	<div class="tituloCasosIndicadorInformacionPaciente" >Síntomas</div>
     	
     	
     	
     		</div>

    			
	 		
    	</div>  
    	
    	
 		<hr class="divisorHorizontal">
     	<div class="row">
     	<div class="col-sm-8" style="word-wrap: break-word;">
     	<div class="tituloCasosIndicadorInformacionPaciente" >Citas</div>
     	<div class="contenedoresInformacionCitas" >Cita de prueba</div>
     	<div class="contenedoresInformacionCitas" >Cita de prueba</div>
     	<div class="contenedoresInformacionCitas" >Cita de prueba</div>
     	<div class="contenedoresInformacionCitas" >Cita de prueba</div>
    			
	 		
    	</div>  
    	</div>  
    	 
    	<div class="row">
    			<div class="col-sm-9"></div>
    		    <form class="col-sm-2" action="<?=base_url()?>cita/rPaciente" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Ver la información detallada del tratamiento" onclick="submit()" class="botonCambioPropuesta btn btn-primary" id="botonPC">Solicitar cambio de cita</button>
        		</form>
        		 	 		
    	</div>   
</div> 

<?php endif;?>
<?php endforeach;?>

 
</div><