<?php

class Caso extends CI_Controller {

    public function rCasosPendientes() {
        
        $this->load->model('caso_model');
        $datos['casos'] = $this->caso_model->getCasosByEstado("Pendiente");
        frame($this, 'caso/rCasosPendientes', $datos);
    }
    
    public function rCasosPendientesPac() {
        
        $this->load->model('caso_model');
        $datos['casos'] = $this->caso_model->getCasosByEstado("Pendiente");
        frame($this, 'caso/rCasosPendientesPac', $datos);
    }
    
    public function rCasosRechazados() {
        
        $this->load->model('caso_model');
        $datos['casos'] = $this->caso_model->getCasosByEstado("Rechazada");
        frame($this, 'caso/rCasosRechazados', $datos);
    }
      
    public function r() {
        
        $this->load->model('caso_model');
        $datos['casos'] = $this->caso_model->getCasosByEstado("Aceptada");
        frame($this, 'caso/r', $datos);
    }
    
    public function rPacientes() {
        
        $this->load->model('caso_model');
        $datos['casos'] = $this->caso_model->getCasos();
        frame($this, 'caso/rPacientes', $datos);
    }
    
    
    
    public function c() {
        
       
        $idProfesional = isset($_GET['idProfesional']) ? $_GET['idProfesional'] : null;
        $this->load->model('profesional_model');
        $data['profesional'] = $this->profesional_model->getProfesionalById($idProfesional);
        frame($this,'caso/c',$data);
    }
    
    public function cPost()
    {
        $this->load->model('caso_model');
        $this->load->model('profesional_model');
        $this->load->model('persona_model');
        
        $fechahora = isset($_POST['fechahora']) ? $_POST['fechahora'] : null;
        $idProfesional = isset($_POST['idProfesional']) ? $_POST['idProfesional'] : null;
        $idPersona = isset($_POST['idPersona']) ? $_POST['idPersona'] : null;
        $diagnosticoPrevio = isset($_POST['diagnosticoPrevio']) ? $_POST['diagnosticoPrevio'] : null;
        
        
        try {
            $this->caso_model->crearCaso($fechahora,$this->profesional_model->getProfesionalById($idProfesional),$this->persona_model->getPersonaById($idPersona), $diagnosticoPrevio);
            PRG('Solicitud de consulta enviada.', 'home', 'success');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='profesional/c';
            redirect(base_url() . 'msg');
        }
    }
    
    
    
    public function dPost() {
        
        $id = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        $this->load->model('caso_model');
        $this->caso_model->borrarCaso($id);
        redirect(base_url().'caso/rPacientes');
        }

    }
    
    
?>