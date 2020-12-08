<div class="container">
	<h1>Lista de especialidades</h1>
	<a href="<?=base_url()?>especialidad/c"><button class="button">Nuevo</button></a>
	<a href="<?=base_url()?>"><button class="button">Volver</button></a>


	<table class="table table-striped">
		<tr>
			<th>Nombre</th>
			<th>Acción</th>
		</tr>
			<?php foreach ($especialidades as $especialidad):?>
			<tr>
				<td><?=$especialidad->nombre?></td>
				<td>
        				<form action="<?=base_url()?>especialidad/dPost" method="post">
        					<input type="hidden" name="id" value="<?=$especialidad->id?>">
        					<button onclick="submit()">
        						<img src="<?=base_url()?>/assets/img/basura.png" height="20"
        							width="20">
        					</button>
        				</form>
  						
        				<form action="<?=base_url()?>especialidad/u" method="get">
        					<input type="hidden" name="id" value="<?=$especialidad->id?>">
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