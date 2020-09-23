<!-- Bootstrap NavBar -->
<nav class="navbar navbar-inverse">

  <a class="navbar-brand" href="<?=base_url()?>"> 
	<img src="<?=base_url()?>assets/img/iconotc.png" alt="INICIO" style="width: 60px;">
    <span class="menu-collapsed">TAKE CARE</span>
  </a>
  
  <ul class="navbar-nav">
  <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        DIAGNOSTICO ONLINE
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
  
  
  
<div class="container">
    <ul class="nav navbar-nav navbar-right">
    
    <button type="button" onclick="cambiarModo()">
    	<span><i class="fas fa-lightbulb"></i></span>
	</button>
	
       <?php if ($datosGen['persona']!=null):?>
	Bienvenid@ <?=$datosGen['persona']->loginname?> /
	<a href="<?=base_url()?>hdu/anonymous/logout">Salir</a>
<?php else:?>
	<a href="<?=base_url()?>hdu/anonymous/registrar">Registro</a> / 
	<a href="<?=base_url()?>hdu/anonymous/login">Login</a>
	</ul>
<?php endif;?>


  
</div>

</nav>




<?php if (isset ($datosGen['persona'])): ?>  

<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Primero</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">1.1</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">1.2</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">1.3</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">CONFIGURACIÓN PERFIL</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">2.1</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">2.2</span>
                </a>
            </div>            
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">CONFIGURACIÓN PERFIL</span>    
                </div>
            </a>
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OPTIONS</small>
            </li>
            <!-- /END Separator -->
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-calendar fa-fw mr-3"></span>
                    <span class="menu-collapsed">CALENDARIO</span>
                </div>
            </a>
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">MENSAJES <span class="badge badge-pill badge-primary ml-2">5</span></span>
                </div>
            </a>
            <!-- Separator without title -->
            <li class="list-group-item sidebar-separator menu-collapsed"></li>            
            <!-- /END Separator -->
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Help</span>
                </div>
            </a>
            <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Collapse</span>
                </div>
            </a>
            <!-- Logo -->   
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->

<?php endif;?>

