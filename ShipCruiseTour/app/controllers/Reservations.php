<?php

class Reservations extends Controller{
    function __construct() {
    }
    
    function reserver($id_croi){
        if(isset($_SESSION['id']) && $_SESSION['role']==1){
            echo $id_croi;
        }
        else{
            header('location:../../pages/login');
            exit();
        }
    }
    


    
}