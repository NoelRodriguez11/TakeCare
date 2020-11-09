<?php

class Pais_model extends CI_Model
{
     
    public function getPaises()
    {
        return R::findAll('pais','ORDER BY nombre ASC');
    }
    
    
    public function getPaisById($id)
    {
        return R::load('pais', $id);
    }
    
    
    public function crearPais($nombre)
    {
        $pais = R::findOne('pais','nombre=?',[$nombre]);
        $ok = ($pais==null && $nombre!=null);
        if ($ok) {
            $pais = R::dispense('pais');
            $pais->nombre = $nombre;
            R::store($pais);
        }
        else {
           $e = ($nombre==null?new Exception("nulo"):new Exception("Nombre de pais ya registrado, escoge otro"));
           throw $e;
        }
    }   
}
?>
