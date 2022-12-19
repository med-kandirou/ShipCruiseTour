<?php

class Ports extends Controller{
    function __construct() {
        $this->port=$this->model('Port');
    }
    
    public function addport(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            if($this->port->addport($nom,$pays)==true){
                header('location:../pages/port');
                exit();
            }
        }
    }
}
