<?php
require('php/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Összehasonlítások</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header">
        <h1>Összehasonlítások</h1>
    </div>
    <div class="nav">
        <a href="./index.html">Főoldal</a>
        <a href="./osszehasonlitas.php" class="active">Összehasonlítás</a>
        <a href="./kereses.php">Keresés</a>
    </div>
    <div class="row">
        <div class="full3">
            <h1>Gyártók alapítás szerint rendezve</h1>
            <table class="table4">
                <tr>
                    <th>Gyártó</th>
                    <th>Alapító</th>
                    <th>Alapítás éve</th>
                </tr>
                <?php
                mysqli_free_result($result);
                $gyartok = "SELECT `gyartoNev`,`alapito`,`alapitasEve` FROM `gyarto` ORDER BY alapitasEve";
                $result = $conn->query($gyartok) or die($conn->error);
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rows['gyartoNev'] ?></td>
                        <td><?php echo $rows['alapito'] ?></td>
                        <td><?php echo $rows['alapitasEve'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="full">
            <h1>Összes eladott autó</h1>
            <?php
            mysqli_free_result($result);
            $eladasok = 'SELECT SUM(eladottDarabszam) FROM modell';
            $result = $conn->query($eladasok) or die($conn->error);
            $rows = $result->fetch_assoc();
            $sum = $rows['SUM(eladottDarabszam)'];
            ?>
            <h1><?php echo $sum ?> darab</h1>

        </div>
    </div>
    <div class="row">
        <div class="side">
            <h1>Legkevesebbet eladott autó</h1>
            <?php
            mysqli_free_result($result);
            $legkevesebbetEladott = "SELECT gyarto.gyartoNev, modell.modellNev, modell.eladottDarabszam FROM gyarto, modell WHERE gyarto.gyartoId = modell.gyartoId ORDER BY modell.eladottDarabszam LIMIT 1;";
            $result = $conn->query($legkevesebbetEladott) or die($conn->error);
            $rows = $result->fetch_assoc();
            ?>
            <h1><?php echo $rows['gyartoNev'] . ' ' . $rows['modellNev'] ?>:</h1>
            <h1><?php echo $rows['eladottDarabszam'] ?> darab</h1>
        </div>
        <div class="main3">
            <h1>Legtöbbet eladott autó</h1>
            <?php
            mysqli_free_result($result);
            $legtobbetEladott = "SELECT gyarto.gyartoNev, modell.modellNev, modell.eladottDarabszam FROM gyarto, modell WHERE gyarto.gyartoId = modell.gyartoId ORDER BY modell.eladottDarabszam DESC LIMIT 1;";
            $result = $conn->query($legtobbetEladott) or die($conn->error);
            $rows = $result->fetch_assoc();
            ?>
            <h1><?php echo $rows['gyartoNev'] . ' ' . $rows['modellNev'] ?>:</h1>
            <h1><?php echo $rows['eladottDarabszam'] ?> darab</h1>
        </div>
    </div>

    <div class="row">
        <div class="full">
            <h1>Autók évtized szerint rendezve</h1>
            <table class="table3">
                <tr>
                    <th>évtized</th>
                    <th>márka</th>
                    <th>modell név</th>
                    <th>gyártási év</th>
                    <th>eladott darabszám</th>
                </tr>
                <tr>
                    <th>1970
                        <?php
                        $evtized = "SELECT gyarto.gyartoNev, modellNev, gyartasiEv, eladottDarabszam FROM `gyarto`,`modell` WHERE modell.gyartoId = gyarto.gyartoId AND gyartasiEv BETWEEN 1970 AND 1979 ORDER BY gyartasiEv";
                        mysqli_free_result($result);
                        $result = $conn->query($evtized) or die($conn->error);
                        while ($rows = $result->fetch_assoc()) {
                            echo '</th><td>' . $rows['gyartoNev'] . '</td><td>' . $rows['modellNev'] . '</td>' . '<td>' . $rows['gyartasiEv'] . '</td>' . '<td>' . $rows['eladottDarabszam'] . '</td></tr><tr><th>';
                        }
                        ?>1980
                        <?php
                        $evtized = "SELECT gyarto.gyartoNev, modellNev, gyartasiEv, eladottDarabszam FROM `gyarto`,`modell` WHERE modell.gyartoId = gyarto.gyartoId AND gyartasiEv BETWEEN 1980 AND 1989 ORDER BY gyartasiEv";
                        mysqli_free_result($result);
                        $result = $conn->query($evtized) or die($conn->error);
                        while ($rows = $result->fetch_assoc()) {
                            echo '</th><td>' . $rows['gyartoNev'] . '</td><td>' . $rows['modellNev'] . '</td>' . '<td>' . $rows['gyartasiEv'] . '</td>' . '<td>' . $rows['eladottDarabszam'] . '</td></tr><tr><th>';
                        }
                        ?>
                        1990
                        <?php
                        $evtized = "SELECT gyarto.gyartoNev, modellNev, gyartasiEv, eladottDarabszam FROM `gyarto`,`modell` WHERE modell.gyartoId = gyarto.gyartoId AND gyartasiEv BETWEEN 1990 AND 1999 ORDER BY gyartasiEv";
                        mysqli_free_result($result);
                        $result = $conn->query($evtized) or die($conn->error);
                        while ($rows = $result->fetch_assoc()) {
                            echo '</th><td>' . $rows['gyartoNev'] . '</td><td>' . $rows['modellNev'] . '</td>' . '<td>' . $rows['gyartasiEv'] . '</td>' . '<td>' . $rows['eladottDarabszam'] . '</td></tr><tr><th>';
                        }
                        ?>2000
                        <?php
                        $evtized = "SELECT gyarto.gyartoNev, modellNev, gyartasiEv, eladottDarabszam FROM `gyarto`,`modell` WHERE modell.gyartoId = gyarto.gyartoId AND gyartasiEv BETWEEN 2000 AND 2009 ORDER BY gyartasiEv";
                        mysqli_free_result($result);
                        $result = $conn->query($evtized) or die($conn->error);
                        while ($rows = $result->fetch_assoc()) {
                            echo '</th><td>' . $rows['gyartoNev'] . '</td><td>' . $rows['modellNev'] . '</td>' . '<td>' . $rows['gyartasiEv'] . '</td>' . '<td>' . $rows['eladottDarabszam'] . '</td></tr><tr><th>';
                        }
                        ?>2010
                        <?php
                        $evtized = "SELECT gyarto.gyartoNev, modellNev, gyartasiEv, eladottDarabszam FROM `gyarto`,`modell` WHERE modell.gyartoId = gyarto.gyartoId AND gyartasiEv BETWEEN 2010 AND 2019 ORDER BY gyartasiEv";
                        mysqli_free_result($result);
                        $result = $conn->query($evtized) or die($conn->error);
                        echo '</th>';
                        $seged = 0;
                        while ($rows = $result->fetch_assoc()) {
                            if ($seged != 0) {
                                echo '<tr><th></th>';
                            }
                            echo '<td>' . $rows['gyartoNev'] . '</td><td>' . $rows['modellNev'] . '</td>' . '<td>' . $rows['gyartasiEv'] . '</td>' . '<td>' . $rows['eladottDarabszam'] . '</td></tr>';
                            $seged += 1;
                        }
                        ?>
            </table>
        </div>
    </div>
    <div class="footer">
        <h2>ProjekMunka10</h2>
    </div>
</body>

</html>