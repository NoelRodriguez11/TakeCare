<?php


class Anonymous extends CI_Controller
{

    public function init()
    {
        $data['vacia'] = true;
        $this->load->model('persona_model');
        if (sizeof(R::inspect()) != 0) {
            $data['vacia'] = false;
        }
        frame($this, '_hdu/anonymous/init', $data);
    }

    public function initPost()
    {
        $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;
        $data['msg'] = 'Password incorrecta';
        if ($pwd == null || password_verify($pwd, password_hash("admin", PASSWORD_DEFAULT))) {
            R::nuke();
            $this->load->model('persona_model');
            $this->load->model('profesional_model');
            $this->load->model('pais_model');
            $this->load->model('especialidad_model');
            
            //Admin de pacientes y de profesionales
            $this->persona_model->crearPersona('nombre', 'apellido1',"apellido2","65433890Y","1234",null, null, null, null, "ejemplo@gmail.com", "Hombre", "A+", "España", "4-9-1994", null);
            $this->persona_model->crearPersona('admin', 'admin',"admin","admin","admin",null, null, null, null, "admin@gmail.com", "Hombre", "A+", "España", "4-9-1994", null);
            //Creación de paises al inicializar la base de datosdatos
            $this->pais_model->crearPais('Alemania');
            $this->pais_model->crearPais('Austria');
            $this->pais_model->crearPais('Chequía');
            $this->pais_model->crearPais('Croacía');
            $this->pais_model->crearPais('Dinamarca');
            $this->pais_model->crearPais('Eslovaquía');
            $this->pais_model->crearPais('Eslovenía');
            $this->pais_model->crearPais('España');
            $this->pais_model->crearPais('Estonia');
            $this->pais_model->crearPais('Finlandia');
            $this->pais_model->crearPais('Francia');
            $this->pais_model->crearPais('Grecía');
            $this->pais_model->crearPais('Hungría');
            $this->pais_model->crearPais('Irlanda');
            $this->pais_model->crearPais('Italia');
            $this->pais_model->crearPais('Letonia');
            $this->pais_model->crearPais('Lituania');
            $this->pais_model->crearPais('Luxemburgo');
            $this->pais_model->crearPais('Malta');
            $this->pais_model->crearPais('Paises Bajos');
            $this->pais_model->crearPais('Polonia');
            $this->pais_model->crearPais('Portugal');
            $this->pais_model->crearPais('Rumanía');
            
            //Creación de modalidades
            $this->especialidad_model->crearEspecialidad('Fisioterapia');
            $this->especialidad_model->crearEspecialidad('Traumatología');
            $this->especialidad_model->crearEspecialidad('Psicologia');
            $this->especialidad_model->crearEspecialidad('Pedagogia');
            $this->especialidad_model->crearEspecialidad('Dermatología');
            $this->especialidad_model->crearEspecialidad('Logopedia');
            $this->especialidad_model->crearEspecialidad('Oftalmología');
            $this->especialidad_model->crearEspecialidad('Optometría');
            $this->especialidad_model->crearEspecialidad('Otorrinolaringologia');
            $this->especialidad_model->crearEspecialidad('Otología');
            
            //Profesionales Hard-Coded
            $this->profesional_model->crearProfesional('Antonio', 'Garcia', "Marquez","33344455Y","1234","Plaza castilla-leon, 7, 1-B", "Conde de Casal", "Madrid", 576483934, "emailAntonio@gmail.com","Hombre" , $this->pais_model->getPaisById(5), "4/9/1994", $this->especialidad_model->getEspecialidadById(1),"Autonomo/a","Tarde", "17:00-21:00", null);
            $this->profesional_model->crearProfesional('Leire', 'Rivera', "Del Rio","76544455Y","1234","Calle robledal 8", "Coslada", "Madrid", 495394831, "emailLeire@gmail.com","Mujer", $this->pais_model->getPaisById(6), "4/9/1994", $this->especialidad_model->getEspecialidadById(1),"Clinica Las lagunas","Mañana y Tarde","09:00-18:00", null);
            $this->profesional_model->crearProfesional('Daniel', 'Martinez', "Cabrales","93567455Y","1232","Calle Capitan America, 32", "Torrejon de Ardoz", "Madrid", 485337564, "emailDaniel@gmail.com","Hombre" , $this->pais_model->getPaisById(4),"4/9/1994", $this->especialidad_model->getEspecialidadById(2),"Autonomo/a","Tarde","15:00-21:30", null);
            $this->profesional_model->crearProfesional('Alberto', 'Pascual', "Jimenez", "34256542V","1233", "Calle de Segovia, 21", "Madrid", "Madrid", 663283456, "emailAlberto@gmail.com", "Hombre", $this->pais_model->getPaisById(8), "29/3/1998", $this->especialidad_model->getEspecialidadById(3),"Garrigues médicos","Mañana","08:00-14:00", null);
            $this->profesional_model->crearProfesional('Raul', 'Camargo', "Torremocha", "74757596B", "1233", "Calle de la Madera, 1", "Madrid", "Madrid", 776534345, "emailRaul@gmail.com", "Hombre", $this->pais_model->getPaisById(7), "16/8/1995", $this->especialidad_model->getEspecialidadById(4),"Autonomo/a","Mañana","10:00-14:00", null);
            
            
            $data['msg'] = "BD recreada";
        }
        frame($this, '_hdu/anonymous/initPost', $data);
    }
    

//========================================================================================================================
//OPERACIONES DE REGISTRO
    
