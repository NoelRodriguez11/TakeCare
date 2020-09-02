<?php

class Aficion_model extends CI_Model
{
    public function update($id,$nombre) {
        $aficion = R::load('aficion',$id);
        $aficion->nombre = $nombre;
        R::store($aficion);
    }
    
    public function getAficionNombreById($id){
        $aficion = R::load('aficion',$id);
        return $aficion->nombre;
    }
    
    public function borrarAficion($id) {
        $aficion = R::load('aficion',$id);
        R::trash($aficion);
    }

    public function getAficiones()
    {
        return R::findAll('aficion');
    }

    public function crearAficion($nombre)
    {
        $aficion = R::findOne('aficion','nombre=?',[$nombre]);
        $ok = ($aficion==null && $nombre!=null);
        if ($ok) {
            $aficion = R::dispense('aficion');
            $aficion->nombre = $nombre;
            R::store($aficion);
        }
        else {
           $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
           throw $e;
        }
    }
}
?>
