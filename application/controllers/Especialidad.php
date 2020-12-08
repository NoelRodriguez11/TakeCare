<?php

class Especialidad extends CI_Controller
{
    
    public function c() {
        //VISTA
        /* if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        } */
        $this->load->model('especialidad_model');
        $datos['especialidades'] = $this->especialidad_model->getEspecialidades();
        frame($this,'especialidad/c', $datos);
    }
    
    public function cPost() {
        
        /* if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        } */
        
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        
        try{
        $this->load->model('especialidad_model');
        
        try {
            $this->especialidad_model->crearEspecialidad($nombre);
            
        }
        catch (Exception $e) {
            
            throw new Exception ("Especialidad ya existente");
        }
        
        PRG('Especialidad creada correctamente','especialidad/r','success');
    }
    catch (Exception $e) {
        PRG($e->getMessage(), '/especialidad/c');
        
    }
}
    
    public function r()
    {
        $this->load->model('especialidad_model');
        $datos['especialidades'] = $this->especialidad_model->getEspecialidades();   
        frame($this,'especialidad/r', $datos);
    }
    
    public function u()
    {
        /* if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        } */
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('especialidad_model');
        $data['especialidad'] = $this->especialidad_model->getEspecialidadById($id);
        frame($this, 'especialidad/u', $data);
    }
    
    public function uPost() {
        
        /* if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        } */
        $this->load->model('especialidad_model');
        
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        
        try {
            $this->especialidad_model->actualizarEspecialidad($id, $nombre);
            redirect(base_url() . 'especialidad/r');
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['uri'] = 'especialidad/r';
            redirect(base_url() . 'msg');
        }
    }
    
    
    public function dPost() {
        
        /* if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        } */
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('especialidad_model');
        $this->especialidad_model->borrarEspecialidad($id);
        redirect(base_url().'especialidad/r');
    }
}
?>