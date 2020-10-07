<?php
echo "<h2>8.1</h2>";
for ($i = 1;$i <= 10;$i++) {
    echo " Arlet $i<br>";
}
echo "<hr>";
echo "<h2>8.2</h2>";
$vuosi = date("Y");
for ($i = 1;$i <= 5;$i++) {
    echo " $vuosi<br>";
    $vuosi++;
}
echo "<hr>";
echo "<h2>8.3</h2>";

if (isset($_POST["korkeus"],$_POST["leveys"])) {
    $korkeus = $_POST["korkeus"];
    $leveys = $_POST["leveys"];
    
    for ($j = 0; $j < $korkeus; $j++) {
        for ($i = 0; $i < $leveys; $i++) {
            echo "*";
        }
        echo "<br>";
    }
} else {
?>
    <form action="" method="post">
        <input type="number" name="korkeus" placeholder="korkeus">
        <input type="number" name="leveys" placeholder="leveys"><br>  
        <input type="submit"name="lähetä">
    </form>
<?php
}
?>