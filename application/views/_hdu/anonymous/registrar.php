<div class="container">

<h1>Nueva persona</h1>

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
		<option value="<?=$pais->id?>"><?= $pais->nombre?></option>
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
	
	<input type="submit" value="Registrar"/>
</form>

</div>