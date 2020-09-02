<div class="container">
	<h1>Editar producto</h1>
	
	<a href="<?=base_url()?>producto/r">
		<button>Cancelar</button>
	</a>
	
    <form action="<?=base_url()?>producto/uPost" method="post">
    
    	<input type="hidden" name="id" value="<?=$producto->id?>"/>
    	
    	<label for="idp">Nombre</label>
    	<input id="idp" type="text" name="nombre" value="<?=$producto->nombre?>" onkeyup="revisarProducto()"/>
    	<div id="warning" style="display:none;"></div><br>
    	<input type="hidden" id="nombreActualId" name="nombreActual" value="<?=$producto->nombre?>"/>
    	
    	<label for="idp">stock</label>
    	<input id="idp" type="number" name="stock" value="<?=$producto->stock?>"/>
    	<br>
    	
    	<label for="idp">Precio</label>
    	<input id="idp" type="number" name="precio" value="<?=$producto->precio?>"/>
    	<br>
    	
    	<label for="idp">Categoria</label>
		<select id="id-categoria" name="categoria">
		<option selected="selected" value="<?=$producto->categoria->id?>"><?=$producto->categoria->nombre?></option>
		<?php foreach ($categorias as $categoria):?>
    		<?php if ($categoria->nombre != $producto->categoria->nombre) :?>
    		<option value="<?=$categoria->id?>"><?= $categoria->nombre?></option>
    		<?php endif;?>
		<?php endforeach;?>
		</select>
    	
    	<input type="hidden" name="id" value="<?=$producto->id?>"/>
    	<input type="submit"/>
	</form>
	
		<!-- JAVASCRIPT PARA VISUALIZAR LA FOTO -->
	<script>
	// AJAX DE PRODUCTO
    	function mostrar(respuestaAJAX) {

    		nombreActual = document.getElementById("nombreActualId").value;
    		nombre = document.getElementById("idp").value;
    		
    		json = JSON.parse(respuestaAJAX);
    		if (json["coincide"] == 1 && nombreActual != nombre ) { 
        		mensaje ="<b>Advertencia</b>, este producto ya esta registrado.";
        		document.getElementById("warning").style="display:inline; margin-left:10px;";
        		document.getElementById("idp").classList.add("bg-warning");
        		document.getElementById("warning").innerHTML=mensaje;
    		}
    		else if (json["coincide"] == 1 &&  nombreActual != nombre ){
    			document.getElementById("warning").innerHTML='';
    			document.getElementById("idp").classList.remove('bg-warning');
        	}
    		else {
    			document.getElementById("warning").innerHTML='';
    			document.getElementById("idp").classList.remove('bg-warning');
    		}	
    	}
    	
    	function revisarProducto() {
    		url = "http://localhost/papCI-master/producto/cAJAX";
    			
    		x = new XMLHttpRequest();
    		x.open("POST", url, true);
    		x.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    		
    		x.send("nombreProducto="+document.getElementById('idp').value);
			
    		x.onreadystatechange=function() {
    			if (x.readyState==4 && x.status==200) {
    				mostrar(x.responseText);
    			} 

    		//--disable-web-security --disable-gpu --user-data-dir=C:\tmp
    		}
    	}
	</script>
</div>