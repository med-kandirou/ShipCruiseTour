<?php

class Users extends Controller{
    function __construct() {
        $this->user=$this->model('User');
    }
    
    public function register(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            // extract($_POST);
            // if($this->user->register($nom,$prenom,$email,$pass)==true){
            //     echo 'added';
            // }

            $res=$this->user->test();
            echo $res;

        }
    }
}
