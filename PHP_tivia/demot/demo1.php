<!DOCtype html>
<html>
<head>
    <meta charset ="UTF-8">
    <title>PHP Demo 1</title>
</head>
<body>

<h2>1.1</h2>

<?php
echo "<h1>Hello World!</h1>";
?>

<?= "Hello again <br>\n"; ?>

<?php
echo "\"Kun hyppäät ilosta ilmaa, <br>\n
varo, <br>\n
ettei kukaan vedä maat jalkojesi alta (Stanislaw Jerzy Lec)\"<br>\n";


$omanimi = "Arlet";

echo "Kirjoittajan nimi on $omanimi<br>\n";

$luku1 = 5;

echo "Muuttujan arvo on $luku1<br>\n";

$summa = $luku1 + $luku1;
$erotus = $luku1 - $luku1;
$tulo = $luku1 * $luku1;

echo "lukujes $luku1 ja $luku1 summa on $summa<br>\n";
echo "lukujes $luku1 ja $luku1 erotus on $erotus<br>\n";
echo "lukujes $luku1 ja $luku1 tulo on $tulo<br>\n";
?>
<h2>Vakiot</h2>
<?php
/*laske kuinka kauan vaaleihoinen voi olla auringossa tunteja kummalakin kertomalla
*/
define("SUOJAKERROIN_25", 25);
define("SUOJAKERROIN_50", 50);
$vaalea = 10;
$tumma = 30;

$vaalean_aika_25 = (SUOJAKERROIN_25 * $vaalea)/60;
echo "Vaalea voi olla kertoimella 25 auringossa $vaalean_aika_25 tuntia<br>\n";

$vaalean_aika_50 = (SUOJAKERROIN_50 * $vaalea)/60;
echo "Vaalea voi olla kertoimella 50 auringossa $vaalean_aika_50 tuntia<br>\n";

$tumman_aika_25 = (SUOJAKERROIN_25 * $tumma)/60;
echo "Tumma voi olla kertoimella 25 auringossa $tumman_aika_25 tuntia<br>\n";

$tumman_aika_50 = (SUOJAKERROIN_50 * $tumma)/60;
echo "Tumma voi olla kertoimella 50 auringossa $tumman_aika_50 tuntia<br>\n";
echo <<<EOT
</body>
</html>
EOT;
?>