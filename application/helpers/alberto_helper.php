<?php
function cascada($texto,$profundidad=5) {
    $html = '';
    $profundidad = $profundidad<=5?$profundidad:6;
    for ($i=1;$i<=$profundidad;$i++) {
        $html .= "<h$i>$texto</h$i>";
    }
    return $html;
}
?>