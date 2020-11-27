<?php

class Cita extends CI_Controller {

    public function r() {
        frame($this, 'cita/r');
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