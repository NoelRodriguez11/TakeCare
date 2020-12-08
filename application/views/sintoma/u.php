<div class="container">
	<h1>Editar síntoma</h1>
	
	<a href="<?=base_url()?>sintoma/r">
		<button>Cancelar</button>
	</a>
	
    <form action="<?=base_url()?>sintoma/uPost" method="post">
    
    	<input type="hidden" name="id" value="<?=$sintoma->id?>"/>
    	
    	<label for="idp">Nombre</label>
    	<input id="idp" type="text" name="nombre" value="<?=$sintoma->nombre?>"/>
    	<input type="hidden" id="nombreActualId" name="nombreActual" value="<?=$sintoma->nombre?>"/>
    	
    	<input type="hidden" name="id" value="<?=$sintoma->id?>"/>
    	<input type="submit"/>
	</form>
</div>