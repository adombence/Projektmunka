<?php
require('php/db.php');
$marka = $_GET['marka'];

$markaAdatok = "SELECT * 
FROM `gyarto` 
WHERE gyartoNev = '$marka';";
$result = $conn->query($markaAdatok) or die($conn->error);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gyártói oldal</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        var gyarto = document.location.search.replace(/^.*?\=/, '');
        console.log("gyarto: " + gyarto);
    </script>
</head>

<body>
    <div class="header">
        <h1 id="gyarto"></h1>
    </div>
    <div class="nav">
        <a href="./index.html">Főoldal</a>
        <a href="./osszehasonlitas.php" class="ossszehasonlitas">Összehasonlítás</a>
    </div>
    <div class="row">
        <div class="side">
            <h1>Gyártó adatok</h1>
            <?php
            $rows = $result->fetch_assoc();
            $gyartoId = $rows['gyartoId'];
            ?>
            <table class="table1">
                <tr>
                    <th>gyártó:</th>
                    <td><?php echo $rows['gyartoNev'] ?></td>
                </tr>
                <tr>
                    <th>alapító(k):</th>
                    <td><?php echo $rows['alapito'] ?></td>
                </tr>
                <tr>
                    <th>alapítás éve:</th>
                    <td><?php echo $rows['alapitasEve'] ?></td>
                </tr>
            </table>


        </div>
        <div class="main">
            <h1>Székhelye</h1>
            <?php
            mysqli_free_result($result);
            $szekhelyAdatai  = "SELECT * FROM `szekhely` WHERE gyartoId = $gyartoId;";
            $result = $conn->query($szekhelyAdatai) or die($conn->error);
            $rows = $result->fetch_assoc();
            ?>
            <table class="table2">
                <tr>
                    <th>ország:</th>
                    <td><?php echo $rows['orszag'] ?></td>
                </tr>
                <tr>
                    <th>város:</th>
                    <td><?php echo $rows['varos'] ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="side2">
            <h1>Legkevesebbet eladott autó</h1>
            <?php
            mysqli_free_result($result);
            $legkevesebbetEladott = "SELECT * FROM `modell` WHERE gyartoId = $gyartoId ORDER BY eladottDarabszam LIMIT 1;";
            $result = $conn->query($legkevesebbetEladott) or die($conn->error);
            $rows = $result->fetch_assoc();
            ?>
            <h1><?php echo $rows['modellNev'] ?>:</h1>
            <h1><?php echo $rows['eladottDarabszam'] ?> darab</h1>
        </div>

        <div class="main2">
            <h1>Legtöbbet eladott autó</h1>
            <?php
            mysqli_free_result($result);
            $legtobbetEladott = "SELECT * FROM `modell` WHERE gyartoId = $gyartoId ORDER BY eladottDarabszam DESC LIMIT 1;";
            $result = $conn->query($legtobbetEladott) or die($conn->error);
            $rows = $result->fetch_assoc();
            ?>
            <h1><?php echo $rows['modellNev'] ?>:</h1>
            <h1><?php echo $rows['eladottDarabszam'] ?> darab</h1>

        </div>
    </div>

    <div class="row">
        <div class="full2">
            <h1>Összes eladott autó</h1>
            <?php
            $result = mysqli_query($conn, 'SELECT SUM(eladottDarabszam) FROM modell WHERE gyartoId =' . $gyartoId);
            $row = mysqli_fetch_assoc($result);
            $sum = $row['SUM(eladottDarabszam)'];
            ?>
            <h1><?php echo $sum ?> darab</h1>
        </div>
    </div>

    <div class="row">
        <div class="full">
            <h1>Autók</h1>
            <table class="table">
                <tr>
                    <th>Modell név </th>
                    <th>Gyártási év </th>
                    <th>Eladott darabbszám </th>
                </tr>
                <?php
                mysqli_free_result($result);
                $modellek = "SELECT * FROM `modell` WHERE gyartoId = $gyartoId ORDER BY gyartasiEv";
                $result = $conn->query($modellek) or die($conn->error);
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rows['modellNev'] ?></td>
                        <td><?php echo $rows['gyartasiEv'] ?></td>
                        <td><?php echo $rows['eladottDarabszam'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div class="footer">
        <h2>ProjekMunka10</h2>
    </div>
    <script>
        document.getElementById('gyarto').innerHTML = gyarto;
        console.log("<?php echo $gyartoId ?>");
    </script>
</body>

</html>