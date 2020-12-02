<?php 
class buscador_model extends CI_Model {

    public function filtro($especialidad){
          $objetoEspecialidad = R::findOne('especialidad','nombre =?',[$especialidad]);
          if ($objetoEspecialidad == null) {
              return R::findAll('profesional', 'nombre LIKE "%'.$especialidad.'%" OR primer_apellido LIKE "%'.$especialidad.'%" OR segundo_apellido LIKE "%'.$especialidad.'%" OR provincia LIKE "%'.$especialidad.'%" OR ciudad LIKE "%'.$especialidad.'%"');
          }
          else {
          $idEspecialidad = $objetoEspecialidad->id;
          return R::findAll('profesional', 'especialidad_id =?',[$idEspecialidad]);
}
}
}
?>