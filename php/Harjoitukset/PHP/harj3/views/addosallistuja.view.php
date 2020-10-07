<?php
include "./views/partials/head.php";
?>

<?php if(isset($message)) echo "<hr>". $message."<hr>";?>

<form method="post">

<label for="nimi">Etunimi</label><br>
<input type="text" name="nimi" id="nimi"><br>

<label for="sukunimi">Sukunimi</label><br>
<input type="text" name="sukunimi" id="sukunimi"><br>

<label for="kunta">Paikkakunta</label><br>
<input type="text" name="kunta" id="kunta"><br>

<input type="submit" value="Lähetä">

</form>

<?php
include "./views/partials/end.php";
?>