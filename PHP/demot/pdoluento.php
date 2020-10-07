<?php
require "connection.php";
$sql = "DELETE FROM Countries WHERE id in(1, 2, 3)";
$nrows = $pdo->exec($sql);
echo "The statement affected $nrow rows\n";
/************************************************************/
echo "<h3>FETCH_STYLE_NUM</h3>";

$stm = $pdo->query("SELECT * FROM countryes");
var_dump($stm);
echo "<br>";
$rows = $stm->fetchAll(PDO::FETCH_NUM);

foreach($row as $row) {

    printf("$row[0] $row[1] $row[2] <br>\n");
}

echo "<h3>FETCH_ASSOC</h3>";

$stm = $pdo->query("SELECT * FROM countries");

$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row) {
    printf("{$row['id']} {$row['name']} {$row['population']}\n");
}


echo "<h3> Parametrikysely</h3>";

$id = 10;

$stm = $pdo->prepare("SELECT * FROM countries WHERE id = ?");
$stm->bindValue(1, $id);
$stm->execute();

$row = $stm->fetch(PDO::FETCH_ASSOC);

echo "Id: " . $row['id'] . PHP_EOL;
echo "Name: " . $row['name'] . PHP_EOL;
echo "Population: " . $row['population'] . PHP_EOL;

echo "<h3>Parametrikysely</h3>";

$id = 8;

$stm = $pdo->prepare("SELECT * FROM countries WHERE id = :id");
$stm->bindParam(":id", $id, PDO::PARAM_INT);
$stm->execute();

$row = $stm->fetch(PDO::FETCH_ASSOC);

echo "Id: " . $row['id'] . PHP_EOL;
echo "Name: " . $row['name'] . PHP_EOL;
echo "Population: " . $row['population'] . PHP_EOL;

echo "<h3>Parametrikysely 3</h3>";

$name = "Suomi";
$population = 5500000;

$stm = $pdo->prepare("INSERT INTO countries(name, population) VALUES(?,?);");
$stm ->execute(array($name,$population));

/*************************************************/

echo "<h3>Luo taulu, lisää tietueita ja palauta viimeksi lisätyn rivin id</h3>";

$sql = "CREATE TABLE words(id INT PRIMARY KEY AUTO_INCREMENT,
    word VARCHAR(255))";

$ret = $pdo->exec($sql);

$pdo->exec("INSERT INTO words(word) VALUES ('pen')");
$pdo->exec("INSERT INTO words(word) VALUES ('bum')");
$pdo->exec("INSERT INTO words(word) VALUES ('hum')");
$pdo->exec("INSERT INTO words(word) VALUES ('den')");

$rowid = $pdo->lastInsertId();

echo "Viimeksi lisätyn rivin id is: $rowid\n";