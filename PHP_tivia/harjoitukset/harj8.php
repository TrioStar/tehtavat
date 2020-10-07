<h2>8.1</h2>
<?php
echo "8.1";
$nyt = time();
echo date($nyt);
echo "<br>";

echo date('d.m.Y',time());
echo "<br>";

echo "Tiistai";
echo "<br>";
?>
<h2>8.2</h2>
<?php
echo "<br>";

$aika = mktime(12,45,00,2,2,2022);
echo date("j.n.Y \k\l\o h:i:s",$aika);
echo "<br>";
?>
<h2>8.3</h2>
<?php

function palautaPvm() //palauttaa ajan tästä hetkestä kaksi viikoa
{
    $aika = date('d-m-Y');
    $aika_tanaan = date('d-m-Y', strtotime("$aika - 7 days"));
    return $aika_tanaan;
}

echo palautaPvm();

echo "<br>";

function laskeLoppumisPvm($paivat)
{
    $aika = date('d-m-Y');
    $aika_tanan = date('d-m-Y', strtotime("$aika + $paivat days"));
    return $aika_tanan;
}

echo laskeLoppumisPvm(14);

?>

<h2>8.4</h2>
<?php

function onVokaali($kirjain)
{
    $vokaalit = array("a","e","i","o","u","y");
    if(in_array($kirjain, $vokaalit)){
        return "$kirjain on vokaali";
    }
    return "$kirjain ei ole vokaali";
}

echo onVokaali('a');
echo "<br>";
echo onVokaali('e');
echo "<br>";
echo onVokaali('s');
echo "<br>";
echo onVokaali('o');
echo "<br>";
echo onVokaali('r');