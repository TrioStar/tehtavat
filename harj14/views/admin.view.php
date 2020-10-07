<?php
include "./views/partials/adminhead.php";

//var_dump($allnews);
if(isset($message)) echo "<hr>". $message."<hr>";
?>



<?php
foreach($allnews as $onenews) { ?>

    <h3><?= $onenews["title"];?></h3>
    <p>
    <a href="./index.php?action=editnews&newsid=<?=$onenews["newsID"];?>">Muokkaa</a>
    <br>
    <a href="./index.php?action=deletenews&newsid=<?=$onenews["newsID"];?>">Poista</a>
    </p>
<?php
}
?>

<hr>
<h2>Käyttäjät</h2>
<?php
foreach($allusers as $user) { ?>
    <h4><?=$user["nickname"];?></h4>
    <p>
    <a href="./index.php?action=deleteuser&userid=<?=$user["userID"];?>">Poista</a>
    </p>

<?php
}

include "./views/partials/end.php";
?>