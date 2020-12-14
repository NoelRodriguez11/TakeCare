<div class="container">

<h1 class="textoexp1-enunciados">Listado Completo de Profesionales</h1>
<h5 class="textoexp2-sinMargen">En esta seccion podrás consultar el listado completo de profesionales dados de alta en la pagina</h5>
<?php if ($datosGen['persona']==null && $datosGen['profesional']==null):?>
<p class="noregistrado">Registrate para poder contactar con un profesional</p><br>
<?php endif;?>
<script type="text/javascript">
	var base_url = "<?php echo base_url()?>";
</script>

<!-- Estos div de profesionales tiene que ser obtenido de la bbdd segun los prodesionales que haya en la bbdd -->
<?php foreach ($profesionales as $profesional):?>

<div class="divAnuncioProfesionales">

		<!--Foto del profesional -->
		<div class="row">
		<?php if($profesional->extension_Foto != null):?>
		<img class="divFotoPerfil col-sm-2" style="margin:0;" src="<?=base_url()?>/assets/img/upload/profesional/pro<?=$profesional->id?>.<?= $profesional->extension_Foto?>"/>
		<?php else:?>
		<img class="divFotoPerfil col-sm-2" style="margin:0;" src="<?=base_url()?>/assets/img/upload/profesional/noImage.jpg"/>
		<?php endif;?>
		
		
		<div class="col-sm-4 especialidadIndicador divEstrellitas" >
			Valoración
			<div class="row">
			<?php if($profesional->valoracion == 0):?>
			<div class="estrellas">
			<i class="far fa-star"></i>&nbsp<i class="far fa-star">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp</div>
			&nbsp¡Sé el primero!
			
			<?php elseif($profesional->valoracion >= 0.5 && $profesional->valoracion < 1):?>
			<div class="estrellas">
			<i class="fas fa-star-half-alt"></i>&nbsp</i><i class="far fa-star">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>
			
			<?php elseif($profesional->valoracion >= 1 && $profesional->valoracion < 1.5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="far fa-star">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>
			
			<?php elseif($profesional->valoracion >= 1.5 && $profesional->valoracion < 2):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star-half-alt">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>
			
			<?php elseif($profesional->valoracion >= 2 && $profesional->valoracion < 2.5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>		
			
			<?php elseif($profesional->valoracion >= 2.5 && $profesional->valoracion < 3):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star-half-alt"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>				
			
			<?php elseif($profesional->valoracion >= 3 && $profesional->valoracion < 3.5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>
						
			<?php elseif($profesional->valoracion >= 3.5 && $profesional->valoracion < 4):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="fas fa-star-half-alt"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>	
			
			<?php elseif($profesional->valoracion >= 4 && $profesional->valoracion < 4.5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="fas fa-star"></i>&nbsp<i class="far fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>			
			
			<?php elseif($profesional->valoracion >= 4.5 && $profesional->valoracion < 5):?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="fas fa-star"></i>&nbsp<i class="fas fa-star-half-alt"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>			
			
			<?php elseif($profesional->valoracion == 5) :?>
			<div class="estrellas">
			<i class="fas fa-star"></i>&nbsp</i><i class="fas fa-star">&nbsp</i><i class="fas fa-star"></i>&nbsp<i class="fas fa-star"></i>&nbsp<i class="fas fa-star"></i>
			&nbsp (<?=$profesional->numeroValoraciones ?>)</div>						
			<?php endif;?>
			</div>
        </div>
        
         <!--Horario -->
    	<div class="col-sm-2 especialidadIndicador horario" style="margin-left:0; right:.5rem;" >Horario<div id="especialidadEstiloHorario"><?=$profesional->turno?><br><?=$profesional->franja?></div></div>
      
		
       	<form action="<?=base_url()?>caso/c" method="get">
			<input type="hidden" name="idProfesional" value="<?=$profesional->id?>">
	
			<button onclick="submit()" class="botonPedirCita btn btn-primary col-sm-3" id="botonPC" <?php if ($datosGen['persona']==null):?>disabled<?php endif;?>>Enviar Solicitud</button>

		</form>
       

		</div>
            
		<div class="row">
        <!--Nombre del profesional -->
    	<div class="col-sm-6" id="nombreProfesionales">
    	
    	<?=$profesional->nombre?> <?=$profesional->primerApellido?> <?=$profesional->segundoApellido?>
    	</div>
        
         <!--Especialidad -->
    	<div class="col-sm-2 especialidadIndicador" >Especialidad<div id="especialidadEstilo"><?=$profesional->especialidad->nombre?></div></div>
    	
    	  <!--Especialidad -->
    	<div class="col-sm-2 provinciaIndicador" >Ubicación<div id="provinciaEstilo"><?=$profesional->ciudad?>, <?=$profesional->provincia?></div></div>
    	
    	<div class="col-sm-2 provinciaIndicador" >Telefono<div id="provinciaEstilo"><?=$profesional->telefono?></div></div>
    	
    	
    	</div>
</div>
<?php endforeach;?>
</div>

<script type="text/javascript">
	function mostrar(respuestaAJAX) {

            nombreActual = document.getElementById("nombreActualId").value;
            nombre = document.getElementById("idp").value;

            json = JSON.parse(respuestaAJAX);
            if (json["coincide"] == 1 && nombreActual != nombre ) { 
                mensaje ="<b>Advertencia</b>, este producto ya esta registrado.";
                document.getElementById("warning").style="display:inline; margin-left:10px;";
                document.getElementById("idp").classList.add("bg-warning");
                document.getElementById("warning").innerHTML=mensaje;
            }
            else if (json["coincide"] == 1 &&  nombreActual != nombre ){
                document.getElementById("warning").innerHTML='';
                document.getElementById("idp").classList.remove('bg-warning');
            }
            else {
                document.getElementById("warning").innerHTML='';
                document.getElementById("idp").classList.remove('bg-warning');
            }
        }

	function elegirEspecialidad() {
            url = <?= base_url()?>"/buscador/cAJAX";

            x = new XMLHttpRequest();
            x.open("POST", url, true);
            x.setRequestHeader('Content-type','application/x-www-form-urlencoded');

            x.send("idEspecialidad="+document.getElementById('idEspecialidad').value);

            x.onreadystatechange=function() {
                if (x.readyState==4 && x.status==200) {
                    mostrar(x.responseText);
                } 

            //--disable-web-security --disable-gpu --user-data-dir=C:\tmp
            }
        }
</script>

