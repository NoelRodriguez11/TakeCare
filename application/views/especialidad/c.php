<div class="container">
	<h1>Nueva especialidad</h1>
	<a href="<?=base_url()?>especialidad/r">
		<button>Cancelar</button>
	</a>

<form action="<?=base_url()?>especialidad/cPost" class="form" method="post" enctype="multipart/form-data">
	
	Nombre
	<input type="text" name="nombre" required id="nombreId" />
	<br>
	<input type="submit" value="Registrar"/>
	</form>
</div>