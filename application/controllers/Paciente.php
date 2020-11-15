<?php

class Paciente extends CI_Controller
{

    public function r()
    {

        $this->load->model('paciente_model');
        $datos['pacientes'] = $this->paciente_model->getPacientes();
        frame($this, 'paciente/r', $datos);
    }
    
    public function u()
    {

        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('paciente_model');
        $this->load->model('pais_model');
        $data['paciente'] = $this->paciente_model->getPacienteById($id);
        $data['paises'] = $this->pais_model->getPaises();
        frame($this, 'paciente/u', $data);
        
        
    }
    
    public function uPost() {
        

        $this->load->model('paciente_model');
        $this->load->model('pais_model');
        
        $id = isset($_POST['id']) ? $_POST['id']:null;
        $loginname = isset($_POST['loginname']) ? $_POST['loginname'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $altura = isset($_POST['altura']) ? $_POST['altura'] : null;
        $fechaNacimiento = isset($_POST['fechaNacimiento']) ? $_POST['fechaNacimiento'] : null;
        $pais = isset($_POST['pais']) ? $_POST['pais'] : null;
        
        try {
            $this->paciente_model->actualizarPaciente($id, $loginname, $nombre, $altura, $fechaNacimiento, $this->pais_model->getPaisById($pais));
            redirect(base_url() . 'paciente/r');
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['uri'] = 'paciente/r';
            redirect(base_url() . 'msg');
        }
    }
    
    public function dPost() {
        
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('paciente_model');
        $this->paciente_model->borrarPaciente($id);
        redirect(base_url().'paciente/r');
    }
}
?>