<div class="container">
 	Seleccione una categoría:
	<select id="idCategoria" name="categoria" onchange="visualizarProductos()">
		<option selected="selected" value=0>---Todas---</option>
		<?php foreach ($categorias as $categoria):?>
		<option value="<?=$categoria->id?>"><?= $categoria->nombre?></option>
		<?php endforeach;?>
	</select>
	<br>
	<br>
 	
 	
    <table class="table table-striped">
		<tr>
			<th>Foto</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Cantidad</th>
			<th></th>
		</tr>
			<?php foreach ($productos as $producto):?>
			<tr>
    			<?php if ($producto->extension_Foto != null):?>
        		<td><img src="<?=base_url()?>/assets/img/upload/producto/producto-<?=$producto->id?>.<?=$producto->extension_Foto?>" height="80" width="80"></td>
        		<?php else:?>
        		<td><img src="<?=base_url()?>/assets/img/noimage.png" height="80" width="80"></td>
        		<?php endif;?>
        		
				<td><?=$producto->nombre?></td>
				<td><?=$producto->precio?> $</td>
				<td><input type="number" value="1" style="width:40px; text-align: center;"/></td>
				<td>	
        				<form action="<?=base_url()?>/u" method="get">
        					<button onclick="submit()" title="Añadir al carrito">
        						<img src="<?=base_url()?>/assets/img/add.png" height="30"
        							width="30">
        					</button>
        				</form>
        				
				</td>
			</tr>
			
			<?php endforeach;?>
	</table>
    	<br/>
    	
<script type="text/javascript">
	// AJAX DE PRODUCTO
    	function mostrar(respuestaAJAX) {
    		
  			alert("llega");
    	}
    	
    	function visualizarProductos() {
    		url = "http://localhost/papCI-master/producto/addAJAX";
    			
    		x = new XMLHttpRequest();
    		x.open("POST", url, true);
    		x.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    		
    		x.send("idCategoria="+document.getElementById('idCategoria').value);
			
    		x.onreadystatechange=function() {
    			if (x.readyState==4 && x.status==200) {
    				mostrar(x.responseText);
    			} 

    		//--disable-web-security --disable-gpu --user-data-dir=C:\tmp
    		}
    	}
</script>

</div>