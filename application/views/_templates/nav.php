
<?php if (isset ($datosGen['persona']) && $datosGen['persona']->loginname != 'admin'): ?>  
<nav class="container navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" style="margin: auto;width: 60%;padding: 60%; " href="<?=base_url()?>">Inicio</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">

	   
		<li>
			<div class="btn-nav" title ="Ver carrito"><a class="btn btn-info btn-small navbar-btn" href="/carrito">
			<img src="<?=base_url()?>/assets/img/shopcart.png" height="40" width="40"></a>
            </div>
		</li>
<?php else: ?> 	
<nav class="container navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" style="margin: auto;width: 60%; " href="<?=base_url()?>">Inicio</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">

<?php endif;?>
    </ul>
  </div>
</nav>


