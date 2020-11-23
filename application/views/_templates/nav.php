<?php if (isset ($datosGen['persona'])): ?> 
<nav class="main-menu">
            <ul>
                <li>
                    <a href="<?=base_url()?>hdu/anonymous/configPerfil">
                        <i class="fa fa-cogs fa-2x"></i>
                        <span class="nav-text">
                     		Configuración perfil
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="#">
                      <i class="fa fa-stethoscope fa-2x"></i>
                        <span class="nav-text">
                            Chequeo Médico
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-user-md fa-2x"></i>
                        <span class="nav-text">
                            Tratamiento
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-calendar-alt fa-2x"></i>
                        <span class="nav-text">
                            Calendario
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                           Citas 
                        </span>
                    </a>
                </li>
                <li>
                </li>
                </ul>
                
        </nav>
<?php endif;?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a   class="navbar-left" href="<?=base_url()?>"> 
    <span><img src="<?=base_url()?>assets/img/iconotc.png" alt="INICIO" style="width: 50px; height:50px;"></span>
 	</a>
  
   <a class="navbar-brand" href="<?=base_url()?>"> 
    <span class="logoTakeCare textoLogo">TakeCare</span>
  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="textoexp2" href="<?=base_url()?>profesional/r">Profesionales</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a><button type="button" onclick="cambiarModo()">
        	<span><i class="fas fa-lightbulb"></i></span>
    	</button></a>
    	</li>
    	
		
         <?php if ($datosGen['persona']!=null):?>
        	<li><a class="textoexp1">Bienvenid@ <?=$datosGen['persona']->loginname?></a></li><li><a class="textoexp1" href="<?=base_url()?>hdu/anonymous/logout">Salir</a></li>
        <?php else:?>
        	<li><a class="textoexp1" href="<?=base_url()?>hdu/anonymous/registrar">Registro</a></li><li><a class="textoexp1" href="<?=base_url()?>hdu/anonymous/login">Login</a></li>
        <?php endif;?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

