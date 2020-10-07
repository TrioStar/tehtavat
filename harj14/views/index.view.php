<?php
include "./views/partials/head.php";

//var_dump($allnews);
if(isset($message)) echo "<hr>". $message."<hr>";

foreach($allnews as $onenews) { ?>

    <h2><?= $onenews["title"];?></h2>
    <p><?= $onenews["publishdate"];?>
    <p><?= $onenews["content"];?></p>

<?php
}

include "./views/partials/end.php";
?>