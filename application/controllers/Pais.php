<?php

class Pais extends CI_Controller
{
    
    public function dPost() {
        
        if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        }
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('pais_model');
        $this->pais_model->borrarPais($id);
        redirect(base_url().'pais/r');
    }
    
    public function c()
    {
        if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        }
        frame($this,'pais/c');
    }

    public function cPost()
    {
        if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        }
        $this->load->model('pais_model');
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $nHabitantes = isset($_POST['nHabitantes']) ? $_POST['nHabitantes'] : null;
        try {
            $this->pais_model->crearPais($nombre, $nHabitantes);
            redirect(base_url() . 'pais/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='pais/c';
            redirect(base_url() . 'msg');
        }
    }

    public function r()
    {
        if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        }
        $this->load->model('pais_model');
        $datos['paises'] = $this->pais_model->getPaises();   
        frame($this,'pais/r', $datos);
    }
    
    public function u()
    {
        if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        }
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('pais_model');
        $data['pais'] = $this->pais_model->getPaisById($id);
        frame($this, 'pais/u', $data);


    }
    
    public function uPost() {
        
        if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        }
        $this->load->model('pais_model');
        
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        
        try {
            $this->pais_model->actualizarPais($id, $nombre);
            redirect(base_url() . 'pais/r');
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['uri'] = 'pais/r';
            redirect(base_url() . 'msg');
        }
    }
    
    
}
?>