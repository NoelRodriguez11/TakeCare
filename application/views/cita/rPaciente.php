<div class="container">
<h1 class="textoexp1-enunciados">Información sobre el tratamiento</h1>

<?php if($caso->persona->id == $datosGen["persona"]->id):?>
<div class="divInformacionTratamiento">
		<div class="row">
                <!--Nombre del profesional -->
            	<div class="col-sm-4 tituloCasosIndicador" >Profesional:<div id="nombrePersona">
            	<?=$caso->profesional->nombre?> <?=$caso->profesional->primerApellido?> <?=$caso->profesional->segundoApellido?>
            	</div></div>
            	
            	<div class="col-sm-4 tituloCasosIndicador" >Especialidad:
            		<div class="textoCasosContenido" style="word-wrap: break-word;"><?=$caso->profesional->especialidad->nombre?></div>
            	</div>
            	
            
            	<!--fecha solicitada -->
            	<div class="col-sm-3 tituloCasosIndicadorPaciente" style="overflow: hidden;" ><p style="float: left;">
            	<?php if($caso->estado == "Aceptada"):?>
            	Próxima cita:
            	<?php elseif($caso->estado == "Finalizada"):?>
            	Fecha de alta:
            	<?php endif;?>
            	</p><p style="float: right;" class="textoCasosContenidoConFormatoFechaHora"><?=end($citas)->fecha?></p></div>
                <div class="col-sm-1"></div>
             
    	</div>	
    	
    	<hr class="divisorHorizontal">
     	<div class="row">
     	
         	<div class="col-sm-6" style="word-wrap: break-word;">
             	 <div class="row">
             		<div class="tituloCasosIndicadorInformacionPaciente col-sm-8" >Diagnóstico General</div>
                </div>
               <textarea style="margin-top:17px;" class="textareaDiagnostico" disabled><?=$caso->diagnosticoGeneral?></textarea>   	
            </div>
            
         	<div class="divisorVertical col-sm-5"></div>
         	
         	<div class="col-sm-5" style=" word-wrap: break-word;">
         		<div class="row">
             		<div class="tituloCasosIndicadorInformacionPaciente col-sm-8" >Síntomas</div>
                </div>                  
                	<div style="margin-top:17px;">              
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma1 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma1?></p>
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma2 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma2?></p>
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma3 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma3?></p>
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma4 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma4?></p> 
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma5 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma5?></p> 
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma6 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma6?></p> 
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma7 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma7?></p>  
                     </div>                
     		</div>

    			
	 		
    	</div>  
    	
    	
 		<hr class="divisorHorizontal">
     	<div class="row">
         	<div class="col-sm-8" style="word-wrap: break-word;">
             	<div class="tituloCasosIndicadorInformacionPaciente" >Citas</div>
             	<div class="contenedoresInformacionCitas" >Cita de prueba</div>
        	</div>  
    	</div>  
    	 
    	 
    	<?php if($caso->estado == "Aceptada"):?>  	
    	<div class="row">
    			<div class="col-sm-9"></div>
    		    <form class="col-sm-2" action="<?=base_url()?>cita/rPaciente" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Ver la información detallada del tratamiento" onclick="submit()" class="botonCambioPropuesta btn btn-primary" id="botonPC">Solicitar cambio de cita</button>
        		</form>    		 	 		
    	</div>   
    	<?php endif;?>
             
</div> 

<?php endif;?>

 
</div>