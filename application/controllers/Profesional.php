<?php

class Profesional extends CI_Controller
{

    public function r()
    {
        frame($this, 'profesional/r');
    }
    
    public function enviarStar() {
//         if(!isRolOK("admin")){
//             PRG("Rol inadecuado");
//         }
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        echo $id;
        $nuevaValoracion = isset($_GET['nuevaValoracion']) ? $_GET['nuevaValoracion'] : null;
        $this->load->model('profesional_model');
        $this->profesional_model->setPuntuacionTotalValoraciones($id, $nuevaValoracion);
  
    }
    
    
}
?>