<div class="container">
<h1 class="textoexp1-enunciados">Casos pendientes</h1>

<?php foreach ($casos as $caso):?>
<div class="divCasosPendientes">
		<div class="row">
                <!--Nombre del paciente -->
            	<div class="col-sm-2 tituloCasosIndicador" >Paciente:<div id="nombrePersona">
            	<?=$caso->persona->nombre?> <?=$caso->persona->primerApellido?> <?=$caso->persona->segundoApellido?>
            	</div></div>
            	
            	<!--fecha solicitada -->
            	<div class="col-sm-2 tituloCasosIndicador" >Fecha Solicitada:<div class="textoCasosContenido"><?=$caso->fechaInicio?></div></div>
                
                 <!--diagnostico -->
            	<div class="col-sm-5 tituloCasosIndicador" >Diagnostico Preliminar:<div class="textoCasosContenido"><?=$caso->diagnosticoGeneral?></div></div>
            	

            	<form class="col-sm-1" action="<?=base_url()?>profesional/cambiarPropuesta" method="get">
        			<input type="hidden" name="idProfesional" value="<?=$caso->id?>">
        			<button title="Rechazar Caso" onclick="submit()" class="botonCambioPropuesta btn btn-primary textoexp2-sinMargen" id="botonPC">Cambiar propuesta</button>
        		</form>           	
            	
            	<form class="col-sm-1" action="<?=base_url()?>profesional/rechazarCaso" method="get">
        			<input type="hidden" name="idProfesional" value="<?=$caso->id?>">
        			<button title="Rechazar Caso" onclick="submit()" class="botonCasoAceptarRechazar btn btn-danger" id="botonPC"><i class="fa fa-times fa-2x ajusteIcono"></i> </button>
        		</form>
        		
                <form class="col-sm-1" action="<?=base_url()?>profesional/aceptarCaso" method="get">
        			<input type="hidden" name="idProfesional" value="<?=$caso->id?>">
        			<button title="Aceptar Caso" onclick="submit()" class="botonCasoAceptarRechazar btn btn-success" id="botonPC"><i class="fa fa-check fa-2x ajusteIcono"></i> </button>
        		</form>
    		</div>	   
		</div>       
<?php endforeach;?>
</div>


