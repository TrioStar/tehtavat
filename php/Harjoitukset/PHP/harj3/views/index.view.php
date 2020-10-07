<?php
include "./views/partials/head.php";
?>

<h1>Tapahtumat</h1>

<a href="./index.php?action=addtapahtuma">Lisää tapahtuma</a><br>

<hr>

<?php
if(isset($message)) {
    echo $message."<hr>";
}

foreach($tapahtumat as $tapahtuma) { ?>
<h4><?=$tapahtuma["nimi"];
echo "<br>". $tapahtuma["paivays"]; ?></h4>
<a href="./index.php?action=edittapahtuma&tapahtumaID=<?= $tapahtuma["tapahtumaID"];?>">Muokkaa</a><br>
<a href="./index.php?action=deletetapahtuma&tapahtumaID=<?= $tapahtuma["tapahtumaID"];?>">Poista</a><br><hr>

<?php
}
include "./views/partials/end.php"; 
?>