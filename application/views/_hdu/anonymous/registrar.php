<div class="container">
<br>


  <h5>¿Como quieres darte de alta?</h5>

    <button class="active btn btn-danger" data-toggle="tab" href="#paciente">Paciente</button>
    <button class="btn btn-danger" data-toggle="tab" href="#profesional">Profesional</button>
<div class="row">
  <div class="tab-content col-sm-5">
    <div id="paciente" class="tab-pane fade in active">
    <h1 class="textoexp1">Nuevo Paciente</h1>

        <form action="<?=base_url()?>hdu/anonymous/registrarPost" method="post" enctype="multipart/form-data">
        
        	<label for="id-log">Loginname</label>
        	<input id="id-log" type="text" name="loginname" required="required"/>
        	<br/>
        	
        	<label for="id-pwd">Contraseña</label>
        	<input id="id-pwd" type="password" name="password" required="required"/>
        	<br/>
        	
        	<label for="id-email">Email</label>
        	<input id="id-email" type="text" name="email" required="required"/>
        	<br/>
        	
        	<label for="id-nombre">Nombre</label>
        	<input id="id-nombre" type="text" name="nombre" required="required"/>
        	<br/>
        	
        	<label for="id-altura">Altura (en cm)</label>
        	<input id="id-altura" type="number" name="altura" required="required" min="0" max="400" value="175" />
        	<br/>
        	
        	<label for="id-fnac">Fecha de Nacimiento</label>
        	<input id="id-fnac" type="date" name="fechaNacimiento" required="required" value="2000-02-29"/>
        	<br/>
        	
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
        
        	<label for="id-log">Loginname</label>
        	<input id="id-log" type="text" name="loginname" required="required"/>
        	<br/>
        	
        	<label for="id-pwd">Contraseña</label>
        	<input id="id-pwd" type="password" name="password" required="required"/>
        	<br/>
        	
        	<label for="id-nombre">Nombre</label>
        	<input id="id-nombre" type="text" name="nombre" required="required"/>
        	<br/>
        	
        	<label for="id-especialidad">Especialidad</label>
        	<select name="especialidad" id="id-especialidad">
        	<option value="opcion1">Opcion 1</option>
        	<option value="opcion2">Opcion 2</option>
        	<option value="opcion3">Opcion 3</option>
        	</select>
        	<br/>
        	
        	<label for="id-altura">Altura (en cm)</label>
        	<input id="id-altura" type="number" name="altura" required="required" min="0" max="400" value="175" />
        	<br/>
        	
        	<label for="id-fnac">Fecha de Nacimiento</label>
        	<input id="id-fnac" type="date" name="fechaNacimiento" required="required" value="2000-02-29"/>
        	<br/>
        	
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

</div>
<div class="imagenRegistro col-sm-7">
<img src="../../assets/img/registro/pac2.jpg" alt="" />
</div>
</div>
</div>