<?php

class Pages extends Controller{
    function __construct() {}
    
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
}
