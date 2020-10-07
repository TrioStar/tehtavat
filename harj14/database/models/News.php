<?php
/*
  `newsID` int(10) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `publishdate` date NOT NULL,
  `closedate` date NOT NULL,
  `userID` int(10) DEFAULT NULL
*/

require "./database/connection.php"; //hakee yhteystiedoston

function getAllNews()
{
    global $db; //otetaan yhteys

    $sql = "SELECT * FROM news"; //luodaan sql
    $stm = $db->query($sql); //suoritetaan
    $allnews = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $allnews;//palauttaa kaikki uutiset
}

function addNews($data)
{
    global $db;
    $sql = "INSERT INTO news (title,content,publishdate,closedate) VALUES (?,?,?,?)";
    $stm = $db->prepare($sql);
    $ok = $stm->execute($data); //palauttaa true tai false
    return $ok;
}

function editNews($data)
{
  global $db;
  $sql = "UPDATE news SET title = ?, content = ?, publishdate = ?, closedate = ? WHERE newsID = ?";
  $stm = $db->prepare($sql);
  $ok = $stm->execute($data); //palauttaa true tai false
  return $ok;
}

function getNewsById($newsID)
{
  global $db; //otetaan yhteys
  $sql = "SELECT * FROM news WHERE newsID = ?"; //luodaan sql

  $stm = $db->prepare($sql);
  $stm->bindValue(1, $newsID);
  $stm->execute();

  $onenews = $stm->fetchAll(PDO::FETCH_ASSOC);
  return $onenews;//palauttaa uutisen
}

function deleteNews($id)
{
    global $db;

    $sql = "DELETE FROM news WHERE newsID = ?";
    $stm = $db->prepare($sql);
    $stm->bindValue(1,$id);

    $ok = $stm->execute();
    return $ok;
}
?>