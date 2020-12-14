<?php

class Cita_model extends CI_Model
{
     
    public function getCitas()
    {
       return R::findAll('cita','ORDER BY id ASC');
    }
    
    public function getCitasByCasoId($idCaso)
    {
        return R::findAll('cita','caso_id=?',[$idCaso],'ORDER BY id ASC');
    }
    
    
    
    public function getCitaById($id)
    {
        return R::load('cita', $id);
    }
    
    public function crearCita($fechahora,$idProfesional,$idPersona, $idCaso, $caracter, $estado="Aceptada")
    {
        $cita = R::findOne('cita','fecha=?',[$fechahora],'id_profesional=?',[$idProfesional],'id_persona=?',[$idPersona], 'id_caso=?', [$idCaso]);
        
        $ok = ($cita==null && $fechahora!=null && $idProfesional!=null && $idPersona != null && $idCaso != null);
        
        if ($ok) {
            $cita = R::dispense('cita');
            $cita->fecha = $fechahora;
            $cita->persona = $idPersona;
            $cita->profesional = $idProfesional;
            $cita->caso = $idCaso;
            $cita->caracter = $caracter;
            $cita->estado = $estado;
            $cita->fechaAnterior = "";
            
            return R::store($cita);
        }
        else {

             PRG("Los datos o son nulos o ya estan registrados");
        }
    }
    
    public function solicitarCambioCita($idCita, $fechaNueva, $fechaAnterior, $estado="Pendiente")
    {
        $cita = R::load('cita',$idCita);
      
        $cita->fecha = $fechaNueva;
        $cita->estado = $estado;
        $cita->fechaAnterior = $fechaAnterior;
        return R::store($cita);
        
    }
    
    public function cambiarEstado($idCita,$estado)
    {
        $cita = R::load('cita',$idCita);
        
        $cita->estado = $estado;
        return R::store($cita);
        
    }
    

    

    
    public function borrarCita($id) {
        R::trash(R::load('cita',$id));
    }
}
?>
