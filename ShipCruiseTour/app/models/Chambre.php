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
        $sql = "SELECT `id_ch`, `prix`, `id_t`, `id_navire` FROM `chambre` WHERE id_navire=".$id_n."";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }




}

