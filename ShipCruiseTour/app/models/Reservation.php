
<?php

class Reservation extends database{
    function __construct() { }

    function getTotal(){
        $sql = "SELECT COUNT(`id_reserv`) as 'count' FROM `reservation`";
        $stmt=$this->openConnection()->query($sql);
        $res=$stmt->fetch(PDO::FETCH_ASSOC);
        return $res['count'];
    }

    function reserver($id_croisiere,$prix,$id_chambre){
        $sql = "INSERT INTO `reservation`(`id_client`, `id_croisiere`, `date_reserv`, `prix_reserv`, `id_chambre`) VALUES (:id_client,:id_croisiere,:date_reservation,:prix,:id_chambre)";
        $stmt=$this->openConnection()->prepare($sql);
        $id_client=$_SESSION['id'];
        $date_reservation=date("Y/m/d");
        $stmt->bindParam(':id_client',$id_client);
        $stmt->bindParam(':id_croisiere',$id_croisiere);
        $stmt->bindParam(':date_reservation',$date_reservation);
        $stmt->bindParam(':prix',$prix);
        $stmt->bindParam(':id_chambre',$id_chambre);
        $stmt->execute();
        return true;
    }
}
            
    
    