    public function registrar()
    {
        $this->load->model('pais_model');
        $this->load->model('especialidad_model');
        $datos['paises'] = $this->pais_model->getPaises();
        $datos['especialidades'] = $this->especialidad_model->getEspecialidades();
        frame($this, '_hdu/anonymous/registrar', $datos);
    }
    
    public function registrarPost()
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $primerNombre= isset($_POST['primerApellido']) ? $_POST['primerApellido'] : null;
        $segundoNombre = isset($_POST['segundoApellido']) ? $_POST['segundoApellido'] : null;
        $dni = isset($_POST['dni']) ? $_POST['dni'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $genero = isset($_POST['genero']) ? $_POST['genero'] : null;
        $grupoSanguineo = isset($_POST['grupoSanguineo']) ? $_POST['grupoSanguineo'] : null;
        $foto = isset($_FILES['foto']) ? ($_FILES['foto']) : null;
        $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : null;
        $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : null;
        $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : null;
        $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
        $fechaNacimiento = isset($_POST['fechaNacimiento']) ? $_POST['fechaNacimiento'] : null;
        $pais = isset($_POST['pais']) ? $_POST['pais'] : null;
        $especilidad = isset($_POST['especialidad']) ? $_POST['especialidad'] : null;
        $clinica = isset($_POST['clinica']) ? $_POST['clinica'] : null;
        $turno = isset($_POST['turno']) ? $_POST['turno'] : null;
        $franja = isset($_POST['franja']) ? $_POST['franja'] : null;

        
        if($clinica == null){
            $clinica = "Autonomo/a";
        }
        
        
        $tipoUsuario = isset($_POST['tipoUsuario']) ? $_POST['tipoUsuario'] : null;
        
        try {
            $extFoto =null;
            if ($foto != null && $foto['error']==UPLOAD_ERR_OK) {
                $name_and_ext = explode('.', $foto['name']);
                $extFoto = $name_and_ext[sizeof($name_and_ext)-1];
               
            }
            
            
            $this->load->model('persona_model');
            $this->load->model('profesional_model');
            $this->load->model('pais_model');
            $this->load->model('especialidad_model');
            
            
            if ($pais == -1) {throw new Exception("Pais no especificado");}
  
     
            try {
                if ($tipoUsuario == 1) {
                    $id = $this->persona_model->crearPersona($nombre, $primerNombre, $segundoNombre ,$dni,$password, $direccion, $ciudad, $provincia, $telefono, $email, $genero, $grupoSanguineo, $this->pais_model->getPaisById($pais),$fechaNacimiento, $extFoto);  
            
                }
                else {
                
                    $id = $this->profesional_model->crearProfesional($nombre, $primerNombre, $segundoNombre ,$dni,$password, $direccion, $ciudad, $provincia, $telefono, $email, $genero, $this->pais_model->getPaisById($pais),$fechaNacimiento, $this->especialidad_model->getEspecialidadById($especilidad),$clinica,$turno,$franja, $extFoto);
                   
                }}
            catch (Exception $e){
                throw new Exception("Usuario ya existente");    
            }
            
            if ($extFoto != null && $tipoUsuario == 1) {
                
                $file_name = 'persona' . $id . '.'. $extFoto;
                $carpeta = "assets/img/upload/persona/";
                
                copy($foto['tmp_name'], $carpeta . $file_name);
                }
                
            else if ($extFoto != null && $tipoUsuario == 2){
                
                $file_name = 'pro' . $id . '.'. $extFoto;
                $carpeta = "assets/img/upload/profesional/";
                
                copy($foto['tmp_name'], $carpeta . $file_name);
            }
                 
            PRG('Perfil creado correctamente.', 'home', 'success');
            
        } catch (Exception $e) {
            PRG($e->getMessage(), '');
        }
        }
        
        
//OPERACIONES DE LOGIN
    
