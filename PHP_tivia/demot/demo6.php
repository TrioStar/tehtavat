<form method = "post" >

<label for = "luku1">Luku 1</label><br>
<input type = "number" name = "luku1"><br>

<label for = "luku2">Luku 2</label><br>
<input type = "number" name = "luku2"><br>

<input type = "submit" name = "laske" value = "+">
<input type = "submit" name = "laske" value = "-">
<input type = "submit" name = "laske" value = "*">
<input type = "submit" name = "laske" value = "/">
</form>

<?php
if(isset($_POST["luku1"],$_POST["luku2"],$_POST["luku3"],$_POST["laske"])) {
    $liku1 = htmlentities($_POST["luku1"]);
    $liku2 = htmlentities($_POST["luku2"]);
    $laske = htmlentities($_POST["laske"]);

    /*
    if($laske == "+") $vastaus = $luku1 + $luku2;
    if($laske == "-") $vastaus = $luku1 - $luku2;
    if($laske == "*") $vastaus = $luku1 * $luku2;
    if($laske == "/") $vastaus = rousd(($luku1 / $luku2),2);
    */

    switch ($laske) {

        case "+":
        $vastaus = $luku1 + $luku2;
        break;

        case "-":
        $vastaus = $luku1 - $luku2;
        break;

        case "*":
        $vastaus = $luku1 * $luku2;
        break;

        case "/":
        $vastaus = round(($luku1 / $luku2),2);
        break;
    }

    echo $vastaus;
}
?>