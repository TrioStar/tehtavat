<h2>8.1</h2>
<?php

for ($i =0; $i < 10; $i++)  {
    $numerot[$i] = 0;
}

$numerot[0] = 5;
$numerot[2] = 3;
$numerot[3] = 9;
$numerot[1] = 2;
$numerot[9] = 4;

print_r ($numerot);

var_dump($numerot);

for ($i = 0; $i < sizeof($numerot); $i++) {
    echo $numerot[$i]."<br>";
}

$summa = 0;
foreach ($numerot as $arvo) {
    echo $arvo."<br>";
    $summa = $summa + $arvo;
}

echo "arvo yhteensä $summa<br>";
?>

<h2>8.2</h2>

<?php

$koulu = array();

$koulu ["nimi"] = "TAO";
$koulu ["osoite"] = "Sammonkatu 45";
$koulu ["postinumero"] = "33540";
$koulu ["postitp"] = "TAMPERE";
$koulu ["maa"] = "Suomi";

foreach($koulu as $avain => $arvo) {
    echo "$avain = $arvo<br>";
}

print_r($koulu);

echo "<br>";
var_dump($koulu);
echo "<br>";