<?php
require('php/db.php');
$brand = $_GET['marka'];
$SQL = "SELECT SUM(eladottDarabszam) AS osszes
FROM modell, gyarto
WHERE modell.gyartoId = gyarto.gyartoId
AND gyarto.gyartoNev = $brand";
$result = $conn->query($sql) or die($conn->error);
$result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gyártói oldal</title>
</head>

<body>
    <h1><?php echo $brand ?></h1>
    <h2>teszt</h2>
</body>

</html>