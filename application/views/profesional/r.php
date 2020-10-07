<div class="container">

<h1 class="textoexp1">Listado de Profesionales</h1>
<h5>En esta seccion podrás consultar el listado completo de profesionales dados de alta en la pagina</h5>
<?php if ($datosGen['persona']==null):?>
<code>Registrate para poder concretar una cita</code><br>
<?php endif;?>

<div class="divAnuncioProfesionales row">
    <div class="col-sm-11">Anuncio ejemplo</div>
        <div class="col-sm-1">
        <?php if ($datosGen['persona']==null):?>
        <button class="botonPedirCita btn btn-primary" disabled>Pedir cita</button>
        <?php endif;?>
    </div>
</div>

<div class="divAnuncioProfesionales row">
    <div class="col-sm-11">Anuncio ejemplo 2</div>
        <div class="col-sm-1">
        <?php if ($datosGen['persona']==null):?>
        <button class="botonPedirCita btn btn-primary" disabled>Pedir cita</button>
        <?php endif;?>
    </div>
</div>

<div class="divAnuncioProfesionales row">
    <div class="col-sm-11">Anuncio ejemplo 3</div>
        <div class="col-sm-1">
        <?php if ($datosGen['persona']==null):?>
        <button class="botonPedirCita btn btn-primary" disabled>Pedir cita</button>
        <?php endif;?>
    </div>
</div>

</div>

