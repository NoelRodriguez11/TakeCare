<?php

/**
 * @param string $rol admin ó auth
 * @return boolean si el rol es adecuado para la función
 */
function isRolOK($rol)
{
    $sol = false;

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $persona = isset($_SESSION['persona']) ? $_SESSION['persona'] : null;

    if ($persona != null && ($rol == 'auth' || $persona->loginname == 'admin' && $rol == 'admin')) {
        $sol = true;
    }
    return $sol;
}

function PRG($mensaje='Ha ocurrido algún error', $uri = '/', $severity = 'danger')
{
    session_start();
    $_SESSION['_msg']['texto'] = $mensaje;
    $_SESSION['_msg']['uri'] = $uri;
    $_SESSION['_msg']['severity'] = $severity;
    redirect(base_url() . 'info');
}

?>