<?php
include_once('../main/connect.php');
$sql = "SELECT szemely.nev, szemely.ev
FROM szemely INNER JOIN (foglalkozas INNER JOIN kapcsolo ON foglalkozas.az = kapcsolo.fogaz) ON szemely.az = kapcsolo.szemaz
WHERE (((kapcsolo.fogaz) In (SELECT fogaz FROM kapcsolo GROUP BY fogaz HAVING Count(*)=1)))";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9egyediresz</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <div class="header">
        <H1>Egyedi foglalkozások</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php">2dij2013</a>
        <a href="../B/b.php">3balett</a>
        <a href="../C/c.php">4legtobb</a>
        <a href="../D/d.php">5szakmadb</a>
        <a href="../E/e.php">6pitti</a>
        <a href="../F/f.php">7grafikus</a>
        <a href="../G/g.php">8elo</a>
        <a href="../H/h.php" class="active">9egyediresz</a>
    </div>


    <div class="row">
        <div class="side">
            <h2>9egyediresz</h2>
            <p>Azon művészek nevét és kitüntetésüknek évszámát kell megadnia, akiknek a foglalkozása
                egyedi, azaz más nem szerepel ilyen foglalkozással az adatbázisban! Készítse el azt
                a lekérdezést, amelyet az alábbi SQL-parancsban a megfelelő helyen alkalmazva helyes
                megoldást kapunk!</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th id="nev">név</th>
                    <th id="ev">év</th>
                </tr>
                <?php
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rows['nev'] ?></td>
                        <td><?php echo $rows['ev'] ?></td>
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