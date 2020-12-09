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
             		<button class="botonCambioPropuesta btn btn-info col-sm-4" data-toggle="modal" data-target="#diagnosticoModalCenter" style="width: 15%;height:32px; bottom: 1.5rem; left: 7rem;">
                      Editar
                    </button>
                </div>
               <textarea class="textareaDiagnostico" disabled><?=$caso->diagnosticoGeneral?></textarea>   	
            </div>
            
         	<div class="divisorVertical col-sm-5"></div>
         	
         	<div class="col-sm-5" style=" word-wrap: break-word;">
         		<div class="row">
             		<div class="tituloCasosIndicadorInformacionPaciente col-sm-8" >Síntomas</div>
             		<button class="botonCambioPropuesta btn btn-info col-sm-4" data-toggle="modal" data-target="#sintomasModalCenter" style="width: 19%; height:32px; bottom: 1.5rem; left: 9rem;">
                      Editar
                    </button>
                </div>                  
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma1 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma1?></p>
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma2 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma2?></p>
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma3 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma3?></p>
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma4 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma4?></p> 
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma5 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma5?></p> 
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma6 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma6?></p> 
                      	<p style="font-size:110%;<?php if($caso->afeccion->sintoma7 == "Ninguno"):?>display:none;<?php endif;?>font-family:'Exo 2', sans-serif;">● <?=$caso->afeccion->sintoma7?></p>                 
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
    	       <div class="modal fade" id="diagnosticoModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                
