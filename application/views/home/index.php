<div  id="divContenido">
	<div class="contenidoPrincipal">
		<div class="col-lg-4" id="buscador">
			<form action="<?= base_url()?>Buscador/filtroSelect" method="get">
				<input type="text" name="palabras" id="buscabusca" placeholder="Buscar...">
				<input type="submit" id="loginBoton" class="btn btn-light" value="Buscar">
			</form>
		</div>
	</div>
</div>

<div class="acerca">
    <h2>Contacta a los mejores profesionales en tu ciudad</h2>
    
    <div class="container" id="contenidoExplicativo">
                    
        <div class="explicacion">
            <span class="logo1"><img src="<?=base_url()?>assets/img/acuerdo.png" alt="INICIO" style="width: 50px; height:50px;"></span>
            <strong><span class="textoexp1">Contacto con profesionales vía web</span></strong>
            <br> 
            <span class="textoexp2">Consulta la amplía lista de profesionales a disposición y concreta una cita.</span>
        </div>
        
        <br>
        
        <div class="explicacion">
            <span class="logo2"><img src="<?=base_url()?>assets/img/farmacia.png" alt="INICIO" style="width: 50px; height:50px;"></span>
            <strong><span class="textoexp1">Encuentra a los mejores profesionales</span></strong>
            <br> 
            <span class="textoexp2">Una vez iniciado el proceso puedes consultar los distintos diagnósticos y síntomas dentro de tus tratamientos.</span>
        </div>
        
        <br>
        
        <div class="explicacion">
            <span class="logo3"><img src="<?=base_url()?>assets/img/corazon.png" alt="INICIO" style="width: 50px; height:50px;"></span>
            <strong><span class="textoexp1">Evaluar tus síntomas es muy fácil</span></strong>
            <br>
            <span class="textoexp2">Mejoramos el acceso a la atención médica en todo el mundo.</span>
        </div>
        
        <br>
        
        <div class="explicacion">
            <span class="logo4"><img src="<?=base_url()?>assets/img/medicina.png" alt="INICIO" style="width: 50px; height:50px;"></span>
            <strong><span class="textoexp1">El mejor profesional, cerca de tu domicilio</span></strong>
            <br> 
            <span class="textoexp2">Podrás elegir entre una lista de profesionales cerca de tu casa fijandote en un sistema de valoración.</span>
        </div>
     </div>
     
      <div class="profesionalesBuscados">
                <h2 class="subtitulo">Profesionales más buscados</h2>
                <p class="subtitulo">Estas son las especialidades más buscadas.</p>
                
                <ul>
                    <li class="l1" style="background-position:-64px 0">
                        <a href="<?=base_url()?>Buscador/filtroSelect?palabras=Traumatologia">
                            <div class="foo">
                                <div class="h"><em class="sprite-h2"></em><span>Traumatólogos</span></div>
                            </div>
                        </a>
                    </li>
                    <li class="l2" style="background-position:-237px 0">
                        <a href="<?=base_url()?>Buscador/filtroSelect?palabras=Psicologia">
                            <div class="foo">
                                <div class="h"><em class="sprite-h2"></em><span>Psicólogo</span></div>
                            </div>
                        </a>
                    </li>
                    <li class="l3" style="background-position:-410px 0">
                        <a href="<?=base_url()?>Buscador/filtroSelect?palabras=Podologia">
                            <div class="foo">
                                <div class="h"><em class="sprite-h2"></em><span>Podólogo</span></div>
                            </div>
                        </a>
                    </li>
                    <li class="l4" style="background-position:-583px 0">
                        <a href="<?=base_url()?>Buscador/filtroSelect?palabras=Nutricionismo">
                            <div class="foo">
                                <div class="h"><em class="sprite-h2"></em><span>Nutricionistas</span></div>
                            </div>
                        </a>
                    </li>
                </ul>

                
            </div>
</div>	