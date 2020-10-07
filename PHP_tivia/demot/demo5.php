<?php

//ensin lomakkeenkäsittelijä

if(isset($_POST["nimi"],$_POST["ika"])) {
    $nimi = htmlentities($_POST["nimi"]);
    $ika = htmlentities($_POST["ika"]);
    echo "Terve $nimi, oletko todella $ika vuotta vanha?";

} else { //ja tähän lomake
?>
    <form method ="post"><!-- voisi myös olla 
    action = "./index.php?sivu=demo4&kansio=demo" 
    action = "?php echo $_SERVER["PHP_SELF"];?>"
    action = "demo5.php"... -->
    <label for="nimi">Nimi</label><br>
    <input type = "text" name = "nimi" required><br>

    <label for="ika">Ikä</label><br>
    <input type = "number" min = "7" max = "65" name = "ika" required><br>

    <input type = "reset" value = "Tyhjennä"><br>
    <input type = "submit" value = "Lähetä"><br>
    </form>


<?php
}
?>