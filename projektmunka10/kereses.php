<?php
require('php/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keresés</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="nav">
        <a href="./index.html">Főoldal</a>
        <a href="./osszehasonlitas.php">Összehasonlítás</a>
        <a href="./kereses.php" class="active">Keresés</a>
    </div>

    <div class="panel">
        <form action="teszt.php" method="post">
            <div class="rowkeres">
                <div class="col-50">
                    <label for="gyarto" class="lab">Gyártó</label>
                    <input type="text" id="gyarto" name="gyarto" placeholder="Gyártó">
                    <label for="orszag" class="lab">Ország</label>
                    <input type="text" id="orszag" class="orszag" placeholder="Ország">
                    <label for="min" class="lab">Min. eladott darabszám</label>
                    <input type="number" id="min" class="min" placeholder="2022" value="2022">
                </div>
                <div class="col-50">
                    <label for="modell" class="lab">modell</label>
                    <input type="text" id="modell" class="modell" placeholder="Modell név">
                    <label for="varos" class="lab">város</label>
                    <input type="text" id="varos" class="varos" placeholder="Város">
                    <label for="max" class="lab">Max. eladott darabszám</label>
                    <input type="number" id="max" class="max" placeholder="2168491" value="2168491">
                </div>
            </div>
            <label>
                <input type="submit" value="keresés" class="btn" id="btn">
            </label>
        </form>
    </div>
</body>

</html>