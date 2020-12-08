<?php

class Sintoma_model extends CI_Model
{
    
    public function getSintomas()
    {
        return R::findAll('sintoma','ORDER BY nombre ASC');
    }
    
    
    public function getSintomaById($id)
    {
        return R::load('sintoma', $id);
    }
    
    public function borrarSintoma($id) {
        R::trash(R::load('sintoma',$id));
    }
    
    public function crearSintoma($nombre)
    {
        $sintoma = R::findOne('sintoma','nombre=?',[$nombre]);
        $ok = ($sintoma==null && $nombre!=null);
        if ($ok) {
            $sintoma = R::dispense('sintoma');
            $sintoma->nombre = $nombre;
            R::store($sintoma);
        }
        else {
            $e = ($nombre==null?new Exception("nulo"):new Exception("Nombre de sintoma ya registrado, escoge otro"));
            throw $e;
        }
    }
    
    public function actualizarSintoma($id, $nombre)
    {
        $sintoma = R::findOne('sintoma','nombre=?',[$nombre]);
        if ($sintoma == null) {
            $sintoma = R::load('sintoma', $id);
            $sintoma->nombre = $nombre;
            R::store($sintoma);
        }
        
        else if ($nombre == $sintoma->nombre && $id == $sintoma->id){
            $sintoma = R::load('sintoma', $id);
            R::store($sintoma);
        }
        else {
            $e = ($nombre == null ? new Exception("nulo") : new Exception("Nombre de sintoma ya registrado, escoge otro"));
            throw $e;
        }
    }
}
?>