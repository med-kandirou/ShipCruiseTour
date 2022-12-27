<?php

class Pages extends Controller{
    function __construct() {
        $this->port=$this->model('Port');
        $this->navire=$this->model('Navire');
        $this->chambre=$this->model('Chambre');
        $this->croisiere=$this->model('Croisiere');
        $this->reservation=$this->model('Reservation');
        $this->user=$this->model('User');
    }

    /*guest  ----------------------------------------*/
    public function index(){  
        $this->view('index');
    }
    public function contact(){
        $this->view('contact');
    }
    public function about(){
        $this->view('about');
    }
    public function login(){
        $this->view('login');
    }
    public function inscrire(){
        $this->view('inscrire');
    }
    public function reservation(){
        //get ports
        $data=$this->port->getPorts();
        // //get navires
        $data2=$this->navire->gatNavires();
        $this->view('reservation',$data,$data2);
    }


    /* admin ---------------------------------------- */

    public function admin(){  
        if(isset($_SESSION['id'])){
            $data=[
                'totalUser'=>$this->user->getTotal(),
                'totalCroisiere'=>$this->croisiere->getTotal(),
                'totalReservation'=>$this->reservation->getTotal()
            ];
            $this->view('admin/index',$data);
        }
        else{
            header('location:../pages/');
        }
    }
    public function croisiere(){  
        if(isset($_SESSION['id'])){
            //get ports
            $data1=$this->port->getPorts();
            //get navires
            $data2=$this->navire->gatNavires();
            $this->view('admin/croisiere',$data1,$data2);
        }
        else{
            header('location:../pages/login');
        }
    }
    public function port(){  
        if(isset($_SESSION['id'])){
            $data=$this->port->getPorts();
            $this->view('admin/port',$data);
        }
        else{
            header('location:../pages/');
        }
    }
    public function navire(){  
        if(isset($_SESSION['id'])){
            $data=$this->navire->gatNavires();
            $this->view('admin/navire',$data);
        }
        else{
            header('location:../pages/');
        }
    }

    public function chambre(){  
        if(isset($_SESSION['id'])){
            $data=$this->chambre->getchambre();
            $this->view('admin/chambre',$data);
        }
        else{
            header('location:../pages/');
        }
    }

    /* client ---------------------------------------- */
    public function croisiere_client(){  
        if(isset($_SESSION['id'])){
            //get ports
            $data1=$this->port->getPorts();
            //get navires
            $data2=$this->navire->gatNavires();
            $this->view('client/croisiere',$data1,$data2);
        }
        else{
            header('location:../pages/');
        }
    }
    
    public function reservation_client(){  
        if(isset($_SESSION['id'])){
            $this->view('client/reservation');
        }
        else{
            header('location:../pages/');
        }
    }





    public function logout(){  
        session_destroy();
        header('location:../pages/');
        exit();
    }
}
