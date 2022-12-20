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




}

