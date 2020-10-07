<h3>9.1 salasana suojaus ja vertaaminen</h3>
<?php

$ekasalasana = "salasana";
$tokasalasana = "salainen";

$password = password_hash($ekasalasana, PASSWORD_DEFAULT); //hajottaa salasanan

echo $password."<br>";

if(password_verify($ekasalasana,$password)) echo "Ovat samat<br>";
if(password_verify($ekasalasana,$password)) echo "Ovat samat....<br>";
else echo "eivät osu...<br>";

?>
<h3>filter_var</h3>
<h4>Merkkijono - sanitointi</h4>
<?php
$merkit = "<h1>Hei! Kuinka voit tänään?</h1>";
$sanitoitumerkit = filter_var($merkit, FILTER_SANITIZE_STRING);

echo $sanitoitumerkit;?>

<h3>9.3 filter_var</h3>
<h4>kokonaisluku - validointi</h4>
<?php
$int = "ttt"; //validointi: onko luku järkevä

if(filter_var($int, FILTER_VALIDATE_INT)) {
    echo "$int on validi kokonaisluku<br>";
} else {
    echo "$int ei ole vallidi kokonaisluku<br>";
}
?>
<h3>9.4 filter_var</h3>
<h4>URL - validointi</h4>
<?php
$url = "https://www.leeniemi.net";

if(filter_var($url, FILTER_VALIDATE_URL) == true) {
    echo"ULR on validi<br>";
} 
else echo "URL ei ole validi";
?>
<h3>9.5 filter_var</h3>
<h4>EMAIL - sanitointi ja validointi</h4>
<?php
$email = "someone@@example.com";
//sanitointo
$email = filter_var($email, FILTER_VALIDATE_EMAIL);

//validointi
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Sähköposti on validi<br>";
} 
else echo "Sähköposti ei ole validi<br>";
?>
<h3>9.6 filter_var</h3>
<h4>kokonaisluku ja väli (flag)</h4>
<?php
$number = 75;
//validoi ja tarkista, onko luku oikeassa välissä
if(filter_var($number, FILTER_VALIDATE_INT, array("options" => array("min_range" => 0, "max_range" => 100)))) {
    echo "luku $number on kokonaisluku väliltä 0 - 100<br>";
} else echo "luku $number ei ole kokonaisluku väliltä 0 - 100.<br>";