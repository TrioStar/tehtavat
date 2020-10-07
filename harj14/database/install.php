<?php

require "connection.php";


$sql = "
CREATE TABLE `news` (
  `newsID` int(10) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `publishdate` date NOT NULL,
  `closedate` date NOT NULL,
  `userID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$kysely = $db->query($sql);
if($kysely) echo "Taulu news on luotu<br>";


$sql = "INSERT INTO `news` (`newsID`, `title`, `content`, `publishdate`, `closedate`, `userID`) VALUES
(1, 'Uutistoiminnon luominen alkaa', 'Aloitamme tietokannan luomisella ja asennusohjelmalla', '2020-05-04', '2020-05-30', 1);";
$kysely = $db->query($sql);
if($kysely) echo "Tauluun news on lisätty tietue<br>";



$sql = " CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `truename` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$kysely = $db->query($sql);
if($kysely) echo "Taulu users on luotu<br>";


$sql = "INSERT INTO `users` (`userID`, `truename`, `nickname`, `password`) VALUES
(1, 'Hallintahemmo', 'admin', '$2y$10$oqObGqdmJTd3PSslrKKXZu7pXtvf6HfCMs1OSGgAJs9yB.7yJiL2e');";

$kysely = $db->query($sql);
if($kysely) echo "Tauluun users on lisätty tietue<br>";



$sql = "ALTER TABLE `news`
  ADD PRIMARY KEY (`newsID`),
  ADD KEY `userID` (`userID`);";

 $kysely = $db->query($sql);
if($kysely) echo "Tauluun news on lisätty pääavain<br>"; 


$sql = "ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);";

 $kysely = $db->query($sql);
if($kysely) echo "Tauluun users on lisätty pääavain<br>";   


$sql = "ALTER TABLE `news`
  MODIFY `newsID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;";

$kysely = $db->query($sql);
if($kysely) echo "Tauluun news on lisätty laskuri<br>"; 


$sql = "ALTER TABLE `users`
MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;";

$kysely = $db->query($sql);
if($kysely) echo "Tauluun users on lisätty laskuri<br>"; 


$sql = "ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);";
  
$kysely = $db->query($sql);
if($kysely) echo "Tauluun news on lisätty vierasavain<br>"; 

?>
