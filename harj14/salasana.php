<?php
$salasana = "salasana";
$salasana = password_hash($salasana,PASSWORD_DEFAULT);
echo $salasana;
?>