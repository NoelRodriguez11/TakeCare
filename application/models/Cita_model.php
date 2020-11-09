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
    
    
    public function crearCita($fechahora,$idEspecialidad,$idProfesional)
    {
        $cita = R::findOne('cita','fechahora=?',[$fechahora],'idEspecialidad=?',[$idEspecialidad],'idProfesional=?',[$idProfesional]);
        $ok = ($cita==null && $fechahora!=null && $idEspecialidad!=null && $idProfesional);
        if ($ok) {
            $cita = R::dispense('cita');
            $cita->fechahora = $fechahora;
            $cita->idEspecialidad = $idEspecialidad;
            $cita->idProfesional = $idProfesional;
            R::store($cita);
        }
        else {
//             if ($e = ($fechahora == null?new Exception("nulo"):new Exception("Fecha y hora, ya registradas escoge otra") || $idEspecialidad == null?new Exception("nulo"):new Exception("Especicialidad ya existente escoge otra") || $idProfesional == null?new Exception("nulo"):new Exception("Profesional ya registrado, escoge otro"))) {
//                 throw $e;
//             }
                PRG("Los datos o son nulos o ya estan registrados");
        }
    }
    
    
}
?>
