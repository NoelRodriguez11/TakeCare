<?php
class Home extends CI_Controller {
    public function index() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $data['rol'] =isset($_SESSION['persona']) ? ($_SESSION['persona']->loginname == 'admin' ? 'admin' : 'auth') : 'anon';
        frame($this,'home/index',$data);
    }
}