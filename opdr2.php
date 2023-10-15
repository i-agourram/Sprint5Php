<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=sprint6", "root", "");
    $query1 = $db->prepare("SELECT * FROM leerlingen");
    $query1->execute();
    $result = $query1->fetchAll(PDO::FETCH_ASSOC);
    $count = count($result);
    $all = array();
    echo "<p>Leerlingen</p>";

    echo "<table>";
    foreach ($result as $data) {
        echo "<tr>";
        echo "<td>" . $data["leerling"] . "</td>";
        echo "<td>" . $data["cijfer"] . "</td>";
        echo "</tr>";
        $all[] = $data['cijfer'];
    }

    $gemmidelde = array_sum($all) / $count;
    $hoogstecijfer = max($all);
    $laagste = min($all);

    echo "</table>";

    echo "Het gemmidelde cijfer is: $gemmidelde";
    echo "<br>";
    echo "Het hoogste cijfer is: $hoogstecijfer";
    echo "<br>";
    echo "Het laagste cijfer is: $laagste";

} catch (PDOException $e) {
    die("Error!: " . $e->getMessage());
}






?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>




</body>
</html>
