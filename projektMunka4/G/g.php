<?php
include_once('../main/connect.php');
$sql = "SELECT szemely.elozo, szemely.ev, szemely.nev
FROM szemely
WHERE (((szemely.elozo) Is Not Null))
ORDER BY szemely.ev DESC , szemely.nev";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8elo</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <div class="header">
        <H1>Előző kitüntetések</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php">2dij2013</a>
        <a href="../B/b.php">3balett</a>
        <a href="../C/c.php">4legtobb</a>
        <a href="../D/d.php">5szakmadb</a>
        <a href="../E/e.php">6pitti</a>
        <a href="../F/f.php">7grafikus</a>
        <a href="../G/g.php" class="active">8elo</a>
        <a href="../H/h.php">9egyediresz</a>
    </div>


    <div class="row">
        <div class="side">
            <h2>8elo</h2>
            <p>Készítsen jelentést a művészek előző kitüntetéseiről ábécérendben, ha ez az adat szerepel
                az adatbázisban! A listában az évszámok csökkenően, és a nevek azon belül ábécérendben
                jelenjenek meg! A jelentés létrehozását lekérdezéssel vagy ideiglenes táblával készítse elő!
                A jelentés elkészítésekor a mintából a mezők sorrendjét, a címet és a mezőnevek
                megjelenítését vegye figyelembe! A jelentés formázásában a mintától eltérhet.</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>előző</th>
                    <th>év</th>
                    <th>név</th>
                </tr>
                <?php
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rows['elozo'] ?></td>
                        <td><?php echo $rows['ev'] ?></td>
                        <td><?php echo $rows['nev'] ?></td>
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