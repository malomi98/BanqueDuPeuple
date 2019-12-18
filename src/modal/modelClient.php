<?php
    require_once 'bd.php';

    function addClient($nom, $pnom, $adr, $tel){
        $sql = "INSERT INTO client values (NULL, '$nom', '$pnom', '$adr', $tel)";
        $conn = getConnexion();
        $conn->exec($sql);
        return $conn->lastInsertId();
    }

    function getClients(){
        $conn = getConnexion();
        $sql = "SELECT * FROM client";
        return $conn -> query($sql) -> fetchAll();
    }

    function getClientById($idClient){
        $conn = getConnexion();
        $sql = "SELECT * FROM client WHERE id=$idClient";
        return $conn -> query($sql) -> fetch();
    }

    function UpdateClient($nom, $pnom, $adr, $tel, $idClient){
        $conn = getConnexion();
        $sql = "UPDATE client SET nom='$nom', pnom='$pnom', adr='$adr', tel=$tel WHERE id=$idClient";
        return $conn -> exec($sql);
    }
?>