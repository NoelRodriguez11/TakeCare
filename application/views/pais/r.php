
<div class="container">



	<h1>Lista de países</h1>

	<a href="<?=base_url()?>pais/c"><button class="button">Nuevo</button></a>
	<a href="<?=base_url()?>"><button class="button">Volver</button></a>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nombre</th>
			<th>Numero de Habitantes</th>
			<th>Acciones</th>
		</tr>
	
	<?php foreach ($paises as $pais): ?>
		<tr>
			<td><?= $pais->nombre?></td>
			
			<td><?= sizeof($pais->alias('nace')->ownPersonaList)?></td>
			
			<td>
			<?php if(sizeof($pais->alias('nace')->ownPersonaList)==0):?>
				<form action="<?=base_url()?>pais/dPost" method="post">
					<input type="hidden" name="id" value="<?=$pais->id?>">
					<button onclick="submit()">
						<img src="<?=base_url()?>/assets/img/basura.png" height="20"
							width="20">
					</button>
				</form>
			<?php endif;?>
	
				<form action="<?=base_url()?>pais/u" method="get">
					<input type="hidden" name="id" value="<?=$pais->id?>">
					<button onclick="submit()">
						<img src="<?=base_url()?>/assets/img/lapiz.png" height="20"
							width="20">
					</button>
				</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>

</div>


