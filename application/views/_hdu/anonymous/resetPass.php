<div class="container">
<form class="form" action="<?=base_url().'hdu/anonymous/cambiarContra'?>" method="post">

						<input type="hidden" name="token" value="<?=$this->uri->segment(4)?>">	
						<input type="hidden" name="email" value="<?=$this->uri->segment(5)?>">	
						<div class="form-group">
						Nueva Contraseña 
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
						<br>
						
						Confirmar Nueva Contraseña  
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">
						<br> 
					
					</div>
					<div class="modal-footer">      			
						<input type="submit" value="Guardar nueva" id = "loginBoton" class="btn btnEstandar"/>	
					</div>
				</form>
</div>