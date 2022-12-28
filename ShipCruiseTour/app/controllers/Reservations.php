<?php

class Reservations extends Controller{
    function __construct() {
        $this->croisiere=$this->model('Croisiere');
        $this->chambre=$this->model('Chambre');
        $this->reservation=$this->model('Reservation');
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



    function reserver(){
        $id_croisiere=$_POST['id_croisiere'];
        $prix=$_POST['prix'];
        $chambre=$_POST['chambre'];
        if($this->reservation->reserver($id_croisiere,$prix,$chambre)){
            echo 'added';
        }
    }
    


    
}