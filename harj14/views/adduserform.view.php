<?php
include "./views/partials/adminhead.php";
?>

<?php if(isset($message)) echo "<hr>". $message."<hr>";?>

<form method="post">

<label for="truename">Nimi</label><br>
<input type="text" name="truename"><br>

<label for="nickname">Käyttäjätunnus</label><br>
<input type="text" name="nickname"><br>

<label for="password">Salasana</label><br>
<input type="password" name="password"><br>

<label for="password2">Salasana uudelleen</label><br>
<input type="password" name="password2"><br>

<input type="submit" value="Lähetä">

</form>

<?php
include "./views/partials/end.php";
?>