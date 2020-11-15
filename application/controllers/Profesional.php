<?php

class Profesional extends CI_Controller
{

    public function r()
    {
        frame($this, 'profesional/r');
    }

   
    public function u()
    {

        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('profesional_model');
        $this->load->model('pais_model');
        $data['profesional'] = $this->profesional_model->getProfesionalById($id);
        $data['paises'] = $this->pais_model->getPaises();
        frame($this, 'profesional/u', $data);
             
    }
    
    public function uPost() {
        
        $this->load->model('profesional_model');
        $this->load->model('pais_model');
        
        $id = isset($_POST['id']) ? $_POST['id']:null;
        $loginname = isset($_POST['loginname']) ? $_POST['loginname'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $altura = isset($_POST['altura']) ? $_POST['altura'] : null;
        $fechaNacimiento = isset($_POST['fechaNacimiento']) ? $_POST['fechaNacimiento'] : null;
        $pais = isset($_POST['pais']) ? $_POST['pais'] : null;
        
        try {
            $this->profesional_model->actualizarProfesional($id, $loginname, $nombre, $altura, $fechaNacimiento, $this->pais_model->getPaisById($pais));
            redirect(base_url() . 'profesional/r');
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['uri'] = 'profesional/r';
            redirect(base_url() . 'msg');
        }
    }
    
    public function dPost() {
        //SERIA EL PROFESIONAL EL QUE BORRARIA SU CUENTA PROPIA
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('profesional_model');
        $this->profesional_model->borrarProfesional($id);
        redirect(base_url().'profesional/r');
    }

    
    public function enviarStar() {
//         if(!isRolOK("admin")){
//             PRG("Rol inadecuado");
//         }
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        echo $id;
        $nuevaValoracion = isset($_GET['nuevaValoracion']) ? $_GET['nuevaValoracion'] : null;
        $this->load->model('profesional_model');
        $this->profesional_model->setPuntuacionTotalValoraciones($id, $nuevaValoracion);
  
    }
    
    
}

?>