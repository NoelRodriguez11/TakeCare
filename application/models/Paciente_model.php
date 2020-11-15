<?php

class Paciente_model extends CI_Model
{
  
    public function getPacienteById($id)
    {
        return R::load('paciente', $id);
    }

    public function count()
    {
        return R::count('paciente');
    }

    public function getPacientes()
    {
        return R::findAll('paciente');
    }
    

    public function crearPaciente($loginname, $password, $email, $nombre, $altura, $fechaNacimiento, $pais, $extFoto)
    {
        if ( $loginname == null || $password == null) {
            throw new Exception("Loginname, nombre o password nulos");
        }
        
        if (R::findOne('paciente', 'loginname=?', [$loginname]) != null) {
            throw new Exception("Loginname duplicado");
        }
        
        //CREACION DE PERSONA
        $paciente = R::dispense('paciente');
        $paciente->loginname = $loginname;
        $paciente->password = password_hash($password, PASSWORD_BCRYPT);

        if ($loginname != "admin") {
        $paciente->altura = $altura;
        $paciente->nombre = $nombre;
        $paciente->email = $email;
        $paciente->fechaNacimiento = $fechaNacimiento;
        $paciente->extension_Foto= $extFoto;
        $paciente->cod_recuperacion = null;
        if ($pais!=null) $paciente->nace= $pais;
        //CREACI�N DE NUEVA VENTA Y SU ASOCIACI�N CON LA PERSONA (EN CASO DE NO SER ADMIN)
        $venta = R::dispense('venta');
        $venta->fecha = date('Y-m-d H:i:s');
        $venta -> ventaencurso = $paciente;
        R::store($venta);
        
        $paciente->ventaencurso=$venta;
        }
        
        return R::store($paciente);
        
    }
    
    
    public function actualizarPaciente($id,$loginname, $nombre, $altura, $fechaNacimiento, $pais) {
        $paciente = R::findOne('paciente','loginname=?',[$loginname]);
        if ($paciente == null) {
            
            $paciente = R::load('paciente', $id);
            $paciente->loginname = $loginname;
            $paciente->altura = $altura;
            $paciente->nombre = $nombre;
            $paciente->fechaNacimiento = $fechaNacimiento;
            $paciente->nace = $pais;
            R::store($paciente);
            
        }
        
        else if ($loginname == $paciente->loginname && $id == $paciente->id){

            $paciente = R::load('paciente', $id);
            $paciente->altura = $altura;
            $paciente->nombre = $nombre;
            $paciente->fechaNacimiento = $fechaNacimiento;
            $paciente->nace = $pais;
            R::store($paciente);
        }
        else {
            $e = ($loginname == null ? new Exception("nulo") : new Exception("Nombre de paciente ya registrado, escoge otro"));
            throw $e;
        }
    }

    public function verificarLogin($nombre, $pwd)
    {
        $usuario = R::findOne('paciente', 'loginname=?', [$nombre]);
        
        if ($usuario == null) {
            throw new Exception("Usuario o contraseña no correctas");
        }
        if (! password_verify($pwd, $usuario->password)) {
            throw new Exception("Usuario o contraseña no correctas");
        }
        return $usuario;
    }
    
    public function borrarPaciente($id) {
        R::trash(R::load('paciente',$id));
    }
    
    
    public function existEmail($email) { 
        
        $usuario = R::findOne('paciente', 'email=?', [$email]);
        
        if ($usuario == null) {
           // throw new Exception("Email no encontrado");
            PRG("Email no encontrado","/","danger" );
          
        }
        return TRUE;
    }
    
    
    public function guardarCodigo($email, $codigo) {
        $paciente = R::findOne('paciente','email=?',[$email]);
        if ($email == $paciente->email) {
         
            $paciente->cod_recuperacion = $codigo;
            R::store($paciente);
            
        }
        
        else {
            $e = ($email == null ? new Exception("nulo") : new Exception("Email no existe"));
            throw $e;
        }
    }
    
    
    public function comprobarCodigo($token, $email) {
        $usuario = R::findOne('paciente', 'cod_recuperacion=? AND email=?',[$token, $email]);
        
        if ($usuario == null) {
            PRG("Datos incorrectos","/","danger" );
        }
        return TRUE;
    }
    
    
    ///terminar
    public function changePass($token, $email, $password){
//echo $token;
       // echo $email;
       // echo $password;
        $usuario = R::findOne('paciente', 'cod_recuperacion=? AND email=?',[$token, $email]);
        
        if($token == $usuario->cod_recuperacion && $email == $usuario->email) {
            $usuario->password=$password;
            R::store($usuario);
            
            return true;
        }
        else 
            return false;
              
        
       
        
    }
    
    
    
    
    
    /* public function crearPaciente($nombre, $pwd, $idPaisNace, $idPaisReside, $idsAficionGusta, $idsAficionOdia)
     {
     $ok = ($nombre != null && $idPaisNace != null && $idPaisReside != null);
     if ($ok) {
     $paciente = R::dispense('paciente');
     
     $paisNacimiento = R::load('pais', $idPaisNace);
     $paisResidencia = R::load('pais', $idPaisReside);
     
     $paciente->nombre = $nombre;
     $paciente->pwd = password_hash($pwd, PASSWORD_DEFAULT);
     $paciente->nace = $paisNacimiento;
     $paciente->reside = $paisResidencia;
     
     R::store($paciente);
     
     foreach ($idsAficionGusta as $idAficionGusta) {
     $aficion = R::load('aficion', $idAficionGusta);
     $gusta = R::dispense('gusta');
     $gusta->paciente = $paciente;
     $gusta->aficion = $aficion;
     R::store($gusta);
     }
     foreach ($idsAficionOdia as $idAficionOdia) {
     $aficion = R::load('aficion', $idAficionOdia);
     $odia = R::dispense('odia');
     $odia->paciente = $paciente;
     $odia->aficion = $aficion;
     R::store($odia);
     }
     } else {
     $e = ($nombre == null ? new Exception("nulo") : new Exception("duplicado"));
     throw $e;
     }
     }*/
    
    /*
     public function actualizarPaciente($id, $nombre, $idPaisNace, $idPaisReside, $idsAficionGusta, $idsAficionOdia)
     {
     $ok = ($nombre != null && $idPaisNace != null && $idPaisReside != null);
     if ($ok) {
     $paciente = R::load('paciente', $id);
     $paciente->nombre = $nombre;
     $paciente->nace_id = $idPaisNace;
     $paciente->reside_id = $idPaisReside;
     
     $comunes = [];
     foreach ($paciente->ownGustaList as $gusta) {
     if (! in_array($gusta->aficion_id, $idsAficionGusta)) {
     R::store($paciente);
     R::trash($gusta);
     } else {
     $comunes[] = $gusta->aficion_id;
     }
     }
     
     foreach (array_diff($idsAficionGusta, $comunes) as $idGusta) {
     $aficion = R::load('aficion', $idGusta);
     $gusta = R::dispense('gusta');
     $gusta->paciente = $paciente;
     $gusta->aficion = $aficion;
     R::store($paciente);
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
