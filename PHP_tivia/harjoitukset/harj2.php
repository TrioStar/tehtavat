<?php
echo "<!DOCtype html>";
echo '<html lang="fi">';
echo "<head>";
echo '<meta charset ="UTF-8">';
echo "<title>PHP tehtävä 1</title>";
echo "</head>";
echo "<body>";

echo "<h2>2.1</h2><br>";
    
$aidinika = 34;
$isanika = 46;
$lapsenika = 7;
$tämävuosi = 2019;

$summa = $aidinika + $isanika + $lapsenika;
echo "iät yhteensä $summa<br>";
$nuorempiäiti = $aidinika - $lapsenika;
echo "äidin ikä on $nuorempiäiti kun lapsi syntyi<br>";
$iskänsyntymävuosi = $tämävuosi - $isanika;
echo "Tämä on iskän syntymävuosi ($iskänsyntymävuosi)";

echo "<h2>2.2</h2>";

define("ALV" , 0.24);

echo "ALV on ".ALV." <br>";

echo "<br>";

$I = ALV * 10;
echo "ALV 10 € on $I €<br>";

$II = ALV * 20;
echo "ALV 20 $ on $II €<br>";

$III = ALV * 35.5;
echo "ALV 35,5 € on $III €<br>";

$IV = ALV * 1.80;
echo "ALV 1.80 € on $IV €<br>";

echo "</body>";
echo "</html>";
?>