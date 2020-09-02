<?php
class Categoria_model extends CI_Model {
    
    public function getCategorias() {
        return  R::findAll('categoria','ORDER BY nombre ASC');
    }
    
    public function getCategoriaById($id)
    {
        return R::load('categoria', $id);
    }
    
    public function borrarCategoria($id) {
        R::trash(R::load('categoria',$id));
    }
    
    public function crearCategoria($nombre) {
        
        $categoria = R::findOne('categoria','nombre=?',[$nombre]);
        $ok = ($categoria==null && $nombre!=null);
        if ($ok) {
            $categoria = R::dispense('categoria');
            $categoria->nombre = $nombre;
            R::store($categoria);
        }
        else {
            $e = ($nombre==null?new Exception("nulo"):new Exception("Nombre de categoría ya registrado, escoge otro"));
            throw $e;
        }
           
    }
    

    public function actualizarCategoria($id, $nombre)
    {
        $categoria = R::findOne('categoria','nombre=?',[$nombre]);
        if ($nombre != null && $categoria == null) {
            $categoria = R::load('categoria', $id);
            $categoria->nombre = $nombre;
            R::store($categoria);
        } 
        else if ($nombre != null && $categoria =! null) {}
        else {
            $e = ($nombre == null ? new Exception("nulo") : new Exception("Nombre de categoría ya registrado, escoge otro"));
            throw $e;
        }
    }
    
}
?>