    public function login()
    {
        frame($this, '_hdu/anonymous/login');
    }

    public function loginPost()
    {
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $this->load->model('persona_model');
        $this->load->model('profesional_model');
        
        if ($this->persona_model->getPersonaByEmail($email) != null){
            try {
                $persona = $this->persona_model->verificarLogin($email, $password);
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['persona'] = $persona;
                redirect(base_url());
            } catch (Exception $e) {
                PRG($e->getMessage());
            }
            }
            
        else {
            try {
            $profesional = $this->profesional_model->verificarLogin($email, $password);
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['profesional'] = $profesional;
            redirect(base_url());
           } catch (Exception $e) {
               PRG($e->getMessage());
           }
        }
        
             
    }
    
    
    //=========================================================================================================================
    //OPERACIONES DE LOGIN
    public function recuperarPass()
    {
        frame($this, '_hdu/anonymous/recuperarPass', $data);
    }
    
    public function enviarMailRecuPass()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email|is_unique[persona.email]');
        
        $this->load->model('persona_model');
        $this->load->model('profesional_model');
        
        $email = $_POST['email'];
		

        if ($this->persona_model->getPersonaByEmail($email) != null){
            
            $verification_key = md5(rand());
            $this->persona_model->guardarCodigo($email, $verification_key);
            
			$from = "no-reply@takecaretfg.com";
			
			$to_email = $email;
			$subject = 'Reset Password';
			
			$message = '<html><body>';
            $message .='<p style="text-align:center; color:#9A0606; font-size: x-large;font-variant: small-caps; padding: 10px; vertical-align: middle;">Para hacer reset por favor haz clic en el siguiente enlace <a href="' . base_url() . 'hdu/anonymous/resetPass/' . $verification_key . '/' . $email . '">Cambiar contraseña</a></p>';
            $message .='<p style="text-align: center;color: #9A0606;font-size: x-large; font-variant: small-caps;padding: 10px; vertical-align: middle;">Gracias!!!</p>';
            $message .='<img src="https://takecare-proyecto4.000webhostapp.com/assets/img/iconotc.png" width="50px" height="50" alt="takecare Logo">';
            $message .= '</body></html>';
			
			 $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= "From:" . $from;
			mail($to_email,$subject,$message,$headers);
			
            PRG('Se te ha enviado un mensaje, para recuperar tu contraseña, por favor, revisa tu bandeja de entrada y si no lo encuentas ve a spam.', 'home', 'info');
            //frame($this, '_hdu/anonymous/mensajeEnviado');
            //echo "Se te ha enviado un mensaje, para recuperar tu contraseña, por favor, revisa tu correo electrónico.";
            //echo $message;
        }
       
