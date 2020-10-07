<?php
include "./views/partials/head.php";
?>

<?php if(isset($message)) echo "<hr>". $message."<hr>";?>

<form method="post">

<label for="nimi">Nimi</label><br>
<input type="text" name="nimi" id="nimi"><br>

<label for="paivays">Paivays</label><br>
<input type="date" name="paivays" id="paivays"><br>

<input type="submit" value="Lähetä">

</form>

<?php
include "./views/partials/end.php";
?>