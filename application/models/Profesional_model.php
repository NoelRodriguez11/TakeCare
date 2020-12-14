
<?php

class Profesional_model extends CI_Model
{
  
    public function getProfesionalById($id)
    {
        return R::load('profesional', $id);
    }

    public function count()
    {
        return R::count('profesional');
    }

    public function getProfesionales()
    {
        return R::findAll('profesional');
    }
    
    public function getProfesionalByEmail($email){
        return R::findOne('profesional', 'email=?', [$email]);
    }
    

    public function crearProfesional($nombre, $primerApellido, $segundoApellido, $dni, $password, $direccion, $ciudad, $provincia, $telefono, $email, $genero, $pais,$fechaNacimiento, $especialidad, $clinica, $turno,$franja,$tarifa,  $extFoto)
    {
        if ( $email == null || $password == null) {
            throw new Exception("email o password nulos");
        }
        
        if ( R::findOne('profesional', 'email=?', [$email]) != null && R::findOne('profesional', 'dni=?', [$dni]) != null) {
            throw new Exception("email o dni duplicado");
        }
        
        //CREACION DE PERSONA
        $profesional = R::dispense('profesional');
        $profesional->nombre = $nombre;
        $profesional->primerApellido = $primerApellido;
        $profesional->segundoApellido = $segundoApellido;
        $profesional->password = password_hash($password, PASSWORD_BCRYPT);
          
        $profesional->dni = $dni;
        $profesional->direccion = $direccion;
        $profesional->ciudad = $ciudad;
        $profesional->provincia = $provincia;
        $profesional->fechaNacimiento = $fechaNacimiento;
        $profesional->extension_Foto= $extFoto;
        $profesional->genero= $genero;
        $profesional->email= $email;
        $profesional->telefono= $telefono;
        $profesional->especialidad=$especialidad;
        $profesional->cod_recuperacion = null;
		$profesional->caducidad_codigo = null;
        if ($pais!=null) $profesional->nace= $pais;
        $profesional->clinica = $clinica;
        $profesional->turno = $turno;
        $profesional->franja = $franja;
        $profesional->valoracion = 0;
        $profesional->numeroValoraciones = 0;
        $profesional->tarifa = $tarifa;
        
        
        return R::store($profesional);
        
    }
    
    
    public function actualizarProfesional($id,$nombre,$email,$telefono) {
        $profesional = R::findOne('profesional','id=?',[$id]);
        echo $id;
        if ($profesional != null) {
            
            $profesional = R::load('profesional', $id);
            $profesional->nombre = $nombre;
            $profesional->email = $email;
            $profesional->telefono = $telefono;
         
            R::store($profesional);
            
        }
        else {
            
            $e =  new Exception("Los campos no se han actualizado correctamente");
            throw $e;
        }
    }
    
    //=========== media valoraciones estrellas ===================//
    public function setPuntuacionTotalValoraciones($idProfesional, $nuevaValoracion)
    {
        $profesional = R::findOne('profesional','id=?',[$idProfesional]);
        
        if ($profesional != null) {
            if($profesional->valoracion == 0){
                $profesional->valoracion = $nuevaValoracion;
                $profesional->numeroValoraciones = 1;
            }
            else {
                $profesional->numeroValoraciones++;
                $profesional->valoracion = (($profesional->valoracion) + $nuevaValoracion)/$profesional->numeroValoraciones; //media de puntuaciones 
            }
           
            R::store($profesional);

        }
        else {
            PRG("problema");
            
        }
    }
    
    
    //=====================//

    public function verificarLogin($email, $pwd)
    {
        $usuario = R::findOne('profesional', 'email=?', [$email]);
        
        if ($usuario == null) {
            throw new Exception("Usuario o contraseña no correctas");
        }
        if (! password_verify($pwd, $usuario->password)) {
            throw new Exception("Usuario o contraseña no correctas");
        }
        return $usuario;
    }
    
    public function borrarProfesional($id) {
        R::trash(R::load('profesional',$id));
    }
    
