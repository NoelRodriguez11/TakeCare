<div class="container">
	<h1>Nuevo síntoma</h1>
	<a href="<?=base_url()?>sintoma/r">
		<button>Cancelar</button>
	</a>

<form action="<?=base_url()?>sintoma/cPost" class="form" method="post" enctype="multipart/form-data">
	
	Nombre
	<input type="text" name="nombre" required id="nombreId" />
	<br>
	<input type="submit" value="Registrar"/>
	</form>
</div>