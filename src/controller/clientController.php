<?php
    require_once '../modal/modelCompte.php';
    if (isset($_POST['addClient'])){
        extract($_POST);
        $dateCreation = date("d-m-Y");
        if(addCompte($numeroCompte, $solde, $dateCreation, $idClient) > 0){
            header('location:/mesprojets/BanqueDuPeuple/listeClientV');
        }else{
            header('location:/mesprojets/BanqueDuPeuple/listeClientF');
        }
    }
?>