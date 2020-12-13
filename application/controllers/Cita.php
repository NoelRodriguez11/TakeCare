<?php

class Cita extends CI_Controller {

    public function rPaciente() {
        
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado");
        }
        
        $this->load->model('caso_model');
        $this->load->model('cita_model');
        $this->load->model('sintoma_model');
        
        $id = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        
        $datos['caso'] = $this->caso_model->getCasoById($id);
        $datos['citas'] = $this->cita_model->getCitasByCasoId($id);
        $datos['sintomas'] = $this->sintoma_model->getSintomas();
        frame($this, 'cita/rPaciente', $datos);
    }
    
    public function rPacienteFinalizada() {
        
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado");
        }
        
        $this->load->model('caso_model');
        $this->load->model('cita_model');
        $this->load->model('sintoma_model');
        $id = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        $datos['caso'] = $this->caso_model->getCasoById($id);
        $datos['citas'] = $this->cita_model->getCitasByCasoId($id);
        $datos['sintomas'] = $this->sintoma_model->getSintomas();
        frame($this, 'cita/rPaciente', $datos);
    }
    
    public function rProfesional() {
        
        if(!isRolOKPro("profesional")){
            PRG("Rol inadecuado");
        }
        $this->load->model('caso_model');
        $this->load->model('sintoma_model');
        $this->load->model('cita_model');
        
        
        $id = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        $datos['caso'] = $this->caso_model->getCasoById($id);
        $datos['sintomas'] = $this->sintoma_model->getSintomas();
        $datos['citas'] = $this->cita_model->getCitasByCasoId($id);
        frame($this, 'cita/rProfesional', $datos);
    }
    
    public function rCasosCerrados() {
        
        if(!isRolOKPro("profesional")){
            PRG("Rol inadecuado");
        }
        
        $idCaso = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
               
        $this->load->model('caso_model');
 
        $datos['caso'] = $this->caso_model->getCasoById($idCaso);
        $datos['casos'] = $this->caso_model->getCasosByEstado("Finalizada");
        frame($this, 'caso/rCasosCerrados', $datos);
    }
    
    public function rProfesionalFinalizada() {
        
        if(!isRolOKPro("profesional")){
            PRG("Rol inadecuado");
        }
        
        $this->load->model('caso_model');
        $this->load->model('cita_model');
        $this->load->model('sintoma_model');
        
        $idCaso = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
     
        $datos['caso'] = $this->caso_model->getCasoById($idCaso);
        $datos['sintomas'] = $this->sintoma_model->getSintomas();
        $datos['citas'] = $this->cita_model->getCitasByCasoId($idCaso);
        frame($this, 'cita/rProfesional', $datos);
    }
    
    public function c() {
             
        if( !isRolOKPro("profesional")){
            PRG("Rol inadecuado");
        }
        
        $id = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        $this->load->model('caso_model');
        $datos['caso'] = $this->caso_model->getCasoById($id);
        frame($this,'cita/c', $datos);
    }
    
    public function cPost()
    {
        if( !isRolOKPro("profesional")){
            PRG("Rol inadecuado");
        }
        $this->load->model('caso_model');
        $this->load->model('cita_model');
        $this->load->model('profesional_model');
        $this->load->model('persona_model');
        $this->load->model('sintoma_model');
        
        $fechahora = isset($_POST['fechahora']) ? $_POST['fechahora'] : null;
        $idProfesional = isset($_POST['idProfesional']) ? $_POST['idProfesional'] : null;
        $idPersona = isset($_POST['idPaciente']) ? $_POST['idPaciente'] : null;
        $idCaso = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        $caracter = isset($_POST['caracter']) ? $_POST['caracter'] : null;
        
        try {
            $this->cita_model->crearCita($fechahora,$this->profesional_model->getProfesionalById($idProfesional), $this->persona_model->getPersonaById($idPersona), $this->caso_model->getCasoById($idCaso), $caracter );
            $datos['caso'] = $this->caso_model->getCasoById($idCaso);
            $datos['sintomas'] = $this->sintoma_model->getSintomas();
            $datos['citas'] = $this->cita_model->getCitasByCasoId($idCaso);
            frame($this,'cita/rProfesional', $datos);
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='';
            redirect(base_url() . 'msg');
        }
    }
    
    
    public function dPost() {
        
        if(!isRolOKPro("profesional")){
            PRG("Rol inadecuado");
        }
        
        $id = isset($_POST['idCita']) ? $_POST['idCita'] : null;
        $idCaso = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        
            $this->load->model('cita_model');
            $this->cita_model->borrarCita($id);
            
 
            $this->load->model('caso_model');
            $this->load->model('sintoma_model');
            $datos['caso'] = $this->caso_model->getCasoById($idCaso);
            $datos['sintomas'] = $this->sintoma_model->getSintomas();
            $datos['citas'] = $this->cita_model->getCitasByCasoId($idCaso);
            frame($this,'cita/rProfesional', $datos);
          
    }

    public function dPostPaciente() {
        
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado");
        }
        
        $id = isset($_POST['idCita']) ? $_POST['idCita'] : null;
        $idCaso = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        
        $this->load->model('cita_model');
        $this->cita_model->borrarCita($id);
        
        
        $this->load->model('caso_model');
        $this->load->model('sintoma_model');
        $datos['caso'] = $this->caso_model->getCasoById($idCaso);
        $datos['sintomas'] = $this->sintoma_model->getSintomas();
        $datos['citas'] = $this->cita_model->getCitasByCasoId($idCaso);
        frame($this,'cita/rPaciente', $datos);
        
    }


    
    
}
?>