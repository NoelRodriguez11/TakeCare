<?php
class producto extends CI_Controller {
        
    public function c() {
        //VISTA
        if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        }
        $this->load->model('categoria_model');
        $datos['categorias'] = $this->categoria_model->getCategorias();
        frame($this,'producto/c', $datos);    
    }
    
    public function cPost() {
        
        if(!isRolOK("admin")){
            PRG("Rol inadecuado");
        }
   
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $stock = isset($_POST['stock']) ? $_POST['stock'] : null;
        $precio = isset($_POST['precio']) ? $_POST['precio'] : null;
        $categoria= isset($_POST['categoria']) ? $_POST['categoria'] : null;
        $foto = isset($_FILES['foto']) ? ($_FILES['foto']) : null;
        
        try {
            
            $extFoto = null;
            if ($foto != null && $foto['error']==UPLOAD_ERR_OK) {
                $name_and_ext = explode('.', $foto['name']);
                $extFoto = $name_and_ext[sizeof($name_and_ext)-1];
                
            }
            
            $this->load->model('producto_model');
            $this->load->model('categoria_model');
            
            //TRATAMIENTO CATEGORIA
            if ($categoria == -1) {throw new Exception("Categoria no especificada");}
            
                try {
                   $id = $this->producto_model->crearProducto($nombre, $stock, $precio, $this->categoria_model->getCategoriaById($categoria), $extFoto);
                   
                }
                catch (Exception $e) {
            
                    throw new Exception ("Producto ya existente");
                }
                
            if ($extFoto != null) {
                
                $file_name = 'producto' . '-'. $id . '.'. $extFoto;
                $carpeta = "assets/img/upload/producto/";
                
                copy($foto['tmp_name'], $carpeta . $file_name);
                
            }
            
            PRG('Producto creado correctamente','producto/r','success');
            }
        catch (Exception $e) {
            PRG($e->getMessage(), '/producto/c');
 
        }
     }
     
     public function r() {
         if(!isRolOK("admin")){
             PRG("Rol inadecuado");
         }
         //MODELO
         $this->load->model('producto_model');
         $data['productos'] = $this->producto_model->getProductos();
         
         //VISTA
         frame($this,'producto/r',$data);
     }
     
     public function u()
     {
         if(!isRolOK("admin")){
             PRG("Rol inadecuado");
         }
         $id = isset($_GET['id']) ? $_GET['id'] : null;
         $this->load->model('producto_model');
         $this->load->model('categoria_model');
         $data['producto'] = $this->producto_model->getProductoById($id);
         $data['categorias'] = $this->categoria_model->getCategorias();
         frame($this, 'producto/u', $data);    
     }
     
     public function uPost() {
         
         if(!isRolOK("admin")){
             PRG("Rol inadecuado");
         }
         $this->load->model('producto_model');
         $this->load->model('categoria_model');
         
         $id = isset($_POST['id']) ? $_POST['id'] : null;
         $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
         $precio = isset($_POST['precio']) ? $_POST['precio'] : null;
         $stock = isset($_POST['stock']) ? $_POST['stock'] : null;
         $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : null;
         
         
         try {
             $this->producto_model->actualizarProducto($id, $nombre, $stock, $precio, $this->categoria_model->getCategoriaById($categoria));
             redirect(base_url() . 'producto/r');
         } catch (Exception $e) {
             session_start();
             $_SESSION['_msg']['texto'] = $e->getMessage();
             $_SESSION['_msg']['uri'] = 'producto/r';
             redirect(base_url() . 'msg');
         }
     }
     
     
     public function dPost() {
         
         if(!isRolOK("admin")){
             PRG("Rol inadecuado");
         }
         $id = isset($_POST['id']) ? $_POST['id'] : null;
         $this->load->model('producto_model');
         $this->producto_model->borrarProducto($id);
         redirect(base_url().'producto/r');
     }
     
     
     //AJAX DEL BEAN "PRODUCTO"

      public function cAJAX (){
         
          $data["nombreProducto"] = $_POST["nombreProducto"];
        echo $this->toJSON($data["nombreProducto"]);
             
     }
     
     public function toJSON($nombre) {
         $ok = [];
         $this->load->model('producto_model');
         if ($this->producto_model->buscarUno($nombre) != null ) {
             $ok["coincide"] = 1;
         }
         else {
             $ok["coincide"] = 0;
         }
         return json_encode($ok);
         
         
     }
          
}
?>