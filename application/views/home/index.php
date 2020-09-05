<div class="container">
	<?php if ($rol == 'auth'):?>
    <h2>Bienvenido <b><?= $_SESSION['persona']->loginname?></b></h2>
    	<br>
    	<a href="<?=base_url()?>carrito/add">
    		<button>Comprar Productos</button>
    	</a><br>
    	<br/>
	<?php elseif ($rol == 'admin'): ?>
    	<h2>Bienvenido <b>Administrador</b></h2>
    	<br>
    	<a href="<?=base_url()?>persona/r">
    		<button>Persona</button>
    	</a><br>
    	<a href="<?=base_url()?>pais/r">
    		<button>Pais</button>
    	</a><br>
    	<a href="<?=base_url()?>producto/r">
    		<button>Producto</button>
    	</a><br>
    	<a href="<?=base_url()?>categoria/r">
    		<button>Categoría</button>
    	</a><br>
    	
	<?php else: ?>
		<h2>Prueba de victor de menu login</h2>
	<?php endif;?>
</div>
