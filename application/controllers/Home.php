<?php
class Home extends CI_Controller {
    public function index() {
        session_start();
        $persona= isset($_SESSION['persona']) ? $_SESSION['persona']: null;
        $data['rol']='anon';
        if ($persona != null){
            $data['rol'] = ($persona->loginname == 'admin')? 'admin': 'auth';
        }
        frame($this,'home/index', $data);
        
    
    }
    public function avisoLegal() {
        frame($this,'home/avisoLegal');
    }
    
    public function quienesSomos() {
        frame($this,'home/quienesSomos');
    }
}
?>