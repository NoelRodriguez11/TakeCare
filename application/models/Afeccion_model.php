<?php

class Afeccion_model extends CI_Model
{
     
    public function getAfecciones()
    {
       return R::findAll('afeccion','ORDER BY fecha_inicio');
     
    }
    
    public function getAfeccionByIdPersona($id)
    {
        return R::findAll('afeccion','id_persona=?',[$id]);
        
    }
    
    
    public function getAfeccionById($id)
    {
        return R::load('afeccion', $id);
    }
    
    
    public function crearAfeccion($fechaInicio, $idProfesional,$idPersona, $sintoma1, $sintoma2, $sintoma3, $sintoma4, $sintoma5, $sintoma6, $sintoma7)
    {
        $afeccion = R::findOne('afeccion','id_persona=?',[$idPersona],'id_profesional=?',[$idProfesional], 'fecha_inicio=?', [$fechaInicio]);
       
        $ok = ($afeccion==null && $idPersona!=null && $idProfesional!=null);
        
        if ($ok) {
            $afeccion = R::dispense('afeccion');
            $afeccion->fechaInicio = $fechaInicio;
            $afeccion->profesional = $idProfesional;
            $afeccion->persona = $idPersona;
            $afeccion->sintoma1 = $sintoma1;
            $afeccion->sintoma2 = $sintoma2;
            $afeccion->sintoma3 = $sintoma3;
            $afeccion->sintoma4 = $sintoma4;
            $afeccion->sintoma5 = $sintoma5;
            $afeccion->sintoma6 = $sintoma6;
            $afeccion->sintoma7 = $sintoma7;
            

            return R::store($afeccion);
        }
        else {
//             if ($e = ($fechahora == null?new Exception("nulo"):new Exception("Fecha y hora, ya registradas escoge otra") || $idEspecialidad == null?new Exception("nulo"):new Exception("Especicialidad ya existente escoge otra") || $idProfesional == null?new Exception("nulo"):new Exception("Profesional ya registrado, escoge otro"))) {
//                 throw $e;
//             }
                PRG("Los datos o son nulos o ya estan registrados");
        }
    }
    

    
    public function agregarSintoma($idAfeccion,$sintoma1, $sintoma2, $sintoma3, $sintoma4, $sintoma5, $sintoma6, $sintoma7) {
        
        $afeccion = R::load('afeccion', $idAfeccion);
        
        $afeccion->sintoma1 = $sintoma1;
        $afeccion->sintoma2 = $sintoma2;
        $afeccion->sintoma3 = $sintoma3;
        $afeccion->sintoma4 = $sintoma4;
        $afeccion->sintoma5 = $sintoma5;
        $afeccion->sintoma6 = $sintoma6;
        $afeccion->sintoma7 = $sintoma7;
        
        R::store($afeccion);
        
    }
    
    public function borrarAfeccion($id) {
        R::trash(R::load('afeccion',$id));
    }
    
    
}
?>
