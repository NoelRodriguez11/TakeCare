<div class="container">
<h1 class="textoexp1-enunciados">Mis casos</h1>

<?php if(count($casos)==0):?>
<p class="tituloCasosIndicador">No tienes casos pendientes por revisar</p>
<?php else:?>
  
<?php foreach ($casos as $caso):?>
<?php if($caso->profesional->id == $datosGen["profesional"]->id):?>
<div class="divCasosAceptados">
		<div class="row">
                <!--Nombre del paciente -->
                <div class="row">
                <div class="col-sm-1"></div>
            	<div class="col-sm-4 tituloCasosIndicador" >Paciente:<div id="nombrePersona">
            	<?=$caso->persona->nombre?> <?=$caso->persona->primerApellido?> <?=$caso->persona->segundoApellido?>
            	</div></div>
            	
            	<!--fecha solicitada -->
            	<div class="col-sm-3 tituloCasosIndicador" >Fecha Solicitada:<div class="textoCasosContenido"><?=$caso->fechaInicio?></div></div>
                
                 <!--diagnostico -->
            	<div class="col-sm-4 tituloCasosIndicador" >Diagnostico Preliminar:<div class="textoCasosContenido" style="word-wrap: break-word;"><?=$caso->diagnosticoGeneral?></div></div>
            	</div>
            	
            	
				<div class="row">
            	<form class="col-sm-3" action="<?=base_url()?>profesional/cambiarPro" method="get">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Rechazar Caso" onclick="submit()" class="botonCambioPropuesta btn btn-primary textoexp2-sinMargen" id="botonPC">Editar diagnostico</button>
        		</form>    
        		
        		<form class="col-sm-3" action="<?=base_url()?>profesional/cambiarPropuesta" method="get">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Rechazar Caso" onclick="submit()" class="botonCambioPropuesta btn btn-info textoexp2-sinMargen" id="botonPC">Nueva Cita</button>
        		</form>
        		    
            	<form class="col-sm-3" action="<?=base_url()?>profesional/cambiarPropuesta" method="get">
        			<input type="hidden" name="idCaso" value="<?=$caso->id?>">
        			<button title="Rechazar Caso" onclick="submit()" class="botonCambioPropuesta btn btn-success textoexp2-sinMargen" id="botonPC">Dar de alta</button>
        		</form> 
        		</div>          	
            	
            	
    		</div>	   
		</div>

<?php endif;?>      
<?php endforeach;?>
<?php endif;?>    

</div>


