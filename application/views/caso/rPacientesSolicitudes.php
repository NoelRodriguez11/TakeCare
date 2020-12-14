<div class="container">

<h1 class="textoexp1-enunciados">Historial de Solicitudes</h1>

<?php if(count($casos)==0):?>
<p class="tituloCasosIndicador">No tienes ninguna solicitud pendiente</p>
<?php else:?>


<?php foreach ($casos as $caso):?>
<?php if($caso->persona->id == $datosGen["persona"]->id):?>

<?php if($caso->alertaCambioPropuesta == false):?>
<div class="divCasosPendientes">
<?php else:?>
<div class="divCasosPendientesAlerta">
<?php endif;?>

		<div class="row">
                <!--Nombre del paciente -->
            	<div class="col-sm-2 tituloCasosIndicador" >Profesional<div id="nombrePersona">
            	<?=$caso->profesional->nombre?> <?=$caso->profesional->primerApellido?> <?=$caso->profesional->segundoApellido?>
            	</div></div>
            	
            	<!--fecha solicitada -->
            	<?php if($caso->alertaCambioPropuesta == false):?>
            	<div class="col-sm-2 tituloCasosIndicador" >Fecha Solicitada<div class="textoCasosContenidoConFormatoFechaHora"><?=$caso->fechaInicio?></div></div>
            	<?php else:?>
            	<div class="col-sm-2 tituloCasosIndicador" ><i class="fas fa-bell"></i> Nueva fecha propuesta <i class="fas fa-bell"></i><div class="textoCasosContenidoConFormatoFechaHora"><?=$caso->fechaInicio?></div>
            	</div>
                <?php endif;?>
                
                 <!--diagnostico -->
            	 <div class="col-sm-4 tituloCasosIndicador" >Diagnóstico Preliminar
            	<?php if($caso->diagnosticoPreliminar != "(No especificado por el paciente)"):?>
            		<div class="textoCasosContenido" style="word-wrap: break-word;"><?=$caso->diagnosticoPreliminar?></div>
            	<?php else:?>
            		<div class="textoCasosContenido" style="word-wrap: break-word; color:grey"><i><?=$caso->diagnosticoPreliminar?></i></div>	
            	<?php endif;?>
            	</div>
            	
            	<!--estado de la solicitud -->
            	<div class="col-sm-3 tituloCasosIndicador" >Estado de la solicitud
            	<div class="estadoSolicitudPaciente"
            	<?php if($caso->estado == "Rechazada"):?>
            	style="color:rgb(220, 53, 69) !important;"
            	<?php elseif($caso->estado == "Aceptada"):?>
            	style="color:rgb(40, 167, 69) !important;"
            	<?php elseif($caso->estado == "Finalizada"):?>
            	style="color:rgb(45, 45, 92) !important;"
            	<?php endif;?>
            	>
            	<?=$caso->estado?></div></div>
            	
         		<?php if($caso->estado == "Rechazada"):?>
         		<form class="col-sm-1" action="<?=base_url()?>caso/dPost" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Dejar de ver esta solicitud" onclick="submit()" class="botonCasoAceptarRechazar btn btn-danger" id="botonPC"><i class="fa fa-times fa-2x ajusteIcono"></i></button>
        		</form>
         		
         		<?php elseif($caso->estado == "Aceptada"):?>
            	<form class="col-sm-1" action="<?=base_url()?>cita/rPaciente" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Ver la información detallada del tratamiento" onclick="submit()" class="botonCambioPropuesta btn btn-primary" id="botonPC">Ver Seguimiento</button>
        		</form>
        		
        		<?php elseif($caso->estado == "Finalizada"):?>
            	<form class="col-sm-1" action="<?=base_url()?>cita/rPacienteFinalizada" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Ver la información detallada del tratamiento" onclick="submit()" class="botonCambioPropuesta btn btn-primary" id="botonPC">Información Completa</button>
        		</form>
        		
            		<?php if($caso->valorado == true):?>
            		 <button class="botonCambioPropuesta btn btn-warning col-sm-1" data-toggle="modal" data-target="#valorarProfesional<?=$caso->id?>" style="width: 14.7%; right:1.5rem;" id="botonPC">
                      <i class="fas fa-star" ></i> Valorar Profesional</button>
                    <?php endif;?>
                     
                      
                      
        		<?php else:?>
        		
        		<?php if($caso->alertaCambioPropuesta == false):?>
         		<form class="col-sm-1" action="<?=base_url()?>caso/dPost" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Anular la solicitud" onclick="submit()" class="botonCambioPropuesta btn btn-danger" id="botonPC">Anular Solicitud</button>
        		</form>
        		<?php else:?>
        		<form class="col-sm-1" action="<?=base_url()?>persona/rechazarNuevaFecha" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Rechazar la nueva fecha propuesta" onclick="submit()" class="botonCambioPropuesta btn btn-danger" id="botonPC">Rechazar nueva fecha</button>
        		</form> 		
        		 <form class="col-sm-1" action="<?=base_url()?>persona/aceptarNuevaFecha" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<input type="hidden" name="idProfesional" value="<?=$caso->profesional->id?>">
        			<input type="hidden" name="idPaciente" value="<?=$caso->persona->id?>">
        			<input type="hidden" name="fechaHora" value="<?=$caso->fechaInicio?>">
        			<button title="Aceptar nueva fecha" onclick="submit()" class="botonCambioPropuesta btn btn-success" id="botonPC">  Aceptar nueva fecha &nbsp </button>
        		</form>
        		<?php endif;?> 
        		<?php endif;?>   
        		 
    		</div>	
    		
    		   <div class="modal fade" id="valorarProfesional<?=$caso->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title tituloCasosIndicador" id="exampleModalLongTitle" style="font-size: 180% !important">Valoración de profesional</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body row">
 						 <div class="col-sm-2"></div>
 						
						<form action="<?=base_url()?>persona/enviarStar" method="post">
							  <div class="col-sm-5" style="top:0.6rem;">
							  <label > Selecciona una puntuación </label>
                              <select name="rate" class="browser-default custom-select" >                                 
                                  <option value=1 >1</option>
                                  <option value=2 >2</option>
                                  <option value=3 >3</option>
                                  <option value=4 >4</option>
                                  <option value=5 >5</option>
                                </select>
                                </div>
                            
                          	<div class="col-sm-2">
                            <button type="submit" name="nuevaValoracion" class="btn btn-primary" >Enviar</button>
                            </div>
                            <input type="hidden" name="idProfesional" value="<?=$caso->profesional->id?>">
							<input type="hidden" name="idCaso" value="<?=$caso->id?>">
                        </form>
                        

                                                            
                      </div>
                      <div class="modal-footer">
                        	<form class="col-sm-1" action="<?=base_url()?>persona/valorarProfesional" method="post">
        						<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        					</form>

                      </div>
                    </div>
                  </div>
                </div>	      
		</div> 

<?php endif;?>      
<?php endforeach;?>
<?php endif;?>  
 
</div>
</div>



