<?php

class Pages extends Controller{
    function __construct() {}

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
            $this->view('admin/port');
        }
        else{
            header('location:../pages/');
        }
    }
    public function navire(){  
        if(isset($_SESSION['id'])){
            $this->view('admin/navire');
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
