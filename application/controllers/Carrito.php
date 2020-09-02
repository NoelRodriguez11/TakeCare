<?php

class Carrito extends CI_Controller
{

//========================================================================================================================
//MOSTRAR TODOS LOS PRODUCTOS

  public function add() {
        if(!isRolOK("auth")){
            PRG("Rol inadecuado");
        }
        //MODELO
        $this->load->model('producto_model');
        $this->load->model('categoria_model');
        
        $data['productos'] = $this->producto_model->getProductos();
        $data['categorias'] = $this->categoria_model->getCategorias();
        
        //VISTA
        frame($this,'carrito/add',$data);
    }
    
//AJAX DEL BEAN "PRODUCTO"
    
    public function addAJAX (){
        
        $data["idCategoria"] = $_POST["idCategoria"];
        echo $this->toJSON($data["idCategoria"]);
        
    }
    
    //CONTROLADOR 
    public function toJSON($idCategoria) {
        
        if ($idCategoria != 0){
        $productos = [];
        $this->load->model('categoria_model');
        $productos["productos"] = $this->producto_model->buscarTodosPorCategoria($idCategoria);
            
        }
        return json_encode($productos);
        
        
    }

}
?>