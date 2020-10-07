<?php
include "./views/partials/adminhead.php";
?>

<?php if(isset($message)) echo "<hr>". $message."<hr>";
//var_dump($onenews);?>

<form method="post">

<label for="title">Otsikko</label><br>
<input type="text" name="title" value="<?= $onenews[0]["title"];?>"><br>

<label for="content">Sisältö</label><br>
<textarea name="content"><?= $onenews[0]["content"];?></textarea><br>

<label for="publishdate">Julkaisupäivä</label><br>
<input type="date" name="publishdate"  value="<?= $onenews[0]["publishdate"];?>"><br>

<label for="closedate">Poistamispäivä</label><br>
<input type="date" name="closedate"  value="<?= $onenews[0]["closedate"];?>"><br>

<input type="hidden" name="newsID" value="<?= $onenews[0]["newsID"];?>">

<input type="hidden" name="userid" value ="1">

<input type="submit" value="Lähetä">

</form>

<?php
include "./views/partials/end.php";
?>