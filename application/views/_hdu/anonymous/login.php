<div class="container col-6">

	<h1>Introduce tus credenciales</h1>
	
	<form class="form" action="<?=base_url().'hdu/anonymous/loginPost'?>" method="post">
	
	<label for="idnombre">Nombre de usuario</label>
	<input class="form-control" id="idnombre" type="text" name="nombre" autofocus="autofocus"/>
	<br/>
	
	<label for="idpwd">Contraseña</label>
	<input class="form-control" id="idpwd" type="password" name="password"/>
	<br/>
	
	<input type="submit" />
	</form>
</div>