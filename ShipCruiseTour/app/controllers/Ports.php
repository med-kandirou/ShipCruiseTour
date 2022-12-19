<?php

class Ports extends Controller{
    function __construct() {
        $this->port=$this->model('Port');
    }
    
    public function addport(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            if($this->port->addport($nom,$pays)==true){
                $_SESSION['notif']="Port a éte ajouté avec sussces";
                header('location:../pages/port');
                exit();
            }
        }
    }
}
