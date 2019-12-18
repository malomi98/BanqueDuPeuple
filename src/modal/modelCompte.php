<?php
    require_once 'bd.php';

    function addCompte($num, $solde, $dateCreation,$idClient){
        $sql = "INSERT INTO compte values (NULL, '$num', $solde, '$dateCreation',1,$idClient)";
        $conn = getConnexion();
        return $conn->exec($sql);
    }

    function genererNum(){
        $conn = getConnexion();
        $sql = "SELECT max(id) FROM compte";
        $array =  $conn -> query($sql) -> fetch();
        if($array == NULL){
            $id = 1;
        }else{
            $array[0]++;
            $id = $array[0];
        }
        $numero = date('d').date('m').date('Y')."_COMPTE".$id;
        return $numero;
    }

    function getAllComptes(){
        $conn = getConnexion();
        $sql = "SELECT c.id, c.numero, c.solde, c.date, cli.nom, cli.pnom FROM compte c, client cli WHERE c.idClient=cli.id AND etat=1";
        return $conn->query($sql)->fetchAll();
    }

    function getAllCompteByClient($id){
        $conn = getConnexion();
        $sql = "SELECT c.numero, c.solde, c.date, cli.nom, cli.pnom FROM compte c, client cli WHERE c.idClient=cli.id and c.idClient=$id AND etat=0";
        return $conn->query($sql)->fetchAll();
    }
?>