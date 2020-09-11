<nav class="container navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="<?=base_url()?>">Inicio</a>
   
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">

	  <?php if (isset ($_SESSION['persona']) && $_SESSION['persona']->nombre == 'admin'): ?>    
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           Persona<span class="caret"></span>
        </a>
        
		<ul class="dropdown-menu">
		  <li><a href="<?=base_url()?>persona/c">Crear</a></li>
		  <li><a href="<?=base_url()?>persona/r">Listar</a></li>
	     </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           Afición<span class="caret"></span>
        </a>
        
		<ul class="dropdown-menu">
		  <li><a href="<?=base_url()?>aficion/c">Crear</a></li>
		  <li><a href="<?=base_url()?>aficion/r">Listar</a></li>
	     </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           País<span class="caret"></span>
        </a>
        
		<ul class="dropdown-menu">
		  <li><a href="<?=base_url()?>pais/c">Crear</a></li>
		  <li><a href="<?=base_url()?>pais/r">Listar</a></li>
	     </ul>
      </li>
      
      <?php endif;?>



    </ul>
  </div>
</nav>


