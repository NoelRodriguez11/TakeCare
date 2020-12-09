<?php

class Cita extends CI_Controller {

    public function rPaciente() {
        
        $this->load->model('caso_model');
        $this->load->model('especialidad_model');
        $datos['casos'] = $this->caso_model->getCasosByEstado("Aceptada");
        $datos['especialidades'] = $this->especialidad_model->getEspecialidades();
        frame($this, 'cita/rPaciente', $datos);
    }
    
    public function rProfesional() {
        
        $this->load->model('caso_model');
        $this->load->model('especialidad_model');
        $this->load->model('sintoma_model');
        $datos['casos'] = $this->caso_model->getCasosByEstado("Aceptada");
        $datos['especialidades'] = $this->especialidad_model->getEspecialidades();
        $datos['sintomas'] = $this->sintoma_model->getSintomas();
        frame($this, 'cita/rProfesional', $datos);
    }
    
    public function c() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('profesional_model');
        $data['profesional'] = $this->profesional_model->getProfesionalById($id);
        frame($this,'cita/c',$data);
    }
    
    public function cPost()
    {
        $this->load->model('cita_model');
        
        $fechahora = isset($_POST['fechahora']) ? $_POST['fechahora'] : null;
        $idEspecialidad = isset($_POST['idEspecialidad']) ? $_POST['idEspecialidad'] : null;
        $idProfesional = isset($_POST['idProfesional']) ? $_POST['idProfesional'] : null;
        
        try {
            $this->cita_model->crearCita($fechahora,$idEspecialidad,$idProfesional);
            redirect(base_url() . 'profesional/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='profesional/c';
            redirect(base_url() . 'msg');
        }
    }
    
    
}
?>