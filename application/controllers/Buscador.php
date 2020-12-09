<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscador extends CI_Controller {
    
    public function filtroSelect()
    {
        $palabras = $this->input->post('palabras');
        
            $this->load->model('buscador_model');
            $this->load->model('especialidad_model');
            
            $ProfesionalEspecialidad = $this->buscador_model->filtro($palabras);
            
            $data['palabras'] = $ProfesionalEspecialidad;
       
            
        frame($this, 'profesional/Filtrado', $data);
    }
    
}
