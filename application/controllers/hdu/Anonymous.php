<?php


class Anonymous extends CI_Controller
{

    public function init()
    {
//         if(!isRolOK("admin")){
//             PRG("Rol inadecuado. Debes ser Admin");
//         }
        
        $data['vacia'] = true;
        $this->load->model('persona_model');
        if (sizeof(R::inspect()) != 0) {
            $data['vacia'] = false;
        }
        frame($this, '_hdu/anonymous/init', $data);
    }

    public function initPost()
    {
//         if(!isRolOK("admin")){
//             PRG("Rol inadecuado");
//         }
        
        $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;
        $data['msg'] = 'Password incorrecta';
        if ($pwd == null || password_verify($pwd, password_hash("admin", PASSWORD_DEFAULT))) {
            R::nuke();
            $this->load->model('persona_model');
            $this->load->model('profesional_model');
            $this->load->model('pais_model');
            $this->load->model('especialidad_model');
            $this->load->model('sintoma_model');
            
            //Admin de pacientes y de profesionales
            $this->persona_model->crearPersona('nombre', 'apellido1',"apellido2","65433890Y","1234",null, null, null, null, "ejemplo@gmail.com", "Hombre", "A+", "España", "4-9-1994", null);
            $this->persona_model->crearPersona('admin', 'admin',"admin","admin","admin",null, null, null, null, "admin@gmail.com", "Hombre", "A+", "España", "4-9-1994", null);
            $this->persona_model->crearPersona('Noel','Rodríguez',"Taboada","06597331Q","noel","Avenida Somorrostro 185 1C", "Madrid", 636082233, null, "noel@gmail.com", "Hombre", "0+", "España", "10-3-1998", null);
            
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
            
            //Creación de especialidades
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
            
            //Creación de Sintomas
            $this->sintoma_model->crearSintoma('Absceso');
            $this->sintoma_model->crearSintoma('Acidez de estómago');
            $this->sintoma_model->crearSintoma('Aftas bucales');
            $this->sintoma_model->crearSintoma('Alopecía Areata');
            $this->sintoma_model->crearSintoma('Anhidrosis');
            $this->sintoma_model->crearSintoma('Anisocoria');
            $this->sintoma_model->crearSintoma('Ascitis');
            $this->sintoma_model->crearSintoma('Asma por ejercicio');
            $this->sintoma_model->crearSintoma('Atragantamiento');
            $this->sintoma_model->crearSintoma('Aumento del apetito');
            $this->sintoma_model->crearSintoma('Cansancio');
            $this->sintoma_model->crearSintoma('Chalación');
            $this->sintoma_model->crearSintoma('Cistitis');
            $this->sintoma_model->crearSintoma('Cloasma');
            $this->sintoma_model->crearSintoma('Daltonismo');
            $this->sintoma_model->crearSintoma('Dedo en martillo');           
            $this->sintoma_model->crearSintoma('Dermatitis de las manos');
            $this->sintoma_model->crearSintoma('Dislocación');
            $this->sintoma_model->crearSintoma('Dismenorrea');
            $this->sintoma_model->crearSintoma('Dismenorrea primaria y secundaria');
            $this->sintoma_model->crearSintoma('Disminución del apetito');
            $this->sintoma_model->crearSintoma('Dispepsia');
            $this->sintoma_model->crearSintoma('Dolor abdominal');
            $this->sintoma_model->crearSintoma('Dolor de cadera');
            $this->sintoma_model->crearSintoma('Dolor de garganta');
            $this->sintoma_model->crearSintoma('Dolor de las piernas');
            $this->sintoma_model->crearSintoma('Dolor de mamas');
            $this->sintoma_model->crearSintoma('Dolor de oído');            
            $this->sintoma_model->crearSintoma('Dolor de ojos');
            $this->sintoma_model->crearSintoma('Dolor de pies');
            $this->sintoma_model->crearSintoma('Edema');
            $this->sintoma_model->crearSintoma('Encopresis');
            $this->sintoma_model->crearSintoma('Epilepsia');
            $this->sintoma_model->crearSintoma('Estrés');
            $this->sintoma_model->crearSintoma('Exoftalmos');
            $this->sintoma_model->crearSintoma('Gases intestinales');
            $this->sintoma_model->crearSintoma('Gastritis');
            $this->sintoma_model->crearSintoma('Ginecomastia');
            $this->sintoma_model->crearSintoma('Halitosis');
            $this->sintoma_model->crearSintoma('Hipocondría');
            $this->sintoma_model->crearSintoma('Hipotermia');
            $this->sintoma_model->crearSintoma('Ictericia');
            $this->sintoma_model->crearSintoma('Inflamación del párpado');
            $this->sintoma_model->crearSintoma('Labios agrietados');           
            $this->sintoma_model->crearSintoma('Mareo');
            $this->sintoma_model->crearSintoma('Mareo a causa del movimiento');
            $this->sintoma_model->crearSintoma('Mordese las uñas');
            $this->sintoma_model->crearSintoma('Neumotórax');
            $this->sintoma_model->crearSintoma('Neuralgia');
            $this->sintoma_model->crearSintoma('Neuralgia del trigémino');
            $this->sintoma_model->crearSintoma('Nistagmo');
            $this->sintoma_model->crearSintoma('Ojos rojos');
            $this->sintoma_model->crearSintoma('Ojos secos');
            $this->sintoma_model->crearSintoma('Orzuelo');
            $this->sintoma_model->crearSintoma('Palpitaciones');
            $this->sintoma_model->crearSintoma('Pérdida de olfato');
            $this->sintoma_model->crearSintoma('Pérdida de pelo');
            $this->sintoma_model->crearSintoma('Pérdida de peso');
            $this->sintoma_model->crearSintoma('Picaduras de insectos');
            $this->sintoma_model->crearSintoma('Pie cavo');            
            $this->sintoma_model->crearSintoma('Pie plano');
            $this->sintoma_model->crearSintoma('Presbicia');
            $this->sintoma_model->crearSintoma('Prostatitis');
            $this->sintoma_model->crearSintoma('Acidez Gástrica');
            $this->sintoma_model->crearSintoma('Queloide');
            $this->sintoma_model->crearSintoma('Rosácea');
            $this->sintoma_model->crearSintoma('Rotura de tímpano');
            $this->sintoma_model->crearSintoma('Sangre en el semen');
            $this->sintoma_model->crearSintoma('Sangre en las heces');
            $this->sintoma_model->crearSintoma('Sarro en los dientes');
            $this->sintoma_model->crearSintoma('Seborrea');
            $this->sintoma_model->crearSintoma('Sed excesiva');
            $this->sintoma_model->crearSintoma('Sialorrea');
            $this->sintoma_model->crearSintoma('Síndrome de Gilbert');
            $this->sintoma_model->crearSintoma('Tapón de oído');
            $this->sintoma_model->crearSintoma('Telangiectasias');           
            $this->sintoma_model->crearSintoma('Temblor hereditario esencial');
            $this->sintoma_model->crearSintoma('Temblores');
            $this->sintoma_model->crearSintoma('Temblores en las manos');
            $this->sintoma_model->crearSintoma('Tenesmo');
            $this->sintoma_model->crearSintoma('Tic facial');
            $this->sintoma_model->crearSintoma('Tortícolis');
            $this->sintoma_model->crearSintoma('Tos crónica');
            $this->sintoma_model->crearSintoma('Tratamiento de la epilepsia');
            $this->sintoma_model->crearSintoma('Tratamiento de las picaduras de insectos');
            $this->sintoma_model->crearSintoma('Uña encarnada');
            $this->sintoma_model->crearSintoma('Xerostomía');

            
                              
            //Profesionales Hard-Coded
            $this->profesional_model->crearProfesional('Antonio', 'Garcia', "Marquez","33344455Y","1234","Plaza castilla-leon, 7, 1-B", "Conde de Casal", "Madrid", 576483934, "emailAntonio@gmail.com","Hombre" , $this->pais_model->getPaisById(5), "4/9/1994", $this->especialidad_model->getEspecialidadById(1),"Autonomo/a","Tarde", "17:00-21:00", null);
            $this->profesional_model->crearProfesional('Leire', 'Rivera', "Del Rio","76544455Y","1234","Calle robledal 8", "Coslada", "Madrid", 495394831, "emailLeire@gmail.com","Mujer", $this->pais_model->getPaisById(6), "4/9/1994", $this->especialidad_model->getEspecialidadById(1),"Clinica Las lagunas","Mañana y Tarde","09:00-18:00", null);
            $this->profesional_model->crearProfesional('Daniel', 'Martinez', "Cabrales","93567455Y","1232","Calle Capitan America, 32", "Torrejon de Ardoz", "Madrid", 485337564, "emailDaniel@gmail.com","Hombre" , $this->pais_model->getPaisById(4),"4/9/1994", $this->especialidad_model->getEspecialidadById(2),"Autonomo/a","Tarde","15:00-21:30", null);
            $this->profesional_model->crearProfesional('Alberto', 'Pascual', "Jimenez", "34256542V","1233", "Calle de Segovia, 21", "Madrid", "Madrid", 663283456, "emailAlberto@gmail.com", "Hombre", $this->pais_model->getPaisById(8), "29/3/1998", $this->especialidad_model->getEspecialidadById(3),"Garrigues médicos","Mañana","08:00-14:00", null);
            $this->profesional_model->crearProfesional('Raúl', 'Camargo', "Torremocha", "74757596B", "Password1", "Calle de la Madera, 1", "Madrid", "Madrid", 776534345, "emailRaul@gmail.com", "Hombre", $this->pais_model->getPaisById(8), "16/8/1990", $this->especialidad_model->getEspecialidadById(4),"Autonomo/a","Mañana","10:00-14:00", null);
            $this->profesional_model->crearProfesional('Antonio', 'Paterna', "Benito", "67859035A", "Password2", "Calle Izelaieta, 34", "Bilbao", "Vizcaya", 636782345, "emailAntonioP@gmail.com", "Hombre", $this->pais_model->getPaisById(8), "16/9/1992", $this->especialidad_model->getEspecialidadById(5),"Dermatólogos Paterna","Tarde","16:00-20:00", null);
            $this->profesional_model->crearProfesional('Alejandro', 'Pérez', "Yunqueras", "75486359G", "Password3", "Calle de pez, 1", "Madrid", "Madrid", 943586124, "emailAlejandro@gmail.com", "Hombre", $this->pais_model->getPaisById(8), "10/1/1975", $this->especialidad_model->getEspecialidadById(6),"Parlem Junts","Tarde","16:00-23:00", null);
            $this->profesional_model->crearProfesional('Iván', 'Da Conçeicao', "Martín", "31486396H", "Password4", "Calle de Piñor, 38", "Cangas", "Pontevedra", 636487569, "emailIvan@gmail.com", "Hombre", $this->pais_model->getPaisById(8), "2/7/1989", $this->especialidad_model->getEspecialidadById(7),"Autonomo/a","Mañana","06:00-11:00", null);
            $this->profesional_model->crearProfesional('José Antonio', 'González', "Mestalla", "06463745M", "Password5", "Calle Pintor Rosales, 34", "Madrid", "Madrid", 843657414, "emailJose@gmail.com", "Hombre", $this->pais_model->getPaisById(8), "24/12/1990", $this->especialidad_model->getEspecialidadById(8),"Autonomo/a","Mañana y Tarde","08:00-17:00", null);
            $this->profesional_model->crearProfesional('Jorge', 'Mayo', "Bencomo", "68842379J", "Password6", "Rua Augusta, 25", "Lisboa", null, 943854721, "emailJorge@gmail.com", "Hombre", $this->pais_model->getPaisById(22), "30/5/1982", $this->especialidad_model->getEspecialidadById(9),"Asisu","Mañana","07:00-11:00", null);
            $this->profesional_model->crearProfesional('Ignacio', 'Rojo', "Martínez", "53781965P", "Password7", "Calle de caballero de Gracia, 30", "Madrid", "Madrid", 643172098, "emailIgnacio@gmail.com", "Hombre", $this->pais_model->getPaisById(8), "20/2/1985", $this->especialidad_model->getEspecialidadById(10),"Autonomo/a","Mañana","06:00-10:00", null);
            
            
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
            
			$from = "no-reply@takecaredaw.space";
			
			$to_email = $email;
			$subject = 'Reset Password';
			
			$message = '<html><body>';
            $message .='<p style="text-align:center; color:#9A0606; font-size: x-large;font-variant: small-caps; padding: 10px; vertical-align: middle;">Para hacer reset por favor haz clic en el siguiente enlace <a href="' . base_url() . 'hdu/anonymous/resetPass/' . $verification_key . '/' . $email . '">Cambiar contraseña</a></p>';
            $message .='<p style="text-align: center;color: #9A0606;font-size: x-large; font-variant: small-caps;padding: 10px; vertical-align: middle;">Gracias!!!</p>';
            $message .='<img src="'.base_url().'/assets/img/iconotc.png" width="50px" height="50" alt="takecare Logo">';
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
            
            
           $from = "no-reply@takecaredaw.space";
			
			$to_email = $email;
			$subject = 'Reset Password';
			
			$message = '<html><body>';
            $message .='<p style="text-align:center; color:#9A0606; font-size: x-large;font-variant: small-caps; padding: 10px; vertical-align: middle;">Para hacer reset por favor haz clic en el siguiente enlace <a href="' . base_url() . 'hdu/anonymous/resetPassPro/' . $verification_key . '/' . $email . '">Cambiar contraseña</a></p>';
            $message .='<p style="text-align: center;color: #9A0606;font-size: x-large; font-variant: small-caps;padding: 10px; vertical-align: middle;">Gracias!!!</p>';
            $message .='<img src="'.base_url().'/assets/img/iconotc.png" width="50px" height="50" alt="takecare Logo">';
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
        
       
        
    }
    
    
  
    
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