<div class="container">
<br>


  <h5>¿Como quieres darte de alta?</h5>

    <button class="active btn btn-danger" onclick="cambiarImagenRegistro(1)" data-toggle="tab" href="#paciente">Paciente</button>
    <button class="btn btn-danger" onclick="cambiarImagenRegistro(2)" id="btnProfesional" data-toggle="tab" href="#profesional">Profesional</button>
<div class="row">
  <div class="tab-content col-sm-5">
    <div id="paciente" class="tab-pane fade in active">
    <h1 class="textoexp1">Nuevo Paciente</h1>

        <form action="<?=base_url()?>hdu/anonymous/registrarPost" method="post" enctype="multipart/form-data">
        
        	<label for="id-nom">Nombre</label>
        	<input id="id-nom" type="text" name="nombre" required="required"/>
        	<br/>
        	
        	<label for="id-ape1">Primer Apellido</label>
        	<input id="id-ape1" type="text" name="primerApellido" required="required"/>
        	<br/>
        	
        	<label for="id-ape2">Segundo Apellido</label>
        	<input id="id-ape2" type="text" name="segundoApellido" required="required"/>
        	<br/>
        	
        	<label for="id-dni">DNI</label>
        	<input id="id-dni" type="text" name="dni" required="required"/>
        	<br/>
        	
        	<label for="id-fnac">Fecha de Nacimiento</label>
        	<input id="id-fnac" type="date" name="fechaNacimiento" required="required" value="2000-02-29"/>
        	<br/>
        	
        	<label for="id-genero">Genero</label>
          	<select name="genero" id="id-genero">
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
            </select>
            <br>
            
            <label for="id-grupoSanguineo">Grupo Sanguineo</label>
          	<select name="grupoSanguineo" id="id-grupoSanguineo">
            <option value="0+">0+</option>
            <option value="0-">0-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            </select>
            <br>
        	

        	
        	<label for="id-direccion">Direccion</label>
        	<input id="id-direccion" type="text" name="direccion" required="required"/>
        	<br/>
        	
        	<label for="id-ciudad">Ciudad</label>
        	<input id="id-ciudad" type="text" name="ciudad" required="required"/>
        	<br/>
        	
        	<label for="id-provincia">Provincia</label>
        	<input id="id-provincia" type="text" name="provincia" required="required"/>
        	<br/>
        	
        	
        	<label for="id-telefono">Telefono</label>
        	<input id="id-telefono" type="text" name="telefono" required="required"/>
        	<br/>
        	
        	<label for="id-pwd">Contraseña</label>
        	<input id="id-pwd" type="password" name="password" required="required"/>
        	<br/>
        	
        	<label for="id-email">Email</label>
        	<input id="id-email" type="text" name="email" required="required"/>
        	<br/>
        	
        	<input type="hidden" name="tipoUsuario" value=1/>
        	    
        	       	
        	<label for="id-pais">Pais</label>
        	<select id="id-pais" name="pais">
        		<option selected="selected" value=-1>---</option>
        		<?php foreach ($paises as $pais):?>
        		<option value="<?=$pais->id?>"><?=$pais->nombre?></option>
        		<?php endforeach;?>
        	</select>
        	<br/>
        	
        	<!-- JAVASCRIPT PARA VISUALIZAR LA FOTO -->
        	<script>
        	$(window).on("load", (function (){
        		$(function() {
        			$("#id-foto").change(function(e) {addImage(e);});
        
        		function addImage (e){
        			var file = e.target.files[0];
        			var imageType = /image.*/;
        
        			if (!file.type.match(imageType)) return;
        
        			var reader = new FileReader();
        			reader.onload = fileOnLoad;
        			reader.readAsDataURL(file);
        			
        		}
        
        		function fileOnLoad(e) {
        			var result=e.target.result;
        			$('#id-out-foto').attr("src",result);
        		}});}));
        	</script>
        	
        	<label for="id-foto">Foto</label>
        	<input id="id-foto" type="file" name="foto"/><br>
        	<img class="offset-1 col-2" id="id-out-foto" width="10%" height="10%" src="" alt=""/><br><br>
        	
        	<input type="submit" value="Registrar" class="btn btnEstandar"/>
        </form>       
    </div>
    
     

   <div id="profesional" class="tab-pane fade">
    
    <h1 class="textoexp1">Nuevo Profesional</h1>

        <form action="<?=base_url()?>hdu/anonymous/registrarPost" method="post" enctype="multipart/form-data">
        
        	<label for="id-nom">Nombre</label>
        	<input id="id-nom" type="text" name="nombre" required="required"/>
        	<br/>
        	
        	<label for="id-ape1">Primer Apellido</label>
        	<input id="id-ape1" type="text" name="primerApellido" required="required"/>
        	<br/>
        	
        	<label for="id-ape2">Segundo Apellido</label>
        	<input id="id-ape2" type="text" name="segundoApellido" required="required"/>
        	<br/>
        	
        	<label for="id-dni">DNI</label>
        	<input id="id-dni" type="text" name="dni" required="required"/>
        	<br/>
        	
        	<label for="id-fnac">Fecha de Nacimiento</label>
        	<input id="id-fnac" type="date" name="fechaNacimiento" required="required" value="2000-02-29"/>
        	<br/>
        	
        	<label for="id-genero">Genero</label>
          	<select name="genero" id="id-genero">
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
            </select>
            <br>
            

        	
        	<label for="id-direccion">Direccion</label>
        	<input id="id-direccion" type="text" name="direccion" required="required"/>
        	<br/>
        	
        	<label for="id-ciudad">Ciudad</label>
        	<input id="id-ciudad" type="text" name="ciudad" required="required"/>
        	<br/>
        	
        	<label for="id-provincia">Provincia</label>
        	<input id="id-provincia" type="text" name="provincia" required="required"/>
        	<br/>
        	
        	
        	<label for="id-telefono">Telefono</label>
        	<input id="id-telefono" type="text" name="telefono" required="required"/>
        	<br/>
        	
        	<label for="id-pwd">Contraseña</label>
        	<input id="id-pwd" type="password" name="password" required="required"/>
        	<br/>
        	
        	<label for="id-email">Email</label>
        	<input id="id-email" type="text" name="email" required="required"/>
        	<br/>
        	
        	<label for="id-especialidad">Especialidad</label>
        	<select name="especialidad" id="id-especialidad">
        		<option selected="selected" value=-1>---</option>
        		<?php foreach ($especialidades as $especialidad):?>
        		<option value="<?=$especialidad->id?>"><?=$especialidad->nombre?></option>
        		<?php endforeach;?>
        	</select>
        	<br/>
        		
        	<label for="id-fnac">Fecha de Nacimiento</label>
        	<input id="id-fnac" type="date" name="fechaNacimiento" required="required" value="2000-02-29"/>
        	<br/>
        	
        	<label for="id-pais">Pais</label>
        	
        	
        	<input type="hidden" name="tipoUsuario" value=2/>
        	
        	<select id="id-pais" name="pais">
        		<option selected="selected" value=-1>---</option>
        		<?php foreach ($paises as $pais):?>
        		<option value="<?=$pais->id?>"><?=$pais->nombre?></option>
        		<?php endforeach;?>
        	</select>
        	<br/>

        	
        	<!-- JAVASCRIPT PARA VISUALIZAR LA FOTO -->
        	<script>
        	$(window).on("load", (function (){
        		$(function() {
        			$("#id-foto").change(function(e) {addImage(e);});
        
        		function addImage (e){
        			var file = e.target.files[0];
        			var imageType = /image.*/;
        
        			if (!file.type.match(imageType)) return;
        
        			var reader = new FileReader();
        			reader.onload = fileOnLoad;
        			reader.readAsDataURL(file);
        			
        		}
        
        		function fileOnLoad(e) {
        			var result=e.target.result;
        			$('#id-out-foto').attr("src",result);
        		}});}));
        	</script>
        	
        	<label for="id-foto">Foto</label>
        	<input id="id-foto" type="file" name="foto"/><br>
        	<img class="offset-1 col-2" id="id-out-foto" width="10%" height="10%" src="" alt=""/><br><br>
        	
        	<input type="submit" value="Registrar" class="btn btnEstandar"/>
        </form>

    </div>

</div>
<div class="imagenRegistro col-sm-7">
<img id="idimagenregistro" src="../../assets/img/registro/pac2.jpg" alt="" />
</div>
</div>
</div>