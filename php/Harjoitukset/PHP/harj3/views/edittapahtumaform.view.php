<?php
include "./views/partials/head.php";

if(isset($message)) echo $message;
?>

<form method = "post">

    <input type = "hidden" name = "tapahatumaID" value="<?= $tapahtuma[0]["tapahatumaID"];?>">

    <label for = "nimi">nimi</label><br>
    <input type = "text" name = "nimi" value ="<?= $tapahtuma[0]["nimi"];?>" required><br>

   
    <label for = "paivays">paivays</label><br>
    <input type = "date" name = "paivays" value = "<?= $tapahtuma[0]["paivays"]; ?>" required><br>
    <br>
    <input type = "submit" value = "Muuta Tapahtumaa">
    <br> <br>
    <input type = "button" href = "./views/addosallistujal.view.php" value = "Lisää osallistuja">
    </form>


<?php 
include "./views/partials/end.php";
?>