<?php

class User extends database{
    function __construct() { }


    function test(){
       return "done";
    }



    function resister($nom,$prenom,$email,$mdp){
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
        $sql = "";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mdp', $pass);
        $stmt->execute();
        if($stmt->rowCount()==1){
            $res=$stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id']=$res['id_u'];
            $_SESSION['name']=$res['name'];
            $_SESSION['email']=$res['email'];
            $_SESSION['password']=$res['password'];
            return 1;
        }
        else{
            return 0;
        }
    }


    
    
}


