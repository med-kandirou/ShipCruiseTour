<?php

class Chambres extends Controller{
    function __construct() {
        $this->chambre=$this->model('Chambre');
    }

    function filtreChambre(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $id_nav=$_POST['id_nav'];
            $data=$this->chambre->filtreChambre($id_nav);
            
            echo json_encode($data);
        }
    }
    

    
}
