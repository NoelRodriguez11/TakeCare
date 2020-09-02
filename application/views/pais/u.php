<div class="container">
<h1>Editar País</h1>

<form action="<?=base_url()?>pais/uPost" method="post">
	<input type="hidden" name="id" value="<?=$pais->id?>"/>
	<label for="idp">Nombre</label>
	<input id="idp" type="text" name="nombre" value="<?=$pais->nombre?>"/>
	<input type="submit"/>
</form>
 </div>