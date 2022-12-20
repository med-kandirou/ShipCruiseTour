<?php

class Pages extends Controller{
    function __construct() {
        $this->port=$this->model('Port');
        $this->navire=$this->model('Navire');
        $this->chambre=$this->model('Chambre');
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
        $this->view('reservation');
    }


    /* admin ---------------------------------------- */

    public function admin(){  
        if(isset($_SESSION['id'])){
            $this->view('admin/index');
        }
        else{
            header('location:../pages/');
        }
    }
    public function croisiere(){  
        if(isset($_SESSION['id'])){
            $this->view('admin/croisiere');
        }
        else{
            header('location:../pages/');
        }
    }
    public function port(){  
        if(isset($_SESSION['id'])){
            $data=$this->port->gatPorts();
            $this->view('admin/port',$data);
        }
        else{
            header('location:../pages/');
        }
    }
    public function navire(){  
        
        $data=$this->navire->gatNavires();
        if(isset($_SESSION['id'])){
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
    public function logout(){  
        session_destroy();
        header('location:../pages/');
        exit();
    }
}
