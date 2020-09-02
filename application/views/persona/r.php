<div class="container">

<h1>Listado de Usuarios</h1>

<a href="<?=base_url()?>hdu/anonymous/registrar"><button>Nuevo</button></a>
<a href="<?=base_url()?>"><button>Volver</button></a>
<table class="table table-striped table-hover ">
		<tr>
			<th>Foto</th>
			<th>Loginname</th>
			<th>Pais de Nacimiento</th>
			<th>Fecha de Nacimiento</th>
			<th>Altura</th>
			<th>Acción</th>
		</tr>

	
	<?php foreach ($personas as $persona): ?>
		<tr>
		<?php if ($persona -> loginname == "admin"):?>
			<td><img src="<?=base_url()?>/assets/img/admin.jpg" height="80"
						width="80"></td>
		<td style="color:red;"><?= $persona->loginname?></td>
		<td style="color:red;"><?= $persona->nace!=null?$persona->nace->nombre:'---'?></td>
		<td style="color:red;">---</td>
		<td style="color:red;">---</td>
		<td style="color:red;">---</td>
		<?php else:?>
		
    		<?php if ($persona->extension_Foto != null):?>
    		<td><img src="<?=base_url()?>/assets/img/upload/persona/persona-<?=$persona->id?>.<?=$persona->extension_Foto?>" height="80"
    						width="80"></td>
    		<?php else:?>
    		<td><img src="<?=base_url()?>/assets/img/nopersona.png" height="80"
    						width="80"></td>
    		<?php endif;?>
    	
		<td><?= $persona->loginname?></td>
		<td><?= $persona->nace!=null?$persona->nace->nombre:''?></td>
		<td><?= $persona->fechaNacimiento?></td>
		<td><?= $persona->altura?></td>
		<td>
			<form action="<?=base_url()?>persona/dPost" method="post">
				<input type="hidden" name="id" value="<?=$persona->id?>">
				<button onclick="submit()">
					<img src="<?=base_url()?>/assets/img/basura.png" height="20"
						width="20"/>
				</button>
			</form>
			<form action="<?=base_url()?>persona/u" method="get">
				<input type="hidden" name="id" value="<?=$persona->id?>">
				<button onclick="submit()">
					<img src="<?=base_url()?>/assets/img/lapiz.png" height="20"
						width="20">
				</button>
			</form>
		</td>
		<?php endif;?>

	</tr>
	<?php endforeach;?>
</table>

</div>

