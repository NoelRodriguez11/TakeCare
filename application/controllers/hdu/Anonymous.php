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
            $this->persona_model->crearPersona('admin', 'admin',null,null,null,null, null, null);
            
            $data['msg'] = "BD recreada";
        }
        frame($this, '_hdu/anonymous/initPost', $data);
    }
    

//========================================================================================================================
//OPERACIONES DE REGISTRO
    
    public function registrar()
    {
        $this->load->model('pais_model');
        $datos['paises'] = $this->pais_model->getPaises();
        frame($this, '_hdu/anonymous/registrar', $datos);
    }
    
    public function registrarPost()
    {
        $loginname = isset($_POST['loginname']) ? $_POST['loginname'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $altura = isset($_POST['altura']) ? $_POST['altura'] : null;
        $foto = isset($_FILES['foto']) ? ($_FILES['foto']) : null;
        $fechaNacimiento = isset($_POST['fechaNacimiento']) ? $_POST['fechaNacimiento'] : null;
        $pais = isset($_POST['pais']) ? $_POST['pais'] : null;
        
        try {
            $extFoto =null;
            if ($foto != null && $foto['error']==UPLOAD_ERR_OK) {
                $name_and_ext = explode('.', $foto['name']);
                $extFoto = $name_and_ext[sizeof($name_and_ext)-1];
               
            }
            
            
            $this->load->model('persona_model');
            $this->load->model('pais_model');
            
            
            if ($pais == -1) {throw new Exception("Pais no especificado");}
  
            //TRATAMIENTO PAIS
            try {
              $id = $this->persona_model->crearPersona($loginname, $password,$email ,$nombre, $altura, $fechaNacimiento, $this->pais_model->getPaisById($pais), $extFoto);
            }
            catch (Exception $e){
                throw new Exception("Usuario ya existente");    
            }
            
            if ($extFoto != null) {
                
                $file_name = 'persona' . '-'. $id . '.'. $extFoto;
                $carpeta = "assets/img/upload/persona/";
                
                copy($foto['tmp_name'], $carpeta . $file_name);
                  
                }
                 
            PRG('Usuario creado correctamente.', 'home', 'success');
        } catch (Exception $e) {
            PRG($e->getMessage(), '');
        }
        }
    
    
//=========================================================================================================================
//OPERACIONES DE LOGIN
    
    public function login()
    {
        frame($this, '_hdu/anonymous/login');
    }

    public function loginPost()
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $this->load->model('persona_model');
        try {
            $persona = $this->persona_model->verificarLogin($nombre, $password);
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['persona'] = $persona;
            redirect(base_url());
        } catch (Exception $e) {
            PRG($e->getMessage());
        }
    }
    
    

    public function recuperarPass()
    {
        frame($this, '_hdu/anonymous/recuperarPass', $data);
    }
    
    public function enviarMailRecuPass()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email|is_unique[persona.email]');
        
        $this->load->model('persona_model');
        
        $email = $_POST['email'];
        if ($this->persona_model->existEmail($email)) { // si ese mail existe en la base de datos
            
            $verification_key = md5(rand());
            $this->persona_model->guardarCodigo($email, $verification_key);
                    
            
            $from = "takecaretfg@gmail.com";
            $to = $email;
            $subject = "reset Password";
            $message = "<p>Para hacer reset por favor haz clic en <a href='" . base_url() . "hdu/anonymous/resetPass/" . $verification_key . "/" . $email . "'>Cambiar contraseña</a>.</p>
                        <p>Gracias!!!</p>";
      
            
            $headers = "From:" . $from;
            mail($to,$subject,$message, $headers);
            echo "The email message was sent.";
            echo $message;
            
        } else {
            
            $this->session->set_flashdata('messageRegister', 'Error en la comprobación de email');
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
       
       $token = $this->input->post('token');
       $email = $this->input->post('email');
       
//        echo $token . "<br>";
//        echo $email;
       
       $encryptedPassword = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
      
        
        if ($this->persona_model->changePass($token, $email, $encryptedPassword)) {
            
            echo '<h1 align="center">Has cambiado tu contraseña, para acceder pulsa <a href="' . base_url() . '">aquí</a></h1>';
            
        } else {
            
            echo '<h1 align="center">Algo ha salido mal. Por favor revisa los datos o contacta con nosotros.</h1>';
        }
        

        
        
       // redirect(base_url());
        
    }
    
    public function logout() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['persona'])) {
            unset($_SESSION['persona']);
        }
        session_destroy();
        redirect(base_url());
        
    }
}


?>