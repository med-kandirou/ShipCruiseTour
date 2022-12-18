<?php

class Navire extends database{
    function __construct() { }

    function gatNavires(){
        $sql = "SELECT `id_n`, `nom`, `nbr_ch`, `nbr_place` FROM `navire`";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }



}
