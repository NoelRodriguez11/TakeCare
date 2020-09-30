<div class="container col-6" id="divLogin">

	<h1>Introduce tus credenciales</h1>

		<h4 class="modal-title">Logueate!</h4>	
			<div class="modal-body">
				<form class="form" action="<?=base_url().'hdu/anonymous/loginPost'?>" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="nombre" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" id="loginBoton" class="btn">Login</button>
						<a href="#" id="btn_modal" data-toggle="modal" class="forgot" data-target="#exampleModal" data-whatever="@getbootstrap">Forgot Password?</a>
					</div>				
				</form>
				
			</div>
			
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperación de contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Introduce email:</label>
            <input type="text" class="form-control" id="btn_modal" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button"  id="loginBoton" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="loginBoton" class="btn btn-secondary">Send message</button>
      </div>
    </div>
  </div>
</div>
    			
    			
    			
    			
    			
</div>

