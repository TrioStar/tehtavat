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
        

        echo(floor(1.5)."<br>");

        echo round(1.456, 2,PHP_ROUND_HALF_UP), "<br>";

        echo round(68995, -2), "<br>";

        echo round(124.558, -2), "<br>";

        echo round(3.14), "<br>"; 

    ?> 
    <?php
        echo "<h1>3.3</h1>";

        $satunnainen = rand (1,20);
        echo "Voittaja on $satunnainen <br>";
        
        if ($satunnainen % 2 == 0) {
            echo "parikllinen <br>";
        } else {
            echo "epäparillinen <br>";
        }

    ?>
    <?php
        echo "<h1>3.4</h1>";

        $satunnainen_2 = rand (1,100);        

        if ($satunnainen_2 > 30 && $satunnainen_2 < 50) {
            echo $satunnainen_2 ." Pienehkö <br>";
        }
        if ($satunnainen_2 < 10 && $satunnainen_2 > 90) {
            echo $satunnainen_2 ." ääriarvo <br>";
        }
        if ($satunnainen_2 > 50) {
            echo $satunnainen_2 ." Pieni ja parillinen <br>";
        }
        if ($satunnainen_2 > 35) {
            echo $satunnainen_2 ." ei ole 35 <br>";
        }
        if ($satunnainen_2 < 35) {
            echo $satunnainen_2 ." ei ole 35 <br>";
        }
        
    ?>
    <?php
        echo "<h1>3.5</h1>";
        echo "En osaa <br>";
        
        
    ?>

</body>
</html>