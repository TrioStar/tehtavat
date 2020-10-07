<?php
include "./views/partials/head.php";
if(isset($message)) echo $message;
?>

<form method ="post">

<label for="nickname">Käyttäjätunnus</label><br>
<input type="text" name="nickname"><br>

<label for="password">Salasana</label><br>
<input type="password" name="password"><br>

<input type="submit" value="Kirjaudu">
</form>

<?php
include "./views/partials/end.php";
?>