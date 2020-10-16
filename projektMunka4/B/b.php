<?php
include_once('../main/connect.php');
$sql = "SELECT szemely.nev, foglalkozas.fognev
FROM foglalkozas INNER JOIN (szemely INNER JOIN kapcsolo ON szemely.az = kapcsolo.szemaz) ON foglalkozas.az = kapcsolo.fogaz
WHERE (((foglalkozas.fognev) Like '%balett%'))";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3balett</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <div class="header">
        <H1>Balett művészek</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php">2dij2013</a>
        <a href="../B/b.php" class="active">3balett</a>
        <a href="../C/c.php">4legtobb</a>
        <a href="../D/d.php">5szakmadb</a>
        <a href="../E/e.php">6pitti</a>
        <a href="../F/f.php">7grafikus</a>
        <a href="../G/g.php">8elo</a>
        <a href="../H/h.php">9egyediresz</a>
    </div>


    <div class="row">
        <div class="side">
            <h2>3balett</h2>
            <p>Balettel foglalkozó díjazottakra vagyunk kíváncsiak, de többféle ezzel kapcsolatos hivatás
                létezik. Lekérdezés segítségével írassa ki azoknak a nevét és foglalkozását, akik
                foglalkozási neve tartalmazza a „balett” szórészletet!</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>név</th>
                    <th>foglalkozás név</th>
                </tr>
                <?php
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rows['nev'] ?></td>
                        <td><?php echo $rows['fognev'] ?></td>
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