        else if ($this->profesional_model->getProfesionalByEmail($email) != null) {
            
            $verification_key = md5(rand());
            $this->profesional_model->guardarCodigo($email, $verification_key);
            
            
           $from = "no-reply@takecaretfg.com";
			
			$to_email = $email;
			$subject = 'Reset Password';
			
			$message = '<html><body>';
            $message .='<p style="text-align:center; color:#9A0606; font-size: x-large;font-variant: small-caps; padding: 10px; vertical-align: middle;">Para hacer reset por favor haz clic en el siguiente enlace <a href="' . base_url() . 'hdu/anonymous/resetPassPro/' . $verification_key . '/' . $email . '">Cambiar contraseña</a></p>';
            $message .='<p style="text-align: center;color: #9A0606;font-size: x-large; font-variant: small-caps;padding: 10px; vertical-align: middle;">Gracias!!!</p>';
            $message .='<img src="https://takecare-proyecto4.000webhostapp.com/assets/img/iconotc.png" width="50px" height="50" alt="takecare Logo">';
            $message .= '</body></html>';
			
			 $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= "From:" . $from;
			mail($to_email,$subject,$message,$headers);
			
            PRG('Se te ha enviado un mensaje, para recuperar tu contraseña, por favor, revisa tu bandeja de entrada y si no lo encuentas ve a spam.', 'home', 'info');
            //frame($this, '_hdu/anonymous/mensajeEnviado');
            //echo "Se te ha enviado un mensaje, para recuperar tu contraseña, por favor, revisa tu correo electrónico.";
            //echo $message;
        }
        
        else {
            //$this->session->set_flashdata('messageRegister', 'Error en la comprobación de email');
			PRG('Error en la comprobación de email', 'home', 'error');
            redirect(base_url());
        }
    }
    
    public function resetPass()
    {
        
        $this->load->model('persona_model');
        
        $token = $this->uri->segment(4);
        $email = $this->uri->segment(5);
        
        $data['token']=$token;
        $data['email']=$email;
        
//         echo $token;
//         echo $email; 
        
        if($this->persona_model->comprobarCodigo($token, $email)) {
            frame($this, '_hdu/anonymous/resetPass', $data);
        }
       
    }
    
    
    
   public function cambiarContra() {
       
       $this->load->model('persona_model');
       $this->load->model('profesional_model');
       
       $token = $this->input->post('token');
       $email = $this->input->post('email');
       
       
       $email = $_POST['email'];
       $encryptedPassword = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
       
       if ($this->persona_model->getPersonaByEmail($email) != null){
           if ($this->persona_model->changePass($token, $email, $encryptedPassword)) {
               PRG('Has cambiado tu contraseña, intenta acceder','home','info');
               //echo '<h1 align="center">Has cambiado tu contraseña, para acceder pulsa <a href="' . base_url() . '">aquí</a></h1>';
               
           } else {
               PRG('Algo ha salido mal. Por favor revisa los datos o contacta con nosotros.');
               //echo '<h1 align="center">Algo ha salido mal. Por favor revisa los datos o contacta con nosotros.</h1>';
           }
          
    
       }
       
       else if ($this->profesional_model->getProfesionalByEmail($email) != null) {
           if ($this->profesional_model->changePass($token, $email, $encryptedPassword)) {
               
               echo '<h1 align="center">Has cambiado tu contraseña, para acceder pulsa <a href="' . base_url() . '">aquí</a></h1>';
               
           } else {
               
               echo '<h1 align="center">Algo ha salido mal. Por favor revisa los datos o contacta con nosotros.</h1>';
           }
       }
        
    }
    
    //==============Forgot PROFESIONAL======================//
    public function recuperarPassPro()
    {
        frame($this, '_hdu/anonymous/recuperarPassPro', $data);
    }
    
    public function enviarMailRecuPassPro()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email|is_unique[profesional.email]');
        
        $this->load->model('profesional_model');
        
        $email = $_POST['email'];
        if ($this->profesional_model->existEmail($email)) { // si ese mail existe en la base de datos
            
            $verification_key = md5(rand());
            $this->profesional_model->guardarCodigo($email, $verification_key);
            
            
            $from = "takecaretfg@gmail.com";
            $to = $email;
            $subject = "Reset Password";
            
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= "From:" . $from;
            
            
            $message = '<html><body>';
            $message .='<p style="text-align:center; color:#9A0606; font-size: x-large;font-variant: small-caps; padding: 10px; vertical-align: middle;">Para hacer reset por favor haz clic en el siguiente enlace <a href="' . base_url() . 'hdu/anonymous/resetPass/' . $verification_key . '/' . $email . '">Cambiar contraseña</a></p>';
            $message .='<p style="text-align: center;color: #9A0606;font-size: x-large; font-variant: small-caps;padding: 10px; vertical-align: middle;">Gracias!!!</p>';
            $message .='<img src="https://takecare-proyecto4.000webhostapp.com/assets/img/iconotc.png" width="50px" height="50" alt="takecare Logo">';
            $message .= '</body></html>';
            
            
            mail($to,$subject,$message, $headers);
            PRG('Se te ha enviado un mensaje, para recuperar tu contraseña, por favor, revisa tu bandeja de entrada y si no lo encuentas ve a spam.', 'home', 'info');
            //frame($this, '_hdu/anonymous/mensajeEnviado');
            //echo "Se te ha enviado un mensaje, para recuperar tu contraseña, por favor, revisa tu correo electrónico.";
            //echo $message;
            
        } else {
            
            $this->session->set_flashdata('messageRegister', 'Error en la comprobación de email');
            redirect(base_url());
        }
    }
    
    public function resetPassPro()
    {
        
        $this->load->model('profesional_model');
        
        $token = $this->uri->segment(4);
        $email = $this->uri->segment(5);
        
        $data['token']=$token;
        $data['email']=$email;
        
        //         echo $token;
        //         echo $email;
        
        if($this->profesional_model->comprobarCodigo($token, $email)) {
            frame($this, '_hdu/anonymous/resetPass', $data);
        }
        
    }
    
    
    
    public function cambiarContraPro() {
        
        $this->load->model('profesional_model');
        
        $token = $this->input->post('token');
        $email = $this->input->post('email');
        
        //        echo $token . "<br>";
        //        echo $email;
        
        $encryptedPassword = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        
        
        if ($this->profesional_model->changePass($token, $email, $encryptedPassword)) {
            
            echo '<h1 align="center">Has cambiado tu contraseña, para acceder pulsa <a href="' . base_url() . '">aquí</a></h1>';
            
        } else {
            
            echo '<h1 align="center">Algo ha salido mal. Por favor revisa los datos o contacta con nosotros.</h1>';
        }
        
        
        
        
        // redirect(base_url());
        
    }
    
    
   
    
