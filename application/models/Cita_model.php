<?php

class Cita_model extends CI_Model
{
     
    public function getCitas()
    {
       //return R::findAll('cita','ORDER BY nombre ASC');
        return R::findAll('cita');
    }
    
    
    public function getCitaById($id)
    {
        return R::load('cita', $id);
    }
    
    public function crearCita($fechahora,$idProfesional,$idPersona)
    {
        $cita = R::findOne('cita','fecha=?',[$fechahora],'id_profesional=?',[$idProfesional],'id_persona=?',[$idPersona]);
        
        $ok = ($cita==null && $fechahora!=null && $idProfesional!=null && $idPersona != null);
        
        if ($ok) {
            $cita = R::dispense('cita');
            $cita->fecha = $fechahora;
            $cita->persona = $idPersona;
            $cita->profesional = $idProfesional;
            return R::store($cita);
        }
        else {

             PRG("Los datos o son nulos o ya estan registrados");
        }
    }
    
}
?>
