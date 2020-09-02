<div class="container">
	<form action="<?=base_url()?>hdu/anonymous/initPost" method="post">
    <?php if (!$vacia):?>
     	<h1>¡¡ Peligro !!. BD no vacía</h1>
		<h3>Introduce "admin" para borrar la BD</h3>
		<input type="password" name="pwd" />
		<input type="submit" value="Borrar" />
	<?php else:?>
	<h3>La base de datos ha sido borrada manualmente</h3><br>
	<input type="submit" value="Inicializar" />
    <?php endif; ?>

	</form>
</div>