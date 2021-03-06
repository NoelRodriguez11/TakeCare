<?php

class Persona_model extends CI_Model
{
  
    public function getPersonaById($id)
    {
        return R::load('persona', $id);
    }

    public function count()
    {
        return R::count('persona');
    }

    public function getPersonas()
    {
        return R::findAll('persona');
    }
    
    public function getPersonaByEmail($email){
        return R::findOne('persona', 'email=?', [$email]);
    }
    

    public function crearPersona($nombre, $primerApellido,$segundoApellido ,$dni, $password, $direccion, $ciudad, $provincia, $telefono, $email, $genero, $grupoSanguineo, $pais,$fechaNacimiento, $extFoto)
    {
        if ( $email == null || $password == null) {
            throw new Exception("email o password nulos");
        }
        
        if ( R::findOne('profesional', 'email=?', [$email]) != null && R::findOne('profesional', 'dni=?', [$dni]) != null) {
            throw new Exception("email o dni duplicado");
        }
        
        //CREACION DE PERSONA
        $persona = R::dispense('persona');
        $persona->nombre = $nombre;
        $persona->primerApellido = $primerApellido;
        $persona->segundoApellido = $segundoApellido;
        $persona->password = password_hash($password, PASSWORD_BCRYPT);

        $persona->dni = $dni;
        $persona->direccion = $direccion;
        $persona->ciudad = $ciudad;
        $persona->provincia = $provincia;
        $persona->fechaNacimiento = $fechaNacimiento;
        $persona->extension_Foto= $extFoto;
        $persona->genero= $genero;
        $persona->grupoSanguineo = $grupoSanguineo;
        $persona->email= $email;
        $persona->telefono= $telefono;
        $persona->cod_recuperacion = null;
		$persona->caducidad_codigo = null;
        if ($pais!=null) $persona->nace= $pais;
       
        
        return R::store($persona);
        
    }
    
    
  

    public function verificarLogin($email, $pwd)
    {
        $usuario = R::findOne('persona', 'email=?', [$email]);
        
        if ($usuario == null) {
            throw new Exception("email o contraseña no correctas");
        }
        if (! password_verify($pwd, $usuario->password)) {
            throw new Exception("email o contraseña no correctas");
        }
        return $usuario;
    }
    
    public function borrarPersona($id) {
        R::trash(R::load('persona',$id));
    }
    
    public function existEmail($email) { 
        
        $usuario = R::findOne('persona', 'email=?', [$email]);
        
        if ($usuario == null) {
           // throw new Exception("Email no encontrado");
            PRG("Email no encontrado","/","danger" );
          
        }
        return TRUE;
    }
    
    
    public function guardarCodigo($email, $codigo) {
		$date = new DateTime();
		$date -> modify ('+5 minute');
		$date ->format('d-m-Y H:i:s');
		
        $persona = R::findOne('persona','email=?',[$email]);
        if ($email == $persona->email) {
         
            $persona->cod_recuperacion = $codigo;
			$persona->caducidad_codigo = $date;
            R::store($persona);
            
        }
        
        else {
            $e = ($email == null ? new Exception("nulo") : new Exception("Email no existe"));
            throw $e;
        }
    }
    
    
    public function comprobarCodigo($token, $email) {
        $usuario = R::findOne('persona', 'cod_recuperacion=? AND email=?',[$token, $email]);
       
        if ($usuario == null) {
            PRG("Datos incorrectos","/","danger" );
        }
		
		//$fechaGuardada = DateTime::createFromFormat('d-m-Y H:i:s', $usuario->caducidad_codigo);
		$time = strtotime($usuario->caducidad_codigo);
		$fechaGuardada = date('d-m-Y H:i:s',$time);
		$fechaActual = date("d-m-Y H:i:s");
		//PRG("paraaaaa" . $fechaActual . "Fecha guardada ". $fechaGuardada ,"/","danger" );
		
// 		$fechaActual= new DateTime();
// 		$fechaActual = $fechaActual->format('d-m-Y H:i:s');
// 		$fechaActual = DateTime::createFromFormat('d-m-Y H:i:s', $fechaActual);
		//PRG("paraaaaa" .$fechaActual . "Fecha guardada ".$fechaGuardada ,"/","danger" );
		//echo "<script>console.log('paraaaaa'".$fechaActual . " ' Fecha guardada' ".$fechaGuardada .")</script>"; 
		if($fechaGuardada < $fechaActual){
			PRG("Enlace caducado","/","danger" );
		}
		
        return TRUE;
    }
    
    
    public function changePass($token, $email, $password){
        $usuario = R::findOne('persona', 'cod_recuperacion=? AND email=?',[$token, $email]);
        
        if($token == $usuario->cod_recuperacion && $email == $usuario->email) {
            $usuario->password=$password;
            R::store($usuario);
            
            return true;
        }
        else {
            return false;
        }

    }
    