<!--     	 MODAL PARA AGREGAR SINTOMAS -->
    	       <div class="modal fade" id="sintomasModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title tituloCasosIndicador" id="exampleModalLongTitle" style="font-size: 180% !important; color:rgb(40, 96, 144);">Agregar Síntomas</h5>
                        </button>
                      </div>
                                            
                      <div class="modal-footer">
                        
                       <form action="<?=base_url()?>profesional/agregarSintoma" method="post">
                       
                      		<input type="hidden" name="idAfeccion" value="<?=$caso->afeccion->id?>">
                      		
                      		<div class="row">
                      		<div class="col-sm-3" style="margin-bottom:2.7rem;"></div>
                            <select name="sintoma1" id="sintoma1" class="col-sm-5">
                            <?php if($caso->afeccion->sintoma1 != "Ninguno"):?>
                            <option value="Ninguno">Ninguno</option>
                            <?php endif;?>
                            <option value="<?=$caso->afeccion->sintoma1?>" selected><?=$caso->afeccion->sintoma1?></option>
                              <?php foreach ($sintomas as $sintoma):?>
                              	<?php if($sintoma->nombre != $caso->afeccion->sintoma1):?>
                              	<option value="<?=$sintoma->nombre?>"><?=$sintoma->nombre?></option>
                              	<?php endif;?>
                              <?php endforeach;?>
                            </select>
            				</div>
            				
            				<div class="row">
                      		<div class="col-sm-3" style="margin-bottom:2.7rem;"></div>
                            <select name="sintoma2" id="sintoma2" class="col-sm-5">
                            <?php if($caso->afeccion->sintoma2 != "Ninguno"):?>
                            <option value="Ninguno">Ninguno</option>
                            <?php endif;?>
                              <option value="<?=$caso->afeccion->sintoma2?>" selected><?=$caso->afeccion->sintoma2?></option>
                              <?php foreach ($sintomas as $sintoma):?>
                              	<?php if($sintoma->nombre != $caso->afeccion->sintoma2):?>
                              	<option value="<?=$sintoma->nombre?>"><?=$sintoma->nombre?></option>
                              	<?php endif;?>
                              <?php endforeach;?>
                            </select>
            				</div>
            				
            				<div class="row">
                      		<div class="col-sm-3" style="margin-bottom:2.7rem;"></div>
                            <select name="sintoma3" id="sintoma3" class="col-sm-5">
                            <?php if($caso->afeccion->sintoma3 != "Ninguno"):?>
                            <option value="Ninguno">Ninguno</option>
                            <?php endif;?>
                              <option value="<?=$caso->afeccion->sintoma3?>" selected><?=$caso->afeccion->sintoma3?></option>
                              <?php foreach ($sintomas as $sintoma):?>
                              	<?php if($sintoma->nombre != $caso->afeccion->sintoma3):?>
                              	<option value="<?=$sintoma->nombre?>"><?=$sintoma->nombre?></option>
                              	<?php endif;?>
                              <?php endforeach;?>
                            </select>
            				</div>
            				
            				<div class="row">
                      		<div class="col-sm-3" style="margin-bottom:2.7rem;"></div>
                            <select name="sintoma4" id="sintoma4" class="col-sm-5">
                            <?php if($caso->afeccion->sintoma4 != "Ninguno"):?>
                            <option value="Ninguno">Ninguno</option>
                            <?php endif;?>
                              <option value="<?=$caso->afeccion->sintoma4?>" selected><?=$caso->afeccion->sintoma4?></option>
                              <?php foreach ($sintomas as $sintoma):?>
                              	<?php if($sintoma->nombre != $caso->afeccion->sintoma4):?>
                              	<option value="<?=$sintoma->nombre?>"><?=$sintoma->nombre?></option>
                              	<?php endif;?>
                              <?php endforeach;?>
                            </select>
            				</div>
            				            				
            				<div class="row">
                      		<div class="col-sm-3" style="margin-bottom:2.7rem;"></div>
                            <select name="sintoma5" id="sintoma5" class="col-sm-5">
                            <?php if($caso->afeccion->sintoma4 != "Ninguno"):?>
                            <option value="Ninguno">Ninguno</option>
                            <?php endif;?>
                              <option value="<?=$caso->afeccion->sintoma5?>" selected><?=$caso->afeccion->sintoma5?></option>
                              <?php foreach ($sintomas as $sintoma):?>
                              	<?php if($sintoma->nombre != $caso->afeccion->sintoma5):?>
                              	<option value="<?=$sintoma->nombre?>"><?=$sintoma->nombre?></option>
                              	<?php endif;?>
                              <?php endforeach;?>
                            </select>
            				</div>  
  
  
            			
            				<div class="row">
                      		<div class="col-sm-3" style="margin-bottom:2.7rem;"></div>
                            <select name="sintoma6" id="sintoma6" class="col-sm-5">
                            <?php if($caso->afeccion->sintoma6 != "Ninguno"):?>
                            <option value="Ninguno">Ninguno</option>
                            <?php endif;?>
                              <option value="<?=$caso->afeccion->sintoma6?>" selected><?=$caso->afeccion->sintoma6?></option>
                              <?php foreach ($sintomas as $sintoma):?>
                              	<?php if($sintoma->nombre != $caso->afeccion->sintoma6):?>
                              	<option value="<?=$sintoma->nombre?>"><?=$sintoma->nombre?></option>
                              	<?php endif;?>
                              <?php endforeach;?>
                            </select>
            				</div>    
            				
            				<div class="row">
                      		<div class="col-sm-3" style="margin-bottom:2.7rem;"></div>
                            <select name="sintoma7" id="sintoma7" class="col-sm-5">
                            <?php if($caso->afeccion->sintoma7 != "Ninguno"):?>
                            <option value="Ninguno">Ninguno</option>
                            <?php endif;?>
                              <option value="<?=$caso->afeccion->sintoma7?>" selected><?=$caso->afeccion->sintoma7?></option>
                              <?php foreach ($sintomas as $sintoma):?>
                              	<?php if($sintoma->nombre != $caso->afeccion->sintoma7):?>
                              	<option value="<?=$sintoma->nombre?>"><?=$sintoma->nombre?></option>
                              	<?php endif;?>
                              <?php endforeach;?>
                            </select>
            				</div>                				
            				
            				   
            				<div class="row"> 
            				<button type="button" onclick="submit()" class="btn btn-primary col-sm-2" id="botonPC" style="margin-right: 2rem;">Editar</button>
            				</div>  
            				
        			   </form>
                      </div>
                    </div>
                  </div>
                </div>
</div> 

<?php endif;?>
<?php endforeach;?>

 
</div><