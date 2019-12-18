<?php
    require_once "../src/modal/bd.php";
    $idCompte = $_GET['idCompte'];
    $conn = getConnexion();
    $sql = "UPDATE compte SET etat=0 WHERE id=$idCompte";
    $res = $conn->exec($sql);
    echo $res;

