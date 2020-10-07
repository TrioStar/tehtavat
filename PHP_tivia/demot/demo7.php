<?php

for ($i = 1;$i <= 10;$i++) {
    echo " kierros $i,";
}

echo "<hr>";

$summa = 0;

for ($i = 1; $i <= 10; $i++) {
    $summa = $summa + $i;
}

echo "<hr>";

echo "kierrosnumeroiden summa = $summa";

for ($i = 10; $i > 0; $i--) {
    echo "$i<br>";
}

echo "<hr>";

?>

<table>
<?php

for ($i = 1; $i <= 20; $i++) {?>
    <tr>

    <?php

    for ($j =1; $j <=20; $j++) { ?>
        <td>
            <?php
        
            $tulo = $i * $j;
            echo $tulo; ?>

        </td>
        <?php }
        ?>

    </tr>
<?php } ?>
</table>