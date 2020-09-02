<?php
class Producto_model extends CI_Model {
    
    public function getProductos() {
        return  R::findAll('producto',' ORDER BY nombre ASC ');
    }
    
    public function getProductoById($id)
    {
        return R::load('producto', $id);
    }
    
    public function borrarProducto($id) {
        R::trash(R::load('producto',$id));
    }
    
    public function buscarUno($nombre){
        return R::findOne('producto','nombre=?',[$nombre]);
    }
    
    public function buscarTodosPorCategoria($idCategoria){
        return R::findAll('producto','categoria_id=?',[$idCategoria]);
    }
    
    
    public function crearProducto($nombre, $stock, $precio, $categoria, $extFoto) {
        
//         $producto = R::findOne('producto','nombre=?',[$nombre]);
//         $ok = ($producto==null && $nombre!=null);
//         if ($ok) {
            $producto = R::dispense('producto');
            $producto->nombre = $nombre;
            $producto->stock = $stock;
            $producto->precio = $precio;
            $producto->categoria = $categoria;
            $producto ->extension_Foto=$extFoto;
           
            $lineadeventa = R::dispense('lineadeventa');
            $lineadeventa -> cantidad = 0;
            $lineadeventa -> lineaDeVenta = $producto;
            R::store($lineadeventa);
            R::trash($lineadeventa);
            
            return R::store($producto);
//         }

           
    }
    

    public function actualizarProducto($id, $nombre, $stock, $precio, $categoria)
    {
        $producto = R::findOne('producto','nombre=?',[$nombre]);
        if ($producto == null) {
            $producto = R::load('producto', $id);
            $producto->nombre = $nombre;
            $producto->stock = $stock;           
            $producto->precio = $precio;
            $producto->categoria = $categoria;
            R::store($producto);
        }
        
        else if ($nombre == $producto->nombre && $id == $producto->id){
            $producto = R::load('producto', $id);
            $producto->stock = $stock;
            $producto->precio = $precio;
            $producto->categoria = $categoria;
            R::store($producto);
        } 
        else {
            $e = ($nombre == null ? new Exception("nulo") : new Exception("Nombre de producto ya registrado, escoge otro"));
            throw $e;
        }
    }
    
}
?>