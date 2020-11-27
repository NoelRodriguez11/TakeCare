<div class="container">
<br>


  <h5>¿Como quieres darte de alta?</h5>

    <button class="active btn btn-danger" onclick="cambiarImagenRegistro(1)" data-toggle="tab" href="#paciente">Paciente</button>
    <button class="btn btn-danger" onclick="cambiarImagenRegistro(2)" id="btnProfesional" data-toggle="tab" href="#profesional">Profesional</button>
<div class="row">
  <div class="tab-content col-sm-5">
    <div id="paciente" class="tab-pane fade in active ">
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
          	<select id="id-genero" name="genero">
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
            <select id="id-provincia">
                <option value='alava'>Álava</option>
                <option value='albacete'>Albacete</option>
                <option value='alicante'>Alicante/Alacant</option>
                <option value='almeria'>Almería</option>
                <option value='asturias'>Asturias</option>
                <option value='avila'>Ávila</option>
                <option value='badajoz'>Badajoz</option>
                <option value='barcelona'>Barcelona</option>
                <option value='burgos'>Burgos</option>
                <option value='caceres'>Cáceres</option>
                <option value='cadiz'>Cádiz</option>
                <option value='cantabria'>Cantabria</option>
                <option value='castellon'>Castellón/Castelló</option>
                <option value='ceuta'>Ceuta</option>
                <option value='ciudadreal'>Ciudad Real</option>
                <option value='cordoba'>Córdoba</option>
                <option value='cuenca'>Cuenca</option>
                <option value='girona'>Girona</option>
                <option value='laspalmas'>Las Palmas</option>
                <option value='granada'>Granada</option>
                <option value='guadalajara'>Guadalajara</option>
                <option value='guipuzcoa'>Guipúzcoa</option>
                <option value='huelva'>Huelva</option>
                <option value='huesca'>Huesca</option>
                <option value='illesbalears'>Illes Balears</option>
                <option value='jaen'>Jaén</option>
                <option value='acoruña'>A Coruña</option>
                <option value='larioja'>La Rioja</option>
                <option value='leon'>León</option>
                <option value='lleida'>Lleida</option>
                <option value='lugo'>Lugo</option>
                <option value='madrid'>Madrid</option>
                <option value='malaga'>Málaga</option>
                <option value='melilla'>Melilla</option>
                <option value='murcia'>Murcia</option>
                <option value='navarra'>Navarra</option>
                <option value='ourense'>Ourense</option>
                <option value='palencia'>Palencia</option>
                <option value='pontevedra'>Pontevedra</option>
                <option value='salamanca'>Salamanca</option>
                <option value='segovia'>Segovia</option>
                <option value='sevilla'>Sevilla</option>
                <option value='soria'>Soria</option>
                <option value='tarragona'>Tarragona</option>
                <option value='santacruztenerife'>Santa Cruz de Tenerife</option>
                <option value='teruel'>Teruel</option>
                <option value='toledo'>Toledo</option>
                <option value='valencia'>Valencia/Valéncia</option>
                <option value='valladolid'>Valladolid</option>
                <option value='vizcaya'>Vizcaya</option>
                <option value='zamora'>Zamora</option>
                <option value='zaragoza'>Zaragoza</option>
            </select>
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
        	    
        	       	
        	<label for="id-pais">Pais Origen</label>
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
        	<img class="" id="id-out-foto" width="20%" height="20%" src="../../assets/img/noimage.png" alt=""/><br><br>
        	
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
            <select id="id-provincia">
                <option value='alava'>Álava</option>
                <option value='albacete'>Albacete</option>
                <option value='alicante'>Alicante/Alacant</option>
                <option value='almeria'>Almería</option>
                <option value='asturias'>Asturias</option>
                <option value='avila'>Ávila</option>
                <option value='badajoz'>Badajoz</option>
                <option value='barcelona'>Barcelona</option>
                <option value='burgos'>Burgos</option>
                <option value='caceres'>Cáceres</option>
                <option value='cadiz'>Cádiz</option>
                <option value='cantabria'>Cantabria</option>
                <option value='castellon'>Castellón/Castelló</option>
                <option value='ceuta'>Ceuta</option>
                <option value='ciudadreal'>Ciudad Real</option>
                <option value='cordoba'>Córdoba</option>
                <option value='cuenca'>Cuenca</option>
                <option value='girona'>Girona</option>
                <option value='laspalmas'>Las Palmas</option>
                <option value='granada'>Granada</option>
                <option value='guadalajara'>Guadalajara</option>
                <option value='guipuzcoa'>Guipúzcoa</option>
                <option value='huelva'>Huelva</option>
                <option value='huesca'>Huesca</option>
                <option value='illesbalears'>Illes Balears</option>
                <option value='jaen'>Jaén</option>
                <option value='acoruña'>A Coruña</option>
                <option value='larioja'>La Rioja</option>
                <option value='leon'>León</option>
                <option value='lleida'>Lleida</option>
                <option value='lugo'>Lugo</option>
                <option value='madrid'>Madrid</option>
                <option value='malaga'>Málaga</option>
                <option value='melilla'>Melilla</option>
                <option value='murcia'>Murcia</option>
                <option value='navarra'>Navarra</option>
                <option value='ourense'>Ourense</option>
                <option value='palencia'>Palencia</option>
                <option value='pontevedra'>Pontevedra</option>
                <option value='salamanca'>Salamanca</option>
                <option value='segovia'>Segovia</option>
                <option value='sevilla'>Sevilla</option>
                <option value='soria'>Soria</option>
                <option value='tarragona'>Tarragona</option>
                <option value='santacruztenerife'>Santa Cruz de Tenerife</option>
                <option value='teruel'>Teruel</option>
                <option value='toledo'>Toledo</option>
                <option value='valencia'>Valencia/Valéncia</option>
                <option value='valladolid'>Valladolid</option>
                <option value='vizcaya'>Vizcaya</option>
                <option value='zamora'>Zamora</option>
                <option value='zaragoza'>Zaragoza</option>
            </select>
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
        	
        	<label for="id-clinica">Clínica <i style="color:#a4a6a5; font-size: 1.2rem;">(Dejar en blanco si eres autónomo)</i></label>
        	<input id="id-clinica" type="text" name="clinica"/>
        	<br/>
        	
        	<label for="id-pais">Pais Origen</label>	
        	<select id="id-pais" name="pais">
        		<option selected="selected" value=-1>---</option>
        		<?php foreach ($paises as $pais):?>
        		<option value="<?=$pais->id?>"><?=$pais->nombre?></option>
        		<?php endforeach;?>
        	</select>
        	<br/>
        	
        	<input type="hidden" name="tipoUsuario" value=2/>

        	
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
        	<img class="" id="id-out-foto" width="20%" height="20%" src="../../assets/img/noimage.png" alt=""/><br><br>
        	
        	<input type="submit" value="Registrar" class="btn btnEstandar"/>
        </form>

    </div>

</div>
<div class="imagenRegistro col-sm-7">
<img id="idimagenregistro" src="../../assets/img/registro/pac2.jpg" alt="" />
</div>
</div>
</div>