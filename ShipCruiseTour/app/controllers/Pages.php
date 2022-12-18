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
        $this->view('admin/index');
    }
    public function croisiere(){  
        $this->view('admin/croisiere');
    }
    public function port(){  
        $this->view('admin/port');
    }
    public function navire(){  
        $this->view('admin/navire');
    }
    public function logout(){  
        session_destroy();
        header('location:../pages/');
        exit();
    }
}
