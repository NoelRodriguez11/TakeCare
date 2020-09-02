<?php

class Aficion extends CI_Controller
{

    public function u() {
        $id = isset($_GET['id'])?$_GET['id']:null;
        $this->load->model('aficion_model');
        $data['nombre'] = $this->aficion_model->getAficionNombreById($id);
        $data['id']=$id;
        frame($this,'aficion/u',$data);
    }
    
    public function uPost() {
        $id = isset($_POST['id'])?$_POST['id']:null;
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $this->load->model('aficion_model');
        $this->aficion_model->update($id,$nombre);
        redirect(base_url().'aficion/r');
    }
    
    public function dPost() {
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('aficion_model');
        $this->aficion_model->borrarAficion($id);
        redirect(base_url().'aficion/r');
    }
    public function c()
    {
        frame($this,'Aficion/c');
    }

    public function cPost()
    {
        $this->load->model('aficion_model');
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        try {
            $this->aficion_model->crearAficion($nombre);
            redirect(base_url() . 'aficion/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='aficion/c';
            redirect(base_url() . 'msg');
        }
    }

    public function r()
    {
        $this->load->model('aficion_model');
        $datos['aficiones'] = $this->aficion_model->getAficiones();
        frame($this,'aficion/r', $datos);
    }
}
?>