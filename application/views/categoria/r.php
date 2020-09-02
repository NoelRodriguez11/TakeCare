<div class="container">

	<h1>Lista de categorías</h1>
	<a href="<?=base_url()?>categoria/c"><button class="button">Nuevo</button></a>
	<a href="<?=base_url()?>"><button class="button">Volver</button></a>
	
	
	<table class="table">
		<tr>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>Acciones</th>
		</tr>
		
			<?php foreach ($categorias as $categoria):?>
			<tr>
				<td><?=$categoria->nombre?></td>
				<td><?= count($categoria->ownProductoList)?></td>
				<td>
					<?php if(count($categoria->ownProductoList)==0):?>
        				<form action="<?=base_url()?>categoria/dPost" method="post">
        					<input type="hidden" name="id" value="<?=$categoria->id?>">
        					<button onclick="submit()">
        						<img src="<?=base_url()?>/assets/img/basura.png" height="20"
        							width="20">
        					</button>
        				</form>
  					<?php endif;?>
        				<form action="<?=base_url()?>categoria/u" method="get">
        					<input type="hidden" name="id" value="<?=$categoria->id?>">
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