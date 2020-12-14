<?php

class Sintoma extends CI_Controller
{
    
    public function c() {
        if(!isRolOK("admin")){
         PRG("Rol inadecuado, debes ser Administrador");
         } 
        $this->load->model('sintoma_model');
        $datos['sintomas'] = $this->sintoma_model->getSintomas();
        frame($this,'sintoma/c', $datos);
    }
    
    public function cPost() {
        
         if(!isRolOK("admin")){
         PRG("Rol inadecuado, debes ser Administrador");
         } 
        
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        
        try{
            $this->load->model('sintoma_model');
            
            try {
                $this->sintoma_model->crearSintoma($nombre);
                
            }
            catch (Exception $e) {
                
                throw new Exception ("sintoma ya existente");
            }
            
            PRG('sintoma creado correctamente','sintoma/r','success');
        }
        catch (Exception $e) {
            PRG($e->getMessage(), '/sintoma/c');
            
        }
    }
    
    public function r() {
        if(!isRolOK("admin")){
            PRG("Rol inadecuado, debes ser Administrador");
        } 
        $this->load->model('sintoma_model');
        $datos['sintomas'] = $this->sintoma_model->getSintomas();
        frame($this,'sintoma/r', $datos);
    }
    
    public function u() {
        if(!isRolOK("admin")){
         PRG("Rol inadecuado, debes ser Administrador");
         } 
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('sintoma_model');
        $data['sintoma'] = $this->sintoma_model->getSintomaById($id);
        frame($this, 'sintoma/u', $data);
    }
    
    public function uPost() {
        if(!isRolOK("admin")){
         PRG("Rol inadecuado, debes ser Administrador");
         } 
        $this->load->model('sintoma_model');
        
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        
        try {
            $this->sintoma_model->actualizarSintoma($id, $nombre);
            redirect(base_url() . 'sintoma/r');
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['uri'] = 'sintoma/r';
            redirect(base_url() . 'msg');
        }
    }
    
    
    public function dPost() {
        if(!isRolOK("admin")){
            PRG("Rol inadecuado, debes ser Administrador");
        } 
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('sintoma_model');
        $this->sintoma_model->borrarSintoma($id);
        redirect(base_url().'sintoma/r');
    }
}
?>