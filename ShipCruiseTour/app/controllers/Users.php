<?php

class Users extends Controller{
    private $user;
    function __construct() {
        $this->user=$this->model('User');
    }
    
    public function register(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            $hashed_pass=password_hash($pass,PASSWORD_DEFAULT);
            if($this->user->register($nom,$prenom,$email,$hashed_pass)==true){
                echo 'added';
            }
        }
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            $data=$this->user->login($email,$pass);
            echo $data;
        }
    }
}
