<?php

class Pais extends CI_Controller
{
    
    public function r()
    {
        $this->load->model('pais_model');
        $datos['paises'] = $this->pais_model->getPaises();   
        frame($this,'pais/r', $datos);
    }
       
}
?>