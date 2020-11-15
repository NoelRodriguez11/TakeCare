<?php

class Especialidad_model extends CI_Model
{
     
    public function getEspecialidades()
    {
        return R::findAll('especialidad','ORDER BY nombre ASC');
    }
    
    
    public function getEspecialidadById($id)
    {
        return R::load('especialidad', $id);
    }
    
    
    public function crearEspecialidad($nombre)
    {
        $especialidad = R::findOne('especialidad','nombre=?',[$nombre]);
        $ok = ($especialidad==null && $nombre!=null);
        if ($ok) {
            $especialidad = R::dispense('especialidad');
            $especialidad->nombre = $nombre;
            R::store($especialidad);
        }
        else {
           $e = ($nombre==null?new Exception("nulo"):new Exception("Nombre de especialidad ya registrado, escoge otro"));
           throw $e;
        }
    }   
}
?>