    //FORGOT PWD 
    public function existEmail($email) {
        
        $usuario = R::findOne('profesional', 'email=?', [$email]);
        
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
		
        $profesional = R::findOne('profesional','email=?',[$email]);
        if ($email == $profesional->email) {
            
            $profesional->cod_recuperacion = $codigo;
			$profesional->caducidad_codigo = $date;
            R::store($profesional);
            
        }
        
        else {
            $e = ($email == null ? new Exception("nulo") : new Exception("Email no existe"));
            throw $e;
        }
    }
    
    
    public function comprobarCodigo($token, $email) {
        $usuario = R::findOne('profesional', 'cod_recuperacion=? AND email=?',[$token, $email]);
	
        if ($usuario == null) {
            PRG("Datos incorrectos","/","danger" );
        }
		
        $time = strtotime($usuario->caducidad_codigo);
        $fechaGuardada = date('d-m-Y H:i:s',$time);
        $fechaActual = date("d-m-Y H:i:s");
		
		if($fechaGuardada < $fechaActual){
			PRG("Enlace caducado","/","danger" );
		}
		
        return TRUE;
    }
    
    
    public function changePass($token, $email, $password){
        $usuario = R::findOne('profesional', 'cod_recuperacion=? AND email=?',[$token, $email]);
        
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
    public function getDatosProfesional($id) {
        $usuario = R::findOne('profesional', 'id=?',[$id]);
        
        if ($usuario == null) {
            PRG("Datos incorrectos","/","danger" );
        }
        return $usuario;
    }
    
    public function changePassPerfil($id, $password){
        $usuario = R::findOne('profesional', 'id=?',[$id]);
        
        if ($usuario == null) {
            PRG("Datos incorrectos","/","danger" );
        }
        
        
        $usuario->password=$password;
        R::store($usuario);
        return $usuario;
    }
    
    
    /* public function crearProfesional($nombre, $pwd, $idPaisNace, $idPaisReside, $idsAficionGusta, $idsAficionOdia)
     {
     $ok = ($nombre != null && $idPaisNace != null && $idPaisReside != null);
     if ($ok) {
     $profesional = R::dispense('profesional');
     
     $paisNacimiento = R::load('pais', $idPaisNace);
     $paisResidencia = R::load('pais', $idPaisReside);
     
     $profesional->nombre = $nombre;
     $profesional->pwd = password_hash($pwd, PASSWORD_DEFAULT);
     $profesional->nace = $paisNacimiento;
     $profesional->reside = $paisResidencia;
     
     R::store($profesional);
     
     foreach ($idsAficionGusta as $idAficionGusta) {
     $aficion = R::load('aficion', $idAficionGusta);
     $gusta = R::dispense('gusta');
     $gusta->profesional = $profesional;
     $gusta->aficion = $aficion;
     R::store($gusta);
     }
     foreach ($idsAficionOdia as $idAficionOdia) {
     $aficion = R::load('aficion', $idAficionOdia);
     $odia = R::dispense('odia');
     $odia->profesional = $profesional;
     $odia->aficion = $aficion;
     R::store($odia);
     }
     } else {
     $e = ($nombre == null ? new Exception("nulo") : new Exception("duplicado"));
     throw $e;
     }
     }*/
    
    /*
     public function actualizarProfesional($id, $nombre, $idPaisNace, $idPaisReside, $idsAficionGusta, $idsAficionOdia)
     {
     $ok = ($nombre != null && $idPaisNace != null && $idPaisReside != null);
     if ($ok) {
     $profesional = R::load('profesional', $id);
     $profesional->nombre = $nombre;
     $profesional->nace_id = $idPaisNace;
     $profesional->reside_id = $idPaisReside;
     
     $comunes = [];
     foreach ($profesional->ownGustaList as $gusta) {
     if (! in_array($gusta->aficion_id, $idsAficionGusta)) {
     R::store($profesional);
     R::trash($gusta);
     } else {
     $comunes[] = $gusta->aficion_id;
     }
     }
     
     foreach (array_diff($idsAficionGusta, $comunes) as $idGusta) {
     $aficion = R::load('aficion', $idGusta);
     $gusta = R::dispense('gusta');
     $gusta->profesional = $profesional;
     $gusta->aficion = $aficion;
     R::store($profesional);
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
