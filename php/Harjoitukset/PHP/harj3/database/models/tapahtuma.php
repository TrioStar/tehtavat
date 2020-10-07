<?php

require "./database/connection.php";

function getAllTapahtumat()
{
    global $pdo;

    $sql = "SELECT * FROM h6_tapahtumat";
    $stm = $pdo->query($sql);

    $tapahtumat = $stm->fetchAll(PDO::FETCH_ASSOC);

    return $tapahtumat;
}

function addtapahtuma($data)
{
    global $pdo;
    $sql = "INSERT INTO h6_tapahtumat (nimi,paivays) VALUES (?,?)";
    $stm = $pdo->prepare($sql);
    $ok = $stm->execute($data);
    return $ok;
}

function getTapahtumaById($tapahtumaid)
{
    global $pdo;

    $sql = "SELECT * FROM h6_tapahtumat WHERE tapahtumaID = ?";
    $stm = $pdo->prepare($sql);

    $stm->bindValue(1, $tapahtumaid);
    $stm->execute();

    $getID = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $getID;
}

function getTapahtumaByname($username)
{
    global $pdo;

    $sql = "SELECT * FROM h6_tapahtumat WHERE nimi = ?";
    $stm = $pdo->prepare($sql);

    $stm->bindValue(1, $username);
    $stm->execute();
    
    $tapahtuma = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $tapahtuma;
}

function deleteTapahtuma($id)
{  
    global $pdo;

    $sql = "DELETE FROM h6_tapahtumat WHERE tapahtumaID = ?";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(1,$id);

    $ok = $stm->execute();
    return $ok;
}

function editTapahtuma($data)
{
    global $pdo;

    $sql ="UPDATE h6_tapahtumat SET nimi = ?, paivays = ? WHERE tapahtumaID = ?";

    $stm = $pdo->prepare($sql);
    $ok = $stm->execute($data); //palauttaa true tai false
    return $ok;
}

?>