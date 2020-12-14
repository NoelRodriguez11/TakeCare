<?php

class Persona extends CI_Controller
{

    public function r() {
        if(!isRolOK("admin")){
            PRG("Rol inadecuado, debes ser Administrador");
        }
        $this->load->model('persona_model');
        $datos['personas'] = $this->persona_model->getPersonas();
        frame($this, 'persona/r', $datos);
    }
    
    public function u() {
        if(!isRolOK("admin")){
            PRG("Rol inadecuado, debes ser Administrador");
        }
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('persona_model');
        $this->load->model('pais_model');
        $data['persona'] = $this->persona_model->getPersonaById($id);
        $data['paises'] = $this->pais_model->getPaises();
        frame($this, 'persona/d', $data);
        
    }
    
    public function uPost() {
        
        if(!isRolOK("admin")){
            PRG("Rol inadecuado, debes ser Administrador");
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
            $_SESSION['_msg']['uri'] = 'persona/d';
            redirect(base_url() . 'msg');
        }
    }
    
    public function d(){
        if(!isRolOK("admin")){
            PRG("Rol inadecuado, debes ser Administrador");
        } 
        $this->load->model('persona_model');
        $datos['personas'] = $this->persona_model->getPersonas();
        frame($this, 'persona/d', $datos);
    }
    
    public function dPost() {
        if(!isRolOK("admin")){
            PRG("Rol inadecuado, debes ser Administrador");
        } 
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('persona_model');
        $this->persona_model->borrarPersona($id);
        redirect(base_url().'persona/d');
    }
    
    public function borrarCuenta(){
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado");
        }
        $this->load->model('persona_model');
        $datos['personas'] = $this->persona_model->getPersonas();
        frame($this, 'persona/configPerfil', $datos);
    }
    
    public function borrarCuentaPost() {
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado, debes de ser un paciente");
        }
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('persona_model');
        $this->persona_model->borrarPersona($id);
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['persona'])) {
            unset($_SESSION['persona']);
        }
        session_destroy();
        redirect(base_url());
    }
    
    //CONFIGURACION PERFIL
    
    public function cambiarContraPersona() {
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado, debes de ser un paciente");
        }
        session_start();
        $this->load->model('persona_model');
        
        $id =  $_SESSION['persona']['id'];
        
        $pwd1 = $this->input->post('newpwd');
        $pwd2 = $this->input->post('new1pwd');
        
        if ($pwd1 == $pwd2) {
            $encryptedPassword = password_hash($this->input->post('newpwd'), PASSWORD_DEFAULT);
            
            if ($this->persona_model->changePassPerfil($id, $encryptedPassword)) {
                session_destroy();
                PRG('Has cambiado tu contraseña, intenta acceder','home','info');
                
               // echo '<h1 align="center">Has cambiado tu contraseña, para acceder pulsa <a href="' . base_url() . '">aquí</a></h1>';
               
            }
            else {
                PRG('Algo ha salido mal. Por favor revisa los datos o contacta con nosotros.');
                //echo '<h1 align="center">Algo ha salido mal. Por favor revisa los datos o contacta con nosotros.</h1>';
            }
        }
        else {
            PRG('Las contraseñas no coinciden. Inténtalo de nuevo');
            //echo '<h1 align="center">Las contraseñas no coinciden.Intentalo de nuevo</h1>';
        }
        
    }
    
    public function configPerfil() {
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado, debes de ser un paciente");
        }
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('persona_model');
        $this->load->model('pais_model');
        $datos['persona'] = $this->persona_model->getPersonaById($id);
        $datos['paises'] = $this->pais_model->getPaises();
        frame($this, 'persona/configPerfil', $datos);
    }
    
    public function configPerfilPost() {
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado, debes de ser un paciente");
        }
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
            PRG('Tus datos han sido actualizados correctamente', 'persona/configPerfil', 'info');
            //redirect(base_url() . 'persona/configPerfil');
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
   
   
//----------------------------------Finalizar tratamiento-------------------------------------------------------------   

    public function finalizarTratamiento() {
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado, debes de ser un paciente");
        }
        
        $id = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        $this->load->model('caso_model');
        $this->caso_model->cambiarEstado($id, "Finalizada");
        PRG('Tratamiento Finalizado', 'caso/rPacientes', 'danger');
        
        
    }
    
