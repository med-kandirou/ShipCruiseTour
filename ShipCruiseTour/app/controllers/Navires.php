<?php

class Navires extends Controller{
    function __construct() {
        $this->Navire=$this->model('Navire');
    }
    
    public function addnavire(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            if($this->Navire->addnavire($nom,$nbr_ch,$nbr_p)==true){
                $_SESSION['notif']="Navire a éte ajouté avec sussces";
                header('location:../pages/navire');
                exit();
            }
        }
    }
}
