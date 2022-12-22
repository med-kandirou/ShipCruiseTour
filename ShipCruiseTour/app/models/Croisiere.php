<?php

class Croisiere extends database{
    function __construct() { }

    function getlatest(){
        
    }

    function getcroisiere(){
        $sql = "SELECT `id_croisiere`, `id_navire`, `prix`, `image`, `nbr_nuit`, `port_depart`, `date_depart` FROM `croisiere`";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function addcroisiere($nom,$id_navire,$prix,$image,$nbr_nuit,$port_depart,$date_depart){
        $sql = "INSERT INTO `croisiere`(`nom`,`id_navire`, `prix`, `image`, `nbr_nuit`, `port_depart`, `date_depart`) VALUES (:nom,:id_navire,:prix,:nbr_nuit,:image,:port_depart,:date_depart)";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':nom',$nom);
        $stmt->bindParam(':id_navire',$id_navire);
        $stmt->bindParam(':prix',$prix);
        $stmt->bindParam(':image',$image);
        $stmt->bindParam(':nbr_nuit',$nbr_nuit);
        $stmt->bindParam(':port_depart',$port_depart);
        $stmt->bindParam(':date_depart',$date_depart);
        if($stmt->execute()){
            return true;
        };
    }



}


