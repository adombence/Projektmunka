<?php
require('php/db.php');
$brand = $_GET['marka'];
$SQL = "SELECT SUM(eladottDarabszam) AS osszes
FROM modell, gyarto
WHERE modell.gyartoId = gyarto.gyartoId
AND gyarto.gyartoNev = $brand";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Márkák</title>
    <script>
        console.log("<?php echo $brand ?>");
    </script>
</head>

<body>
</body>

</html>