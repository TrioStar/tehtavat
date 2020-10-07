<?php
include "./views/partials/adminhead.php";
?>

<?php if(isset($message)) echo "<hr>". $message."<hr>";?>


<form method="post">

<label for="title">Otsikko</label><br>
<input type="text" name="title"><br>

<label for="content">Sisältö</label><br>
<textarea name="content"></textarea><br>

<label for="publishdate">Julkaisupäivä</label><br>
<input type="date" name="publishdate"><br>

<label for="closedate">Poistamispäivä</label><br>
<input type="date" name="closedate"><br>

<input type="hidden" name="userid" value ="1">

<input type="submit" value="Lähetä">

</form>

<?php
include "./views/partials/end.php";
?>