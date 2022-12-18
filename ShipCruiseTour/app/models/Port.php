<?php

class Port extends database{
    function __construct() { }


    function gatPorts(){
        $sql = "SELECT `id_p`, `nom`, `pays` FROM `port`";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}