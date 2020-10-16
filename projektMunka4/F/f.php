<?php
include_once('../main/connect.php');
$sql = "SELECT DISTINCT foglalkozas.fognev FROM foglalkozas, kapcsolo WHERE (((foglalkozas.fognev)<>'grafikus') AND ((foglalkozas.az)=fogaz) AND ((kapcsolo.szemaz) In (SELECT szemaz FROM foglalkozas, kapcsolo WHERE az=fogaz AND fognev='grafikus')))";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7grafikus</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <div class="header">
        <H1>Grafikus</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php">2dij2013</a>
        <a href="../B/b.php">3balett</a>
        <a href="../C/c.php">4legtobb</a>
        <a href="../D/d.php">5szakmadb</a>
        <a href="../E/e.php">6pitti</a>
        <a href="../F/f.php" class="active">7grafikus</a>
        <a href="../G/g.php">8elo</a>
        <a href="../H/h.php">9egyediresz</a>
    </div>


    <div class="row">
        <div class="side">
            <h2>7grafikus</h2>
            <p>Lekérdezés segítségével határozza meg, hogy a grafikusoknak milyen más foglalkozásuk
                van még! A listában a „grafikus” foglalkozásnév ne szerepeljen, és minden foglalkozás
                neve egyszer jelenjen meg!</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>foglalkozás név</th>
                </tr>
                <?php
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
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