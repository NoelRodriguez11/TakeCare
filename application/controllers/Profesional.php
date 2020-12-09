<?php

class Profesional extends CI_Controller
{

    public function r()
    {
        $this->load->model('profesional_model');
        $this->load->model('especialidad_model');
        $datos['profesionales'] = $this->profesional_model->getProfesionales();
        $datos['especialidades'] = $this->especialidad_model->getEspecialidades();
        frame($this, 'profesional/r', $datos);
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
        $nuevaValoracion = isset($_GET['nuevaValoracion']) ? $_GET['nuevaValoracion'] : null;
        $this->load->model('profesional_model');
        $this->profesional_model->setPuntuacionTotalValoraciones($id, $nuevaValoracion);
  
    }
    
    //CONFIGURACION PERFIL
    
    public function cambiarContraProfesional() {
        session_start();
        $this->load->model('profesional_model');
        
        $id =  $_SESSION['profesional']['id'];
        
        $pwd1 = $this->input->post('newpwd');
        $pwd2 = $this->input->post('new1pwd');
        
        if ($pwd1 == $pwd2) {
            $encryptedPassword = password_hash($this->input->post('new1pwd'), PASSWORD_DEFAULT);
            
            if ($this->profesional_model->changePassPerfil($id, $encryptedPassword)) {
                session_destroy();
                PRG('Has cambiado tu contraseña, intenta acceder','home','info');
               // echo '<h1 align="center">Has cambiado tu contraseña, para acceder pulsa <a href="' . base_url() . '">aquí</a></h1>';
                
            }
            else {
                PRG('Algo ha salido mal. Por favor revisa los datos o contacta con nosotros.');
               // echo '<h1 align="center">Algo ha salido mal. Por favor revisa los datos o contacta con nosotros.</h1>';
            }
        }
        
        else {
            PRG('Las contraseñas no coinciden. Inténtalo de nuevo');
            //echo '<h1 align="center">Las contraseñas no coinciden. Intentalo de nuevo</h1>';
        }
        
        
    }
    
    public function configPerfil() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('profesional_model');
        $datos['profesional'] = $this->profesional_model->getProfesionalById($id);
        frame($this, 'profesional/configPerfil', $datos);
    }
    
    public function configPerfilPost() {
        session_start();
        $this->load->model('profesional_model');
        
        $id =  $_SESSION['profesional']['id'];
        //echo "id: " . $id;
        $nombre = isset($_POST['nombrep']) ? $_POST['nombrep'] : null;
        $email = isset($_POST['correop']) ? $_POST['correop'] : null;
        $telefono = isset($_POST['tlfp']) ? $_POST['tlfp'] : null;
        
        try {
            $this->profesional_model->actualizarProfesional($id, $nombre, $email, $telefono);
            PRG('Tus datos han sido actualizados correctamente', 'profesional/configPerfil', 'info');
            //redirect(base_url() . 'persona/configPerfil');
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['uri'] = 'profesional/configPerfil';
            redirect(base_url() . 'msg');
        }
    }
    
    public function obtenerDatos() {
        //         if(!isRolOK("admin")){
        //             PRG("Rol inadecuado");
        //         }
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('profesional_model');
        echo $this->profesional_model->getDatosProfesional($id);
        
        
    }
    
//-----------------------------------------------------------ACEPTAR CASO------------------------------------------------------------------------------------
    public function aceptarCaso() {

        $id = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        $idProfesional = isset($_POST['idProfesional']) ? $_POST['idProfesional'] : null;
        $idPaciente = isset($_POST['idPaciente']) ? $_POST['idPaciente'] : null;
        $fechaCita = isset($_POST['fechaHora']) ? $_POST['fechaHora'] : null;

        $this->load->model('caso_model');
        $this->load->model('cita_model');
        $this->load->model('profesional_model');
        $this->load->model('persona_model');
               
        $this->caso_model->cambiarEstado($id, "Aceptada");
        $this->cita_model->crearCita($fechaCita,$this->profesional_model->getProfesionalById($idProfesional), $this->persona_model->getPersonaById($idPaciente));
                  
        PRG('Caso Aceptado', 'caso/r', 'success');
                
    }

//-----------------------------------------------------------RECHAZAR CASO------------------------------------------------------------------------------------
    public function rechazarCaso() {
        
        $id = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        $this->load->model('caso_model');
        $this->caso_model->cambiarEstado($id, "Rechazada");
        PRG('Caso Rechazado', 'caso/rCasosPendientes', 'danger');
        
        
    }

//-----------------------------------------------------------Editar diagnostico------------------------------------------------------------------------------------
    public function editarDiagnostico() {
        
        $id = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        $diagnosticoGeneral = isset($_POST['diagnosticoGeneral']) ? $_POST['diagnosticoGeneral'] : null;
        $this->load->model('caso_model');
        $this->caso_model->editarDiagnostico($id, $diagnosticoGeneral);
        redirect(base_url() . 'cita/rProfesional');
        
        
    }

    public function agregarSintoma() {
        
        $id = isset($_POST['idAfeccion']) ? $_POST['idAfeccion'] : null;
        $sintoma1 = isset($_POST['sintoma1']) ? $_POST['sintoma1'] : null;
        $sintoma2 = isset($_POST['sintoma2']) ? $_POST['sintoma2'] : null;
        $sintoma3 = isset($_POST['sintoma3']) ? $_POST['sintoma3'] : null;
        $sintoma4 = isset($_POST['sintoma4']) ? $_POST['sintoma4'] : null;
        $sintoma5 = isset($_POST['sintoma5']) ? $_POST['sintoma5'] : null;
        $sintoma6 = isset($_POST['sintoma6']) ? $_POST['sintoma6'] : null;
        $sintoma7 = isset($_POST['sintoma7']) ? $_POST['sintoma7'] : null;
        
        $this->load->model('afeccion_model');
        $this->afeccion_model->agregarSintoma($id,$sintoma1, $sintoma2, $sintoma3, $sintoma4, $sintoma5, $sintoma6, $sintoma7);
        redirect(base_url() . 'cita/rProfesional');
           
    }
    
    
        
        
    
      
    
}

?>