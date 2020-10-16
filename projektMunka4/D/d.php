<?php
include_once('../main/connect.php');
$sql = "SELECT foglalkozas.fognev, Count(*) AS darab
FROM foglalkozas INNER JOIN kapcsolo ON foglalkozas.az = kapcsolo.fogaz
GROUP BY foglalkozas.fognev
ORDER BY Count(*) DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5szakmadb</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <div class="header">
        <H1>Művészeti ágak</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php">2dij2013</a>
        <a href="../B/b.php">3balett</a>
        <a href="../C/c.php">4legtobb</a>
        <a href="../D/d.php" class="active">5szakmadb</a>
        <a href="../E/e.php">6pitti</a>
        <a href="../F/f.php">7grafikus</a>
        <a href="../G/g.php">8elo</a>
        <a href="../H/h.php">9egyediresz</a>
    </div>


    <div class="row">
        <div class="side">
            <h2>5szakmadb</h2>
            <p>Adja meg lekérdezés segítségével, hogy az egyes foglalkozásnevekhez hány művész
                tartozik! A listában darabszám szerint csökkenően jelenítse meg a foglalkozásneveket és
                a darabszámokat!</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>foglalkozás név</th>
                    <th>darab</th>
                </tr>
                <?php
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rows['fognev'] ?></td>
                        <td><?php echo $rows['darab'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div class="footer">
        <h2>ProjekMunka4</h2>
        <h4>készítette:</h4>
        <h5>Ádom Bence</h5>
        <h5>Balogh Gábor</h5>
        <h5>Maknyik Márk</h5>
    </div>
</body>

</html>