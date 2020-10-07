<!DOCTYPE html>
<html lang="fi">
<head>
    <title>harjoitus 5</title>
    <meta charset ="UTF-8">
</head>
<body>
<?php
echo "<h1>5.1</h1>";
echo "<h3>bensalaskuri</h3> <br>";
?>
    <form method = "post">
        <label for = "maara">Anna rahamäärä</label>
        <input type = "number" name = "maara" required><br>
        <input type = "submit" value = "Lähetä">
        <input type = "reset" value = "Tyhjennä"><br>
        </form>
    <?php
        if(isset($_POST["maara"])) {
            $maara = $_POST["maara"];
            $hinta = 1.55;
            $vastaus = $maara / $hinta;
            echo $vastaus;
    }
?>
<?php
echo "<h1>5.2</h1>";
echo "<h3>rahaa takaisin</h3> <br>";
?>
    <form method = "post">
        <label for = "maara1">Anna rahamäärä</label>
        <input type = "number" name = "maara1" required><br>
        <label for = "loppusumma">loppusumma</label>
        <input type = "number" name = "loppusumma" required><br>
        <input type = "submit" value = "Lähetä">
        <input type = "reset" value = "Tyhjennä"><br>
        
        <?php
        if(isset($_POST["maara"])) {
            $rahamaara = $_POST["maara"];
            $loppusumma = 1;
            $vastaus2 = $rahamaara / $loppusumma;
            echo $vastaus2;
    }
?>
<?php
echo "<h1>5.3</h1>";
echo "<h4>2.3 alv</h4> <br>";
?>
    <form method = "post">
        <label for = "hinta2">Anna hinta</label>
        <input type = "number" name = "hinta2" required><br>
        <label for = "hintaalv">hinta ALV% (esim 23)</label>
        <input type = "number" name = "hintaalv" required><br>
        <input type = "submit" value = "Lähetä">
        <input type = "reset" value = "Tyhjennä"><br>
        </form>
        <?php
        if(isset($_POST["hinta2"], $_POST["hintaalv"])) {
            
            $hinta2 = $_POST["hinta2"];
            $hintaalv = $_POST["hintaalv"];
            $alv = $hintaalv / 100 * $hinta2;
            $vastaus3 = $$hinta2 + $hintaalv;
            echo $vastaus3;
    }
?>
<?php
echo "<h1>5.4</h1>";
echo "<h3>arpa</h3> <br>";
?>
    <form method = "post">
        <label for = "annaluku">anna luku väliltä 1-10</label>
        <input type = "number" min = "1" max = "10" name="annaluku" required><br>
        <input type = "submit" value = "Lähetä"><br>
        <input type = "reset" value = "Tyhjennä"><br>
    </form>
    <?php
        if(isset($_POST["annaluku"])) {
            $arpa = $_POST["annaluku"];
            $arvottu = rand(1,10);
            if($arpa);
    }
?>
<?php
echo "<h1>5.5</h1>";
echo "<h3>valintarakenne</h3>";
?>
<form method = "post">
    <select name="arvosana">

    <option value = "0">0</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "4">4</option>
    <option value = "5">5</option>
    </select><br>
    <input type = "submit" value = "Lähetä">
    <input type = "reset" value = "Tyhjennä"><br>


<?php
echo "<h1>5.6</h1>";
echo "<h3>radio</h3>";
?>
<form method = "post">
    <input type = "radio" name = "suurempi" value = "suurempi">suurempi<br>
    <input type = "radio" name = "valinta" value = "pienempi">pienempi<br>
    <input type = "submit" value = "Lähetä">
    <input type = "reset" value = "Tyhjennä"><br>


<?php
    if($_POST["valinta"]=="pienempi") 
?>
    suurempi: <input type="radio" name="valinta" value="suurempi" checked="checked">
</body>
</html>