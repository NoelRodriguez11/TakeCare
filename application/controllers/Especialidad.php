<?php

class Especialidad extends CI_Controller
{
    
    public function r()
    {
        $this->load->model('especialidad_model');
        $datos['especialidades'] = $this->especialidad_model->getEspecilidades();   
        frame($this,'especialidad/r', $datos);
    }
       
}
?>