//     public function cambiarContraPersona() {
//         session_start();
//         $this->load->model('persona_model');
        
//         $id =  $_SESSION['persona']['id'];
        
//         $pwd1 = $this->input->post('newpwd');
//         $pwd2 = $this->input->post('new1pwd');
        
//         if ($pwd1 == $pwd2) {
//             $encryptedPassword = password_hash($this->input->post('newpwd'), PASSWORD_DEFAULT);
            
//             if ($this->persona_model->changePassPerfil($id, $encryptedPassword)) {
                
//                 echo '<h1 align="center">Has cambiado tu contraseña, para acceder pulsa <a href="' . base_url() . '">aquí</a></h1>';
//                 session_destroy();
//             }
//             else {
                
//                 echo '<h1 align="center">Algo ha salido mal. Por favor revisa los datos o contacta con nosotros.</h1>';
//             }
//         }
        
//         else {
//             echo '<h1 align="center">Las contraseñas no coinciden.Intentalo de nuevo</h1>';
//         }
        
        
//     }
  
//     public function configPerfil() {  
//         $id = isset($_GET['id']) ? $_GET['id'] : null;
//         $this->load->model('persona_model');
//         $this->load->model('pais_model');
//         $datos['persona'] = $this->persona_model->getPersonaById($id);
//         $datos['paises'] = $this->pais_model->getPaises();
//         frame($this, '_hdu/anonymous/configPerfil', $datos);
//     }
    
    public function logout() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['persona'])) {
            unset($_SESSION['persona']);
        }
        if (isset($_SESSION['profesional'])) {
            unset($_SESSION['profesional']);
        }
        session_destroy();
        redirect(base_url());
        
    }
}
?>