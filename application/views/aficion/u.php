<div class="container">

<h1>Edición de afición</h1>

<form action="<?=base_url()?>aficion/uPost" method="post">
	<label for="idp">Nombre</label>
	<input id="idp" type="text" name="nombre" value="<?=$nombre?>"/>
	<input type="hidden" value="<?=$id?>" name="id">
	<input type="submit"/>
</form>

</div>