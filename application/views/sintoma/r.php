<div class="container">
	<h1>Lista de síntomas</h1>
	<a href="<?=base_url()?>sintoma/c"><button class="button">Nuevo</button></a>
	<a href="<?=base_url()?>"><button class="button">Volver</button></a>


	<table class="table table-striped">
		<tr>
			<th>Nombre</th>
			<th>Acción</th>
		</tr>
			<?php foreach ($sintomas as $sintoma):?>
			<tr>
				<td><?=$sintoma->nombre?></td>
				<td>
        				<form action="<?=base_url()?>sintoma/dPost" method="post">
        					<input type="hidden" name="id" value="<?=$sintoma->id?>">
        					<button onclick="submit()">
        						<img src="<?=base_url()?>/assets/img/basura.png" height="20"
        							width="20">
        					</button>
        				</form>
  						
        				<form action="<?=base_url()?>sintoma/u" method="get">
        					<input type="hidden" name="id" value="<?=$sintoma->id?>">
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