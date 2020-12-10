<?php

class Caso_model extends CI_Model
{
     
    public function getCasos()
    {
       return R::findAll('caso','ORDER BY fecha_inicio');
     
    }
    
    public function getCasosByProfesionalIdandEstado($idProfesional, $estado)
    {
        return R::findAll('caso','profesional=?', [$idProfesional], 'estado', [$estado]);
        
    }
    
    public function getCasosByEstado($estado)
    {
        return R::findAll('caso','estado=?',[$estado],'ORDER BY fecha_inicio ASC');
        
    }
    
    
    public function getCasoById($id)
    {
        return R::load('caso', $id);
    }
    
    
    public function crearCaso($fechahora,$idProfesional,$idPersona, $diagnosticoPrevio, $afeccion)
    {
        $caso = R::findOne('caso','fecha_inicio=?',[$fechahora],'id_profesional=?',[$idProfesional]);
       
        $ok = ($caso==null && $fechahora!=null && $idProfesional!=null);
        
        if ($ok) {
            $caso = R::dispense('caso');
            $caso->fechaInicio = $fechahora;
            $caso->fechaFin = ""; 
            $caso->persona = $idPersona;
            $caso->profesional = $idProfesional;
            $caso->diagnosticoPreliminar = $diagnosticoPrevio;
            $caso->diagnosticoGeneral = "";
            $caso->estado = "Pendiente";
            $caso->afeccion = $afeccion;
            $caso->alertaCambioPropuesta = false;
            return R::store($caso);
        }
        else {
//             if ($e = ($fechahora == null?new Exception("nulo"):new Exception("Fecha y hora, ya registradas escoge otra") || $idEspecialidad == null?new Exception("nulo"):new Exception("Especicialidad ya existente escoge otra") || $idProfesional == null?new Exception("nulo"):new Exception("Profesional ya registrado, escoge otro"))) {
//                 throw $e;
//             }
                PRG("Los datos o son nulos o ya estan registrados");
        }
    }
    
    public function modificarFechaInicio($id, $fechahora)
    {
        $caso = R::findOne('caso','id=?',[$id]);
        
        $ok = ($caso!=null && $fechahora!=null);
        
        if ($ok) {
            $caso = R::load('caso', $id);
            $caso->fechaInicio = $fechahora;
            $caso->alertaCambioPropuesta = true;
            return R::store($caso);
        }
        else {
            //             if ($e = ($fechahora == null?new Exception("nulo"):new Exception("Fecha y hora, ya registradas escoge otra") || $idEspecialidad == null?new Exception("nulo"):new Exception("Especicialidad ya existente escoge otra") || $idProfesional == null?new Exception("nulo"):new Exception("Profesional ya registrado, escoge otro"))) {
            //                 throw $e;
            //             }
            PRG("Los datos o son nulos o ya estan registrados");
        }
    }
    
    public function cambiarEstado($id, $estado) {
        $caso = R::findOne('caso','id=?',[$id]);
             
            $caso = R::load('caso', $id);
            $caso->estado = $estado;

            R::store($caso);
            
    }

    public function cambiarAlerta($id, $alerta) {
        $caso = R::findOne('caso','id=?',[$id]);
        
        $caso = R::load('caso', $id);
        $caso->alertaCambioPropuesta = $alerta;
        
        R::store($caso);
        
    }

    public function editarDiagnostico($id, $diagnosticoGeneral) {
        $caso = R::findOne('caso','id=?',[$id]);
        
        $caso = R::load('caso', $id);
        $caso->diagnosticoGeneral = $diagnosticoGeneral;
        
        R::store($caso);
        
    }
    
    public function agregarSintoma($id, $sintoma) {
        $caso = R::findOne('caso','id=?',[$id]);
        
        $caso = R::load('caso', $id);
        
        $caso->sintoma = $sintoma;
        
        R::store($caso);
        
    }
    
    public function borrarCaso($id) {
        R::trash(R::load('caso',$id));
    }
    
    
}
?>
