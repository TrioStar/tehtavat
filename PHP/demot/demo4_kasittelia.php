<?php
//tarkistetaan, ovatko tiedot tulleet perille

if(isset($_POST["nimi"])) {
    $nimi = htmlentities($_POST["nimi"]);
    echo "Tervepä terve $nimi!";

    // vaihtoehto echo "Tervepä terve ".$nimi."!"
}

?>