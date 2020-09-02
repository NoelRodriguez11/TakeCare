<div class="container">

<h1>Lista de aficiones</h1>

<a href="<?=base_url()?>aficion/c"><button>Nuevo</button></a>
<a href="<?=base_url()?>"><button>Volver</button></a>

<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Acción</th>
	</tr>
	
	<?php foreach ($aficiones as $aficion): ?>
		<tr>
			<td><?= $aficion->nombre?></td>
			<td>
				<form action="<?=base_url()?>aficion/dPost" method="post">
					<input type="hidden" name="id" value="<?=$aficion->id?>">
					<button onclick="submit()">
						<img src="<?=base_url()?>/assets/img/basura.png" height="20" width="20">
					</button>
				</form>
				<form action="<?=base_url()?>aficion/u" method="get">
					<input type="hidden" name="id" value="<?=$aficion->id?>">
					<button onclick="submit()">
						<img src="<?=base_url()?>/assets/img/lapiz.png" height="20" width="20">
					</button>
				</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>

</div>

