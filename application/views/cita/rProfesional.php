<div class="container">
<h1 class="textoexp1-enunciados">Información sobre el tratamiento</h1>

<?php foreach ($casos as $caso):?>
<?php if($caso->profesional->id == $datosGen["profesional"]->id):?>
<div class="divInformacionTratamiento">
		<div class="row">
                <!--Nombre del profesional -->
            	<div class="col-sm-4 tituloCasosIndicador" >Paciente:<div id="nombrePersona">
            	<?=$caso->persona->nombre?> <?=$caso->persona->primerApellido?> <?=$caso->persona->segundoApellido?>
            	</div></div>
            	
            	<div class="col-sm-4 tituloCasosIndicador" >Diagnóstico Preliminar:
            	<?php if($caso->diagnosticoPreliminar != "(No especificado por el paciente)"):?>
            		<div class="textoCasosContenido" style="word-wrap: break-word;"><?=$caso->diagnosticoPreliminar?></div>
            	<?php else:?>
            		<div class="textoCasosContenido" style="word-wrap: break-word; color:grey"><i><?=$caso->diagnosticoPreliminar?></i></div>	
            	<?php endif;?>
            	</div>
            	
            
            	<!--fecha solicitada -->
            	<div class="col-sm-3 tituloCasosIndicadorPaciente" style="overflow: hidden;" ><p style="float: left;">Próxima cita:</p><p style="float: right;" class="textoCasosContenidoConFormatoFechaHora"><?=$caso->fechaInicio?></p></div>
                <div class="col-sm-1"></div>
               
     			

        		
        		
 
    	</div>	
    	
    	<hr class="divisorHorizontal">
     	<div class="row">
     	
         	<div class="col-sm-6" style="word-wrap: break-word;">
             	 <div class="row">
             		<div class="tituloCasosIndicadorInformacionPaciente col-sm-8" >Diagnóstico General</div>
             		<button class="botonCambioPropuesta btn btn-info col-sm-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 15%;height:32px; bottom: 1.5rem; left: 7rem;">
                      Editar
                    </button>
                </div>
               <textarea class="textareaDiagnostico" disabled><?=$caso->diagnosticoGeneral?></textarea>   	
            </div>
            
         	<div class="divisorVertical col-sm-5"></div>
         	
         	<div class="col-sm-5" style=" word-wrap: break-word;">
         		<div class="row">
             		<div class="tituloCasosIndicadorInformacionPaciente col-sm-8" >Síntomas</div>
             		<button class="botonCambioPropuesta btn btn-info col-sm-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 30%; height:32px; bottom: 1.5rem; left: 5rem;">
                      Agregar Sintomas
                    </button>
                </div>
     	
     	
     	
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
    	
    	<!--     	 MODAL PARA EDITAR EL DIAGNOSTICO -->
    	       <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title tituloCasosIndicador" id="exampleModalLongTitle" style="font-size: 180% !important; color:rgb(40, 96, 144);">Editar Diagnostico General</h5>
                        </button>
                      </div>
                                            
                      <div class="modal-footer">
                        
                       <form action="<?=base_url()?>profesional/editarDiagnostico" method="post">
                       		<textarea name="diagnosticoGeneral" class="modal-body textoCasosContenidoPaciente" maxlength=1000 style="width: 100%; height:250px; margin-bottom: 1rem;"><?=$caso->diagnosticoGeneral?></textarea>
            				<input type="hidden" name="idCaso" value="<?=$caso->id?>">
            				<button type="button" onclick="submit()" class="btn btn-primary" id="botonPC">Editar</button>
            				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            				
        			   </form>
                      </div>
                    </div>
                  </div>
                </div>
</div> 

<?php endif;?>
<?php endforeach;?>

 
</div><