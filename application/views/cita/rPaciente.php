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
         	<div class="col-sm-10" style="word-wrap: break-word;">
             	<div class="tituloCasosIndicadorInformacionPaciente" >Citas</div>
             	<div class="row" >
             		<div class="col-sm-1"></div>
             		<div class="col-sm-2"></div>
             		<div class="col-sm-4 tituloCasosIndicador">Fecha y Hora</div> 
             		<div class="col-sm-2 tituloCasosIndicador">Caracter</div>          	
             	</div>
             	<?php $i = 1;?>
             	<?php foreach($citas as $cita):?>
             	<div class="contenedoresInformacionCitas row" >
             		<?php if($cita->caracter == "Diagnóstico" || $cita->caracter == "Ultima cita"):?>
             		<div class="col-sm-1"><?= $i?></div>
             		<div class="col-sm-2"></div>
             		<div class="col-sm-4 textoCasosContenidoConFormatoFechaHoraInformacion"><?= $cita->fecha?></div> 
             		<div class="col-sm-3"><?= $cita->caracter?></div>
             		<button class="botonInformacionCita btn btn-danger btn-sm" style="visibility: hidden">✖</button>
             		
             		<?php else:?> 
             		 <div class="col-sm-1"><?= $i?></div>
             		<div class="col-sm-2"></div>
             		<div class="col-sm-4 textoCasosContenidoConFormatoFechaHoraInformacion"><?= $cita->fecha?></div> 
             		<div class="col-sm-3"><?= $cita->caracter?></div>
             		<div class="col-sm-2">
             			
                 		<?php if($caso->estado == "Aceptada"):?> 
                 			<form style="float:right;" action="<?=base_url()?>cita/dPostPaciente" method="post">
                 			<input type="hidden" name="idCita" value="<?=$cita->id?>">
                 		    <input type="hidden" name="idCaso" value="<?=$caso->id?>">
                       		<button class="botonInformacionCita btn btn-danger btn-sm">✖</button> 
                       		</form>  
                       		
                       		<?php if($cita->fechaAnterior == null):?>   
                 		    <form style="float:right;" action="<?=base_url()?>persona/solicitarCambioCita" method="get">
                 		    <input type="hidden" name="idCita" value="<?=$cita->id?>">
                 		    <input type="hidden" name="idCaso" value="<?=$caso->id?>">
                 		    <input type="hidden" name="fechaAnterior" value="<?=$cita->fecha?>">
                       		<button  class="botonInformacionCita btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                       		</form>
                       		<?php endif;?>
                      		               		
                     		<form style="float:right; visibility:hidden;" action="<?=base_url()?>cita/#" method="post">
                      		<button class="botonInformacionCita btn btn-success btn-sm"><i class="fas fa-check"></i></button>  
                      		</form>
                   		<?php endif;?>
                   		
                   		
             		</div>
             		<?php endif;?>             	            	
             	</div>
             	<?php $i++;?>
             	<?php endforeach;?>
    
        			
    	 		
        	</div>  
    	</div>  
    	 
             
</div> 

<?php endif;?>

 
</div>