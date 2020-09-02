<div class="container">

<h1>Lista de personas</h1>

<a href="<?=base_url()?>persona/c"><button>Nueva</button></a>
<a href="<?=base_url()?>"><button>Volver</button></a>
<table border="1">
	<tr>
		<th>Loginname</th>
		<th>País nacimiento</th>
		<th>País residencia</th>
		<th>Af.gustan</th>
		<th>Af.odia</th>
		<th>Acción</th>
	</tr>
	
	<?php foreach ($personas as $persona): ?>
		<tr>
		<td><?= $persona->loginname?></td>
		<td><?= $persona->nace!=null?$persona->nace->nombre:'--'?></td>
		<td><?= $persona->reside!=null?$persona->reside->nombre:'--'?></td>
		<td>
				<?php foreach ($persona->ownGustaList as $gusta): ?>
					<?= $gusta->aficion!=null?$gusta->aficion->nombre:''?> 
				<?php endforeach;?>
			</td>
		<td>
				<?php foreach ($persona->ownOdiaList as $odia): ?>
					<?= $odia->aficion!=null?$odia->aficion->nombre:''?> 
				<?php endforeach;?>
			</td>
		<td>
			<form action="<?=base_url()?>persona/dPost" method="post">
				<input type="hidden" name="id" value="<?=$persona->id?>">
				<button onclick="submit()">
					<img src="<?=base_url()?>/assets/img/basura.png" height="20"
						width="20">
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

	</tr>
	<?php endforeach;?>
</table>

</div>

