<div class="container">

<h1>Editar persona</h1>

<form action="<?=base_url()?>persona/uPost" method="post">
	<input type="hidden" name="id" value="<?=$persona->id?>"?>

	<label for="idp">Nombre</label>
	<input id="idp" type="text" name="nombre" value="<?= $persona->nombre?>"/>
	<br/>
	
	País nacimiento
	<select name="idPaisNace">
		<?php foreach ($paises as $pais):?>
		<option value="<?=$pais->id?>" <?= $pais->id==$persona->nace_id ? 'selected="selected"' : ''?>><?=$pais->nombre?></option>
		<?php endforeach;?>
	</select>

	<br/>
	País residencia
	<select name="idPaisReside">
		<?php foreach ($paises as $pais):?>
		<option value="<?=$pais->id?>" <?= $pais->id==$persona->reside_id ? 'selected="selected"' : ''?>><?=$pais->nombre?></option>
		<?php endforeach;?>
	</select>

	<br/>
	Aficiones que le gustan
	<?php $gustaIds = []; 
	foreach ($persona->ownGustaList as $gusta) { $gustaIds[] = $gusta->aficion_id;}
	?>

	<?php foreach ($aficiones as $aficion):?>
		<input id="id-afg-<?=$aficion->id?>" type="checkbox" name="idsAficionGusta[]" value="<?=$aficion->id?>"
		<?= in_array($aficion->id,$gustaIds)?'checked="checked"':''?>
		/>
		<label for="id-afg-<?=$aficion->id?>"><?=$aficion->nombre?></label>
	<?php endforeach;?>	
	
	<br/>
	Aficiones que odia
	<?php $odiaIds = []; 
	foreach ($persona->ownOdiaList as $odia) { $odiaIds[] = $odia->aficion_id;}
	?>
	<?php foreach ($aficiones as $aficion):?>
		<input id="id-afo-<?=$aficion->id?>" type="checkbox" name="idsAficionOdia[]" value="<?=$aficion->id?>"
		<?= in_array($aficion->id,$odiaIds)?'checked="checked"':''?>
		/>
		<label for="id-afo-<?=$aficion->id?>"><?=$aficion->nombre?></label>
	<?php endforeach;?>	


	<br/>
	<input type="submit"/>
</form>

<a href="<?=base_url()?>"><button>Cancelar</button></a>

</div>