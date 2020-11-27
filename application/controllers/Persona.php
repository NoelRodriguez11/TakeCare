<?php

class Persona extends CI_Controller
{

    public function r()
    {
        if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        }
        $this->load->model('persona_model');
        $datos['personas'] = $this->persona_model->getPersonas();
        frame($this, 'persona/r', $datos);
    }
    
    public function u()
    {
        if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        }
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('persona_model');
        $this->load->model('pais_model');
        $data['persona'] = $this->persona_model->getPersonaById($id);
        $data['paises'] = $this->pais_model->getPaises();
        frame($this, 'persona/u', $data);
        
        
    }
    
    public function uPost() {
        
        if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        }
        $this->load->model('persona_model');
        $this->load->model('pais_model');
        
        $id = isset($_POST['id']) ? $_POST['id']:null;
        $loginname = isset($_POST['loginname']) ? $_POST['loginname'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $altura = isset($_POST['altura']) ? $_POST['altura'] : null;
        $fechaNacimiento = isset($_POST['fechaNacimiento']) ? $_POST['fechaNacimiento'] : null;
        $pais = isset($_POST['pais']) ? $_POST['pais'] : null;
        
        try {
            $this->persona_model->actualizarPersona($id, $loginname, $nombre, $altura, $fechaNacimiento, $this->pais_model->getPaisById($pais));
            redirect(base_url() . 'persona/r');
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['uri'] = 'persona/r';
            redirect(base_url() . 'msg');
        }
    }
    
    public function dPost() {
        
        if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        }
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('persona_model');
        $this->persona_model->borrarPersona($id);
        redirect(base_url().'persona/r');
    }
    
    //CONFIGURACION PERFIL
    
    public function cambiarContraPersona() {
        session_start();
        $this->load->model('persona_model');
        
        $id =  $_SESSION['persona']['id'];
        
        $pwd1 = $this->input->post('newpwd');
        $pwd2 = $this->input->post('new1pwd');
        
        if ($pwd1 == $pwd2) {
            $encryptedPassword = password_hash($this->input->post('newpwd'), PASSWORD_DEFAULT);
            
            if ($this->persona_model->changePassPerfil($id, $encryptedPassword)) {
                
                echo '<h1 align="center">Has cambiado tu contraseña, para acceder pulsa <a href="' . base_url() . '">aquí</a></h1>';
                session_destroy();
            }
            else {
                
                echo '<h1 align="center">Algo ha salido mal. Por favor revisa los datos o contacta con nosotros.</h1>';
            }
        }
        
        else {
            echo '<h1 align="center">Las contraseñas no coinciden.Intentalo de nuevo</h1>';
        }
        
        
    }
    
    public function configPerfil() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('persona_model');
        $this->load->model('pais_model');
        $datos['persona'] = $this->persona_model->getPersonaById($id);
        $datos['paises'] = $this->pais_model->getPaises();
        frame($this, 'persona/configPerfil', $datos);
    }
    
    public function configPerfilPost() {
        session_start();
        $this->load->model('persona_model');
        $this->load->model('pais_model');
        
        $id =  $_SESSION['persona']['id'];
        //echo "id: " . $id;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $telefono = isset($_POST['tlf']) ? $_POST['tlf'] : null;
        $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : null;
        $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : null;
        $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : null;
        $pais = isset($_POST['pais']) ? $_POST['pais'] : null;
        
        try {
            $this->persona_model->actualizarPersona($id, $nombre, $telefono, $direccion, $ciudad, $provincia, $this->pais_model->getPaisById($pais));
            redirect(base_url() . 'persona/configPerfil');
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['uri'] = 'persona/configPerfil';
            redirect(base_url() . 'msg');
        }
    }
    
    public function obtenerDatos() {
        //         if(!isRolOK("admin")){
        //             PRG("Rol inadecuado");
        //         }
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('persona_model');
        echo $this->persona_model->getDatosPersona($id);
        
        
    }
   
   
    
    
//     public function u()
//     {
//         $id = isset($_GET['id']) ? $_GET['id'] : null;

//         $this->load->model('persona_model');
//         $this->load->model('pais_model');
//         $this->load->model('aficion_model');

//         $data['persona'] = $this->persona_model->getPersonaById($id);
//         $data['paises'] = $this->pais_model->getPaises();
//         $data['aficiones'] = $this->aficion_model->getAficiones();

//         frame($this, 'persona/u', $data);
//     }

//     public function uPost()
//     {
//         $this->load->model('persona_model');

//         $id = isset($_POST['id']) ? $_POST['id'] : null;
//         $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
//         $idPaisNace = isset($_POST['idPaisNace']) ? $_POST['idPaisNace'] : null;
//         $idPaisReside = isset($_POST['idPaisReside']) ? $_POST['idPaisReside'] : null;
//         $idsAficionGusta = isset($_POST['idsAficionGusta']) ? $_POST['idsAficionGusta'] : [];
//         $idsAficionOdia = isset($_POST['idsAficionOdia']) ? $_POST['idsAficionOdia'] : [];

//         try {
//             $this->persona_model->actualizarPersona($id, $nombre, $idPaisNace, $idPaisReside, $idsAficionGusta, $idsAficionOdia);
//             redirect(base_url() . 'persona/r');
//         } catch (Exception $e) {
//             session_start();
//             $_SESSION['_msg']['texto'] = $e->getMessage();
//             $_SESSION['_msg']['uri'] = 'persona/c';
//             redirect(base_url() . 'msg');
//         }
//     }
}
?>