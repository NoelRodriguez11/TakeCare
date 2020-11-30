<?php

class Caso extends CI_Controller {

    public function r() {
        frame($this, 'caso/r');
    }
    
    public function c() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('profesional_model');
        $data['profesional'] = $this->profesional_model->getProfesionalById($id);
        frame($this,'caso/c',$data);
    }
    
    public function cPost()
    {
        $this->load->model('caso_model');
        $this->load->model('profesional_model');
        
        $fechahora = isset($_POST['fechahora']) ? $_POST['fechahora'] : null;
        $idProfesional = isset($_POST['idProfesional']) ? $_POST['idProfesional'] : null;
        $diagnosticoPrevio = isset($_POST['diagnosticoPrevio']) ? $_POST['diagnosticoPrevio'] : null;
        
        
        try {
            $this->caso_model->crearCaso($fechahora,$this->profesional_model->getProfesionalById($idProfesional), $diagnosticoPrevio);
            PRG('Solicitud de consulta enviada.', 'home', 'primary');
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