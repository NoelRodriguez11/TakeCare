<div class="container">
	<h1>Editar Especialidad</h1>
	
	<a href="<?=base_url()?>especialidad/r">
		<button>Cancelar</button>
	</a>
	
    <form action="<?=base_url()?>especialidad/uPost" method="post">
    
    	<input type="hidden" name="id" value="<?=$especialidad->id?>"/>
    	
    	<label for="idp">Nombre</label>
    	<input id="idp" type="text" name="nombre" value="<?=$especialidad->nombre?>"/>
    	<input type="hidden" id="nombreActualId" name="nombreActual" value="<?=$especialidad->nombre?>"/>
    	
    	<input type="hidden" name="id" value="<?=$especialidad->id?>"/>
    	<input type="submit"/>
	</form>
</div>