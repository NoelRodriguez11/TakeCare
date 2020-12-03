<?php

class Caso_model extends CI_Model
{
     
    public function getCasos()
    {
       return R::findAll('caso','ORDER BY fecha_inicio');
     
    }
    
    public function getCasosByEstado($estado)
    {
        return R::findAll('caso','estado=?',[$estado]);
        
    }
    
    
    public function getCasoById($id)
    {
        return R::load('caso', $id);
    }
    
    
    public function crearCaso($fechahora,$idProfesional,$idPersona, $diagnosticoPrevio)
    {
        $caso = R::findOne('caso','fecha_inicio=?',[$fechahora],'id_profesional=?',[$idProfesional]);
       
        $ok = ($caso==null && $fechahora!=null && $idProfesional!=null);
        if ($ok) {
            $caso = R::dispense('caso');
            $caso->fechaInicio = $fechahora;
            $caso->fechaFin = null;
            $caso->fechaAsignacion = null; 
            $caso->persona = $idPersona;
            $caso->profesional = $idProfesional;
            $caso->diagnosticoGeneral = $diagnosticoPrevio;
            $caso->estado = "pendiente";
            return R::store($caso);
        }
        else {
//             if ($e = ($fechahora == null?new Exception("nulo"):new Exception("Fecha y hora, ya registradas escoge otra") || $idEspecialidad == null?new Exception("nulo"):new Exception("Especicialidad ya existente escoge otra") || $idProfesional == null?new Exception("nulo"):new Exception("Profesional ya registrado, escoge otro"))) {
//                 throw $e;
//             }
                PRG("Los datos o son nulos o ya estan registrados");
        }
    }
    
    public function cambiarEstado($id) {
        $caso = R::findOne('caso','id=?',[$id]);
             
            $caso = R::load('caso', $id);
            $caso->estado = "aceptado";

            R::store($caso);
            
    }
    
    public function borrarCaso($id) {
        R::trash(R::load('caso',$id));
    }
    
    
}
?>
