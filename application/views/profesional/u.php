<div class="container">

<h1>Editar persona</h1>

<form action="<?=base_url()?>persona/uPost" method="post" enctype="multipart/form-data">

	<label for="id-log">Loginname</label>
	<input id="id-log" type="text" name="loginname" required="required" value="<?=$persona->loginname?>"/>
	<br/>
	
	<label for="id-nombre">Nombre</label>
	<input id="id-nombre" type="text" name="nombre" required="required" value="<?=$persona->nombre?>"/>
	<br/>
	
	<label for="id-altura">Altura (en cm)</label>
	<input id="id-altura" type="number" name="altura" required="required" min="0" max="400" value="<?=$persona->altura?>" />
	<br/>
	
	<label for="id-fnac">Fecha de Nacimiento</label>
	<input id="id-fnac" type="date" name="fechaNacimiento" required="required" value="2000-02-29" value="<?=$persona->fechaNacimiento?>"/>
	<br/>
	
	<label for="id-pais">Pais</label>
	
	<select id="id-pais" name="pais">
		<option selected="selected" value="<?=$persona->nace->id?>"><?=$persona->nace->nombre?></option>
		<?php foreach ($paises as $pais):?>
    		<?php if ($pais->nombre != $persona->nace->nombre) :?>
    		<option value="<?=$pais->id?>"><?= $pais->nombre?></option>
    		<?php endif;?>
		<?php endforeach;?>
	</select>
	<br/>
	
	<input type="hidden" name="id" value="<?=$persona->id?>"/>
	<input type="submit" value="Modificar"/>
</form>

</div>