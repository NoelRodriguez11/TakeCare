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
						<button type="submit"  id="loginBoton" class="btn">Login</button>
						<a href="#" id="btn_modal" class="forgot" onclick="ventrecuperarPWD();">Forgot Password?</a>
					</div>				
				</form>
				
			</div>
			
			
			<script type="text/javascript">
			function ventrecuperarPWD(){
				var top = screen.availHeight/2-100;
				var left = screen.availWidth/2-100;
				//var nombre=document.getElementById("texto").value;
				var miVentana = window.open("","","width=1000, height=1000, top="+top+",left="+left+""); 
				miVentana.document.open();
				//miVentana.document.write("<h1>"+nombre+"</h1>");
				miVentana.document.close();
				}


			</script>		
    			
    			
    			
    			
    			
</div>

