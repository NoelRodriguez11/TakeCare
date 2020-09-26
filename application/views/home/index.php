<div class="container" id="divContenido">
<div class="contenidoPrincipal">
	<?php if ($rol == 'auth'):?>
    <h2>Bienvenido <b><?= $_SESSION['persona']->loginname?></b></h2>
    	<br>
    	<a href="<?=base_url()?>carrito/add">
    		<button>Comprar Productos</button>
    	</a><br>
    	<br/>
	<?php elseif ($rol == 'admin'): ?>
    	<code>AQUI IRIA EL CONTENIDO PRINCIPAL</code>
    	
	<?php else: ?>
	<?php endif;?>
	</div>
</div>
