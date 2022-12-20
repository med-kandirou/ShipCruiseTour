<?php

class Chambre extends database{
    function __construct() { }

    function getchambre(){
        $sql = "SELECT `id_n`, `nom` FROM `navire`";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function filtreChambre($id_n){
        $sql = "select ch.id_ch ,ch.prix,t.type ,n.nom from chambre ch inner join type_chambre t ON ch.id_t=t.id_t inner join navire n on n.id_n=ch.id_navire and n.id_n=".$id_n."";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function deletechambre($id_ch){
        $sql = "DELETE FROM `chambre` WHERE id_ch=:id_ch";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_ch',$id_ch);
        if($stmt->execute()){
            return true;
        }
    }
    function addchambre($prix,$type,$id_nav){
        $sql = "INSERT INTO `chambre`(`prix`, `id_t`, `id_navire`) VALUES (:prix,:type,:id_nav)";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':prix',$prix);
        $stmt->bindParam(':type',$type);
        $stmt->bindParam(':id_nav',$id_nav);
        if($stmt->execute()){
            return true;
        };
    }




}

