<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=fietsen", "root", "");
    $query = $db->prepare("SELECT * FROM fietsen");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    echo "<table>";
    foreach ($result as $data) {
        echo "<tr>";
        echo "<td>" . $data["merk"] . "</td>";
        echo "<td>" . $data["type"] . "</td>";
        echo "<td>&euro; " . number_format($data["prijs"],2) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
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



