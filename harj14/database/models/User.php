<?php
/*
CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `truename` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL]
*/

require "./database/connection.php"; //hakee yhteystiedoston

function getAllUsers()
{
    global $db; //otetaan yhteys

    $sql = "SELECT * FROM users"; //luodaan sql
    $stm = $db->query($sql); //suoritetaan

    $allusers = $stm->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($allusers);
    
    return $allusers;//palauttaa kaikki uutiset
}

function addUser($data)
{
    global $db;
    $sql = "INSERT INTO users (truename,nickname,password) VALUES (?,?,?)";
    $stm = $db->prepare($sql);
    $ok = $stm->execute($data); //palauttaa true tai false
    return $ok;
}

function getUserByNickname($nickname)
{
    global $db;

    $sql = "SELECT * FROM users WHERE nickname = ?";
    $stm = $db->prepare($sql);

    $stm->bindValue(1, $nickname);
    $stm->execute();
    
    $user = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $user;
}

function loginUser($nickname,$password)
{
    global $db; //yhteys

    $sql = "SELECT nickname, password FROM users WHERE nickname = ?";

    $stm = $db->prepare($sql);
    $stm->bindValue(1,$nickname);
    $stm->execute();

    $user = $stm->fetchAll(PDO::FETCH_ASSOC);

    //tarkistetaan, vastaavatko salasanat toisiaan
    if($user) {
        if(password_verify($password,$user[0]["password"]))  {
            return TRUE;
        } else return FALSE;
    } else return FALSE;
}

function deleteUser($id)
{  
    global $db;

    $sql = "DELETE FROM users WHERE userID = ?";
    $stm = $db->prepare($sql);
    $stm->bindValue(1,$id);

    $ok = $stm->execute();
    return $ok;
}
?>