<?php
include_once('../main/connect.php');
$sql = "SELECT szemely.ev, Count(*) AS darab
FROM szemely
GROUP BY szemely.ev
ORDER BY Count(*) DESC
LIMIT 1";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4legtobb</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <div class="header">
        <H1>Legtöbb díjazott</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php">2dij2013</a>
        <a href="../B/b.php">3balett</a>
        <a href="../C/c.php" class="active">4legtobb</a>
        <a href="../D/d.php">5szakmadb</a>
        <a href="../E/e.php">6pitti</a>
        <a href="../F/f.php">7grafikus</a>
        <a href="../G/g.php">8elo</a>
        <a href="../H/h.php">9egyediresz</a>
    </div>


    <div class="row">
        <div class="side">
            <h2>4legtobb</h2>
            <p>Készítsen lekérdezést, amely megadja, hogy melyik évben volt a legtöbb díjazott és hányan
                voltak!</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>év</th>
                    <th>darab</th>
                </tr>
                <?php
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rows['ev'] ?></td>
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