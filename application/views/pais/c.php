<div class="container">
<h1>Nuevo país</h1>

<form action="<?=base_url()?>pais/cPost" method="post">

	<label for="idp">Nombre</label>
	<input id="idp" type="text" name="nombre"/>
	
	<input type="hidden" name="nHabitantes" value="0"/>
	<input type="submit"/>
	
</form>
 </div>