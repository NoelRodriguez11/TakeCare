<div class="container">
<h1 class="textoexp1-enunciados">Mis Casos</h1>

<?php if(count($casos)==0):?>
<p class="tituloCasosIndicador">No tienes ningún caso actualmente en curso</p>
<?php else:?>
<?php foreach ($casos as $caso):?>
<?php if($caso->profesional->id == $datosGen["profesional"]->id):?>
<div class="divTratamientoPacientes">
		<div class="row">
                <!--Nombre del profesional -->
            	<div class="col-sm-2 tituloCasosIndicador" >Paciente:<div id="nombrePersona">
            	<?=$caso->persona->nombre?> <?=$caso->persona->primerApellido?> <?=$caso->persona->segundoApellido?>
            	</div></div>
            	
            	<div class="col-sm-2 tituloCasosIndicador" ></div>
            	
            	<!--fecha solicitada -->
            	<div class="col-sm-3 tituloCasosIndicadorPaciente" style="overflow: hidden;" ><p style="float: left;">Próxima cita:</p><p style="float: right;" class="textoCasosContenidoConFormatoFechaHora"><?=$caso->fechaInicio?></p></div>
                
                <div class="col-sm-1"></div>
     			
            	<form class="col-sm-2" action="<?=base_url()?>cita/rProfesional" method="post">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Ver la información detallada del tratamiento" onclick="submit()" class="botonCambioPropuesta btn btn-primary" id="botonPC">Ver Información Completa</button>
        		</form>
        		
        		<button class="botonCambioPropuesta btn btn-success col-sm-2" data-toggle="modal" data-target="#exampleModalCenter<?=$caso->id?>" style="width: 15%;">
                  Dar de Alta
                </button>
        		
        		
<!--         		MODAL PARA CONFIRMAR EL FIN DEL TRATAMIENTO -->
        		<div class="modal fade" id="exampleModalCenter<?=$caso->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title tituloCasosIndicador" id="exampleModalLongTitle" style="font-size: 180% !important; color:rgb(40, 167, 69) !important;">Alta médica</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body textoCasosContenidoPaciente">
                        ¿Estas seguro de que quieres dar el caso como finalizado? <br>
                        
                      </div>
                      <div class="modal-footer">
                        
                       <form action="<?=base_url()?>profesional/finalizarTratamiento" method="post">
            				<input type="hidden" name="idCaso" value="<?=$caso->id?>">
            				<button type="button" onclick="submit()" class="btn btn-success" id="botonPC">Finalizar</button>
            				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            				
        			   </form>
                      </div>
                    </div>
                  </div>
                </div>
 
    		</div>	   
		</div> 

<?php endif;?>
<?php endforeach;?>

<?php endif;?>  
 
</div>


