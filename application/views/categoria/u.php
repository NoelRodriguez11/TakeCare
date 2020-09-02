<div class="container">
<h1>Editar Categoría</h1>

<form action="<?=base_url()?>categoria/uPost" method="post">
	<input type="hidden" name="id" value="<?=$categoria->id?>"/>
	<label for="idp">Nombre</label>
	<input id="idp" type="text" name="nombre" value="<?=$categoria->nombre?>"/>
	<input type="submit"/>
</form>
 </div>