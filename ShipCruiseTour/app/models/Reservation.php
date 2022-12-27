
<?php

class Reservation extends database{
    function __construct() { }

    function getTotal(){
        $sql = "SELECT COUNT(`id_reserv`) as 'count' FROM `reservation`";
        $stmt=$this->openConnection()->query($sql);
        $res=$stmt->fetch(PDO::FETCH_ASSOC);
        return $res['count'];
    }
}
            
    
    













