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
    

    public function crearPersona($loginname, $password, $nombre, $altura, $fechaNacimiento, $pais, $extFoto)
    {
        if ( $loginname == null || $password == null) {
            throw new Exception("Loginname, nombre o password nulos");
        }
        
        if (R::findOne('persona', 'loginname=?', [$loginname]) != null) {
            throw new Exception("Loginname duplicado");
        }
        
        //CREACION DE PERSONA
        $persona = R::dispense('persona');
        $persona->loginname = $loginname;
        $persona->password = password_hash($password, PASSWORD_BCRYPT);

        if ($loginname != "admin") {
        $persona->altura = $altura;
        $persona->nombre = $nombre;
        $persona->fechaNacimiento = $fechaNacimiento;
        $persona->extension_Foto= $extFoto;
        if ($pais!=null) $persona->nace= $pais;
        //CREACI�N DE NUEVA VENTA Y SU ASOCIACI�N CON LA PERSONA (EN CASO DE NO SER ADMIN)
        $venta = R::dispense('venta');
        $venta->fecha = date('Y-m-d H:i:s');
        $venta -> ventaencurso = $persona;
        R::store($venta);
        
        $persona->ventaencurso=$venta;
        }
        
        return R::store($persona);
        
    }
    
    
    public function actualizarPersona($id,$loginname, $nombre, $altura, $fechaNacimiento, $pais)
    {
        $persona = R::findOne('persona','loginname=?',[$loginname]);
        if ($persona == null) {
            
            $persona = R::load('persona', $id);
            $persona->loginname = $loginname;
            $persona->altura = $altura;
            $persona->nombre = $nombre;
            $persona->fechaNacimiento = $fechaNacimiento;
            $persona->nace = $pais;
            R::store($persona);
            
        }
        
        else if ($loginname == $persona->loginname && $id == $persona->id){

            $persona = R::load('persona', $id);
            $persona->altura = $altura;
            $persona->nombre = $nombre;
            $persona->fechaNacimiento = $fechaNacimiento;
            $persona->nace = $pais;
            R::store($persona);
        }
        else {
            $e = ($loginname == null ? new Exception("nulo") : new Exception("Nombre de persona ya registrado, escoge otro"));
            throw $e;
        }
    }

    public function verificarLogin($nombre, $pwd)
    {
        $usuario = R::findOne('persona', 'loginname=?', [$nombre]);
        
        if ($usuario == null) {
            throw new Exception("Usuario o contraseña no correctas");
        }
        if (! password_verify($pwd, $usuario->password)) {
            throw new Exception("Usuario o contraseña no correctas");
        }
        return $usuario;
    }
    
    public function borrarPersona($id) {
        R::trash(R::load('persona',$id));
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