    //Recuperar datos para conf perfil
    public function getDatosPersona($id) {
        $usuario = R::findOne('persona', 'id=?',[$id]);
        
        if ($usuario == null) {
            PRG("Datos incorrectos","/","danger" );
        }
        return $usuario;
    }
    
    
    public function actualizarPersona($id,$nombre, $telefono, $direccion, $ciudad, $provincia, $pais) {
        $persona = R::findOne('persona','id=?',[$id]);
        echo $id;
        if ($persona != null) {
            
            $persona = R::load('persona', $id);
            $persona->nombre = $nombre;
            $persona->telefono = $telefono;
            $persona->direcion = $direccion;
            $persona->ciudad = $ciudad;
            $persona->provincia = $provincia;
            $persona->nace = $pais;
            R::store($persona);
         
        }
        else {
            
            $e =  new Exception("Los campos no se han actualizado correctamente");
            throw $e;
        }
    }
    
    public function changePassPerfil($id, $password){
        $usuario = R::findOne('persona', 'id=?',[$id]);
        
        if ($usuario == null) {
            PRG("Datos incorrectos","/","danger" );
        }
        
       
            $usuario->password=$password;
            R::store($usuario);
            return $usuario;
    }
    
  
    
    
    
    
    
    /* public function crearPersona($nombre, $pwd, $idPaisNace, $idPaisReside, $idsAficionGusta, $idsAficionOdia)
     {
     $ok = ($nombre != null && $idPaisNace != null && $idPaisReside != null);
     if ($ok) {
     $persona = R::dispense('persona');
     
     $paisNacimiento = R::load('pais', $idPaisNace);
     $paisResidencia = R::load('pais', $idPaisReside);
     
     $persona->nombre = $nombre;
     $persona->pwd = password_hash($pwd, PASSWORD_DEFAULT);
     $persona->nace = $paisNacimiento;
     $persona->reside = $paisResidencia;
     
     R::store($persona);
     
     foreach ($idsAficionGusta as $idAficionGusta) {
     $aficion = R::load('aficion', $idAficionGusta);
     $gusta = R::dispense('gusta');
     $gusta->persona = $persona;
     $gusta->aficion = $aficion;
     R::store($gusta);
     }
     foreach ($idsAficionOdia as $idAficionOdia) {
     $aficion = R::load('aficion', $idAficionOdia);
     $odia = R::dispense('odia');
     $odia->persona = $persona;
     $odia->aficion = $aficion;
     R::store($odia);
     }
     } else {
     $e = ($nombre == null ? new Exception("nulo") : new Exception("duplicado"));
     throw $e;
     }
     }*/
    
    /*
     public function actualizarPersona($id, $nombre, $idPaisNace, $idPaisReside, $idsAficionGusta, $idsAficionOdia)
     {
     $ok = ($nombre != null && $idPaisNace != null && $idPaisReside != null);
     if ($ok) {
     $persona = R::load('persona', $id);
     $persona->nombre = $nombre;
     $persona->nace_id = $idPaisNace;
     $persona->reside_id = $idPaisReside;
     
     $comunes = [];
     foreach ($persona->ownGustaList as $gusta) {
     if (! in_array($gusta->aficion_id, $idsAficionGusta)) {
     R::store($persona);
     R::trash($gusta);
     } else {
     $comunes[] = $gusta->aficion_id;
     }
     }
     
     foreach (array_diff($idsAficionGusta, $comunes) as $idGusta) {
     $aficion = R::load('aficion', $idGusta);
     $gusta = R::dispense('gusta');
     $gusta->persona = $persona;
     $gusta->aficion = $aficion;
     R::store($persona);
     R::store($gusta);
     }
     } else {
     $e = ($nombre == null ? new Exception("nulo") : new Exception("duplicado"));
     throw $e;
     }
     }
     */
}

?>
