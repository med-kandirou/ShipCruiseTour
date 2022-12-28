<?php

class Reservations extends Controller{
    function __construct() {
        $this->croisiere=$this->model('Croisiere');
        $this->chambre=$this->model('Chambre');
    }
    
    function show($id_croi){
        if(isset($_SESSION['id']) && $_SESSION['role']==1){
            $data=[
                'croisiere'=>$this->croisiere->getctroisierebyId($id_croi),
                'trajet'=>$this->croisiere->gettrajet($id_croi),
                'chambre'=>$this->chambre->getchambrebyIdCrois($id_croi),
            ];
            $this->view('client/show',$data);
        }
        else{
            header('location:../../pages/login');
            exit();
        }
    }



    function reserver($id_chambre,$id_croisiere){
        

    }
    


    
}