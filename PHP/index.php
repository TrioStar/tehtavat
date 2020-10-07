<?php
if(isset($_GET["sivu"])) $sivu = $_GET["sivu"];
else $sivu ="demo1"; //oletus

if(isset($_GET["kansio"])) $kansio = htmlentities($_GET["kansio"]);
else $kansio = "demot";

include "./partials/alku.php";
require "./partials/navi.php";

$sallitut = array("demo1","demo2","demo3","demo4","demo5","demo6","demo7","demo8","demo9","demo10","demo11","demo12","demo13","demo14","harj1","harj2","harj3","harj4","harj5","harj6","harj7","harj8","harj9","harj10","harj11","harj12","harj13","harj14","harj15","harj16","demo4_kasittelia");

if(in_array($sivu,$sallitut)) {
    $polku = "./$kansio/$sivu.php";
    require $polku;
    echo "<hr>";
    echo "<h3>Lähdekoodit</h3>";
    echo highlight_file($polku,1);
}

include "./partials/loppu.php";
?>