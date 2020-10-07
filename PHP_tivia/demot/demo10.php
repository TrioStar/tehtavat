<?php
date_default_timezone_set("Europe/Helsinki");

echo time();
echo "<br>";

$nyt = time();
echo date($nyt);
echo "<br>";

echo date('h:i',$nyt);
echo "<br>";

echo date('d.m.Y',time());
echo " on sama kuin ";
echo date('d.m.Y');
echo "<br>";

echo date ('Y-m-d',$nyt);
echo "<br>";

echo date('w');
echo "<br>";

echo date('Y');
echo "<br>";

// tee itse timestamp
$paiva =15;
$kuukausi =12;
$vuosio =2020;
$tunnit =12;
$minuutit =35;
$sekunnit =12;

$aika = mktime($tunnit,$minuutit,$sekunnit,$kuukausi,$paiva,$vuosio);
echo $aika;
echo "<br>";
echo date('d.m.Y h:i',$aika);

function palautaPvm($nyt)
{
    $aika = date('Y-m-d',$nyt);
    return $aika;
}

$nyt = time();
echo palautaPvm($nyt);
echo "<br>";

function laskeLoppumisPvm() //palauttaa ajan tästä hetkestä kaksi viikoa
{
    $aika = date('Y-m-d');
    $aika_kahden_viikaon_paasta = date('Y-m-d', strtotime("$aika + 14 days"));
    return $aika_kahden_viikaon_paasta;
}

echo laskeLoppumisPvm();

function laske_kesto()
{
    $alku = date_create($aika1);
    $loppu = date_create($aika2);
    $ero = date_create($alku,$loppu);
    return $ero;
}
$aika_auksi = "2008-06-18";
$aika_lopuksi =  "2015-05-05";
$erotus = laske_kesto($aika_auksi,$aika_lopuksiaika_lopuk);
echo $erotus->format("%a days");