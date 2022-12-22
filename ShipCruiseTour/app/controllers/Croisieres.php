<?php

class Croisieres extends Controller{
    function __construct() {
        $this->croisiere=$this->model('Croisiere');
    }

    function addcroisiere(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            $image=$_POST['image']['name'];
            if($this->croisiere->addcroisiere($nom,$id_navire,$prix,$image,$nbr_nuit,$port_depart,$date_depart)){
                $_SESSION['notif']="Croisière a éte ajouté avec success";
                header('location:../pages/croisiere');
                exit();
            };
        }
       
    }


    
}
