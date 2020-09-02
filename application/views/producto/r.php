<div class="container">
	<h1>Lista de productos</h1>
	<a href="<?=base_url()?>producto/c"><button class="button">Nuevo</button></a>
	<a href="<?=base_url()?>"><button class="button">Volver</button></a>


	<table class="table table-striped">
		<tr>
			<th>Foto</th>
			<th>Nombre</th>
			<th>Categoria</th>
			<th>Acción</th>
		</tr>
			<?php foreach ($productos as $producto):?>
			<tr>
    			<?php if ($producto->extension_Foto != null):?>
        		<td><img src="<?=base_url()?>/assets/img/upload/producto/producto-<?=$producto->id?>.<?=$producto->extension_Foto?>" height="80" width="80"></td>
        		<?php else:?>
        		<td><img src="<?=base_url()?>/assets/img/noimage.png" height="80" width="80"></td>
        		<?php endif;?>
        		
				<td><?=$producto->nombre?></td>
				<td><?=$producto->categoria->nombre?></td>
				<td>
						<?php if (sizeof($producto->ownLineaDeVentaList) == 0):?>
        				<form action="<?=base_url()?>producto/dPost" method="post">
        					<input type="hidden" name="id" value="<?=$producto->id?>">
        					<button onclick="submit()">
        						<img src="<?=base_url()?>/assets/img/basura.png" height="20"
        							width="20">
        					</button>
        				</form>
  						<?php endif;?>
  						
        				<form action="<?=base_url()?>producto/u" method="get">
        					<input type="hidden" name="id" value="<?=$producto->id?>">
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