//----------------------------------Aceptar y rechazar nuevas fechas-------------------------------------------------------------
    
    public function aceptarNuevaFecha() {
        
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado, debes de ser un paciente");
        }
        
        $id = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        $idProfesional = isset($_POST['idProfesional']) ? $_POST['idProfesional'] : null;
        $idPaciente = isset($_POST['idPaciente']) ? $_POST['idPaciente'] : null;
        $fechaCita = isset($_POST['fechaHora']) ? $_POST['fechaHora'] : null;
        
        $this->load->model('caso_model');
        $this->load->model('cita_model');
        $this->load->model('profesional_model');
        $this->load->model('persona_model');
        $this->load->model('caso_model');
        
        $this->caso_model->cambiarEstado($id, "Aceptada");
        $this->caso_model->cambiarAlerta($id, false);
        $this->cita_model->crearCita($fechaCita,$this->profesional_model->getProfesionalById($idProfesional), $this->persona_model->getPersonaById($idPaciente), $this->caso_model->getCasoById($id), "Diagnóstico" );
        PRG('Propuesta Aceptada', 'caso/rPacientesSolicitudes', 'success');
        
      
    }
    
    public function rechazarNuevaFecha() {
        
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado, debes de ser un paciente");
        }
        
        $id = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        $this->load->model('caso_model');
        $this->caso_model->cambiarEstado($id, "Rechazada");
        $this->caso_model->cambiarAlerta($id, false);
        PRG('Propuesta Rechazada. Envie una nueva solicitud o pongase en contacto', 'caso/rPacientesSolicitudes', 'danger');
        
    }

    public function solicitarCambioCita() {
        
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado, debes de ser un paciente");
        }
        
        $idCita = isset($_GET['idCita']) ? $_GET['idCita'] : null;
        $idCaso = isset($_GET['idCaso']) ? $_GET['idCaso'] : null;
        
        $this->load->model('cita_model');
        $this->load->model('caso_model');
        
        $datos['cita'] = $this->cita_model->getCitaById($idCita);
        $datos['caso'] = $this->caso_model->getCasoById($idCaso);
        frame($this,'cita/cCambioCita', $datos);
    }


    
    
    public function solicitarCambioCitaPost() {
        
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado, debes de ser un paciente");
        }
        
        $this->load->model('cita_model');
        $this->load->model('caso_model');
        
        $idCita = isset($_POST['idCita']) ? $_POST['idCita'] : null;
        $fechahora = isset($_POST['fechahora']) ? $_POST['fechahora'] : null;
     
        try {
            $this->cita_model->solicitarCambioCita($idCita, $fechahora);
            PRG('Cambio de fecha solicitado', 'caso/rPacientes', 'success');
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['uri'] = 'persona/d';
            redirect(base_url() . 'msg');
        }
    }
    
    public function enviarStar() {
        
        if(!isRolOKPer("persona")){
            PRG("Rol inadecuado, debes de ser un paciente");
        }
        
        $idProfesional = isset($_POST['idProfesional']) ? $_POST['idProfesional'] : null;
        $idCaso = isset($_POST['idCaso']) ? $_POST['idCaso'] : null;
        $nuevaValoracion = isset($_POST['rate']) ? $_POST['rate'] : null;
        $this->load->model('profesional_model');
        $this->load->model('caso_model');
        $this->profesional_model->setPuntuacionTotalValoraciones($idProfesional, $nuevaValoracion);
        $this->caso_model->cambiarValorado($idCaso, true);
        
        PRG('Profesional Puntuado con éxito', 'caso/rPacientesSolicitudes', 'success');
        
    }
   
}
?>