<?php

class User extends database{
    function __construct() { }


    function test(){
       return "done";
    }



    function register($nom,$prenom,$email,$mdp){
        $sql = "INSERT INTO `user`(`nom`, `prenom`, `email`, `pass`, `role`) VALUES (:nom,:prenom,:email,:pass,1)";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pass', $mdp);
        if($stmt->execute()){
            return true;
        }
    }

    public function login($email,$pass){
        $sql = "SELECT `id_u`, `nom`, `prenom`, `email`, `pass`, `role` FROM `user` WHERE email=:email";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':email',$email);
        $stmt->execute();
        if($stmt->rowCount()==1){
            $res=$stmt->fetch();
            if(password_verify($pass,$res['pass'])){
                $_SESSION['id']=$res['id_u'];
                $_SESSION['nom']=$res['nom'];
                $_SESSION['prenom']=$res['prenom'];
                $_SESSION['email']=$res['email'];
                $_SESSION['role']=$res['role'];
                return "ekt";
            }
            else{
                return "password verify";
            } 
        }
        else{
            return "madkhlch ga3";
        }
    }

            
    
    
}


