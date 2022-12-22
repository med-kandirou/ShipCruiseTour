<?php

class Croisiere extends database{
    function __construct() { }

    function getlatest(){
        
    }

    function getcroisiere(){
        $sql = "SELECT `id_croisiere`, c.nom as 'nom_crois', n.nom as 'nom_nav', `prix`, `image`, `nbr_nuit`, p.nom as 'port_dep', p.pays , `date_depart` FROM `croisiere` c inner JOIN navire n on  c.id_navire=n.id_n inner join port p on p.id_p=c.port_depart";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function addcroisiere($nom,$id_navire,$prix,$image,$nbr_nuit,$port_depart,$date_depart){
        $sql = "INSERT INTO `croisiere`(`nom`,`id_navire`, `prix`, `image`, `nbr_nuit`, `port_depart`, `date_depart`) VALUES (:nom,:id_navire,:prix,:image,:nbr_nuit,:port_depart,:date_depart)";
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


