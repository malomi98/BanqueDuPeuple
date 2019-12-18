<?php
    require_once '../modal/modelCompte.php';
    require_once '../modal/modelClient.php';
    if (isset($_POST['AjoutCompte'])){
        extract($_POST);
        $idClient = addClient($nom, $prenom, $adr, $tel);
        var_dump($idClient);
        if ($idClient > 0){
            $dateCreation = date("d-m-Y");
            if(addCompte($numeroCompte, $solde, $dateCreation, $idClient) > 0){
                header('location:/mesprojets/BanqueDuPeuple/addCompteV');
            }else{
                header('location:/mesprojets/BanqueDuPeuple/addCompteF');
            }
        }
    }

    if (isset($_POST['Modifier'])){
        extract($_POST);
        if (UpdateClient($nom, $prenom, $adr, $tel, $idClient) > 0){
            header('location:/mesprojets/BanqueDuPeuple/ModifierV');
        }else{
            header('location:/mesprojets/BanqueDuPeuple/ModifierF');
        }
    }
?>