<!DOCTYPE html>
<html lang="fi">
<head>
    <title>harjoitus 3</title>
    <meta charset ="UTF-8">
</head>
<body>
    
    <?php
        echo "<h1>3.1</h1>";

        echo(rand(1,1000)."<br>");

    ?>
    <?php
        echo "<h1>3.2</h1>";
        
        echo "|";
        echo(floor(1.5)."<br>");
        echo "|";
        echo round(1.456, 2,PHP_ROUND_HALF_UP), "<br>";
        echo "|";
        echo round(68995, -2), "<br>";
        echo "|";
        echo round(124.558, -2), "<br>";
        echo "|";
        echo round(3.14), "<br>"; 

    ?> 
    <?php
        echo "<h1>3.3</h1>";

        $satunainen = rand (1,20);
        echo "Voittaja on $satunainen <br>";
        
        if ($satunainen % 2 == 0) {
            echo "parikllinen <br>";
        } else {
            echo "epäparillinen <br>";
        }

    ?>
    <?php
        echo "<h1>3.4</h1>";

        $satunainen_2 = rand (1,100);        

        if (30 < 50) {
           
        }


        
    ?>
    <?php
        echo "<h1>3.5</h1>";


    ?>

</body>
</html>