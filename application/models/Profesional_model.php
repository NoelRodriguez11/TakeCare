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
    

    public function crearProfesional($loginname, $password, $nombre, $altura, $fechaNacimiento, $pais, $extFoto)
    {
        if ( $loginname == null || $password == null) {
            throw new Exception("Loginname, nombre o password nulos");
        }
        
        if (R::findOne('profesional', 'loginname=?', [$loginname]) != null) {
            throw new Exception("Loginname duplicado");
        }
        
        //CREACION DE PERSONA
        $profesional = R::dispense('profesional');
        $profesional->loginname = $loginname;
        $profesional->password = password_hash($password, PASSWORD_BCRYPT);

        if ($loginname != "admin") {
        $profesional->altura = $altura;
        $profesional->nombre = $nombre;
        $profesional->fechaNacimiento = $fechaNacimiento;
        $profesional->extension_Foto= $extFoto;
        if ($pais!=null) $profesional->nace= $pais;
        //CREACI�N DE NUEVA VENTA Y SU ASOCIACI�N CON LA PERSONA (EN CASO DE NO SER ADMIN)
        $venta = R::dispense('venta');
        $venta->fecha = date('Y-m-d H:i:s');
        $venta -> ventaencurso = $profesional;
        R::store($venta);
        
        $profesional->ventaencurso=$venta;
        }
        
        return R::store($profesional);
        
    }
    
    
    public function actualizarProfesional($id,$loginname, $nombre, $altura, $fechaNacimiento, $pais)
    {
        $profesional = R::findOne('profesional','loginname=?',[$loginname]);
        if ($profesional == null) {
            
            $profesional = R::load('profesional', $id);
            $profesional->loginname = $loginname;
            $profesional->altura = $altura;
            $profesional->nombre = $nombre;
            $profesional->fechaNacimiento = $fechaNacimiento;
            $profesional->nace = $pais;
            R::store($profesional);
            
        }
        
        else if ($loginname == $profesional->loginname && $id == $profesional->id){

            $profesional = R::load('profesional', $id);
            $profesional->altura = $altura;
            $profesional->nombre = $nombre;
            $profesional->fechaNacimiento = $fechaNacimiento;
            $profesional->nace = $pais;
            R::store($profesional);
        }
        else {
            $e = ($loginname == null ? new Exception("nulo") : new Exception("Nombre de profesional ya registrado, escoge otro"));
            throw $e;
        }
    }
    
    //===========valoraciones estrellas ===================//
    public function puntuacionTotalValoraciones($id, $nuevaValoracion)
    {
        $profesional = R::findOne('profesional','id=?',[$id]);
        
        
        if ($profesional != null) {
            if($profesional->valoracion == 0){
                $profesional->valoracion = $nuevaValoracion;
            }
            else {
                $profesional->valoracion = (($profesional->valoracion) + $nuevaValoracion)/2; //media de puntuaciones 
            }
            
            R::store($profesional);
        }
    }
    
    //=====================//

    public function verificarLogin($nombre, $pwd)
    {
        $usuario = R::findOne('profesional', 'loginname=?', [$nombre]);
        
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
