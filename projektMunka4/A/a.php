<?php
include_once('../main/connect.php');
$sql ="SELECT szemely.nev, szemely.ev
FROM szemely
WHERE (((szemely.ev)=2013))
ORDER BY szemely.nev";
$result = $conn->query($sql) or die($conn->error);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2dij2013</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <div class="header">
        <H1>2013-as díjak</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php" class="active">2dij2013</a>
        <a href="../B/b.php">3balett</a>
        <a href="../C/c.php">4legtobb</a>
        <a href="../D/d.php">5szakmadb</a>
        <a href="../E/e.php">6pitti</a>
        <a href="../F/f.php">7grafikus</a>
        <a href="../G/g.php">8elo</a>
        <a href="../H/h.php">9egyediresz</a>
    </div>

    <div class="row">
        <div class="side">
            <h2>2dij2013</h2>
            <p>Sorolja fel ábécérendben lekérdezés segítségével a 2013-ban kitüntetettek nevét!</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>név</th>
                    <th>év</th>
                </tr>
                <?php
                    while($rows = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $rows["nev"] ?></td>
                            <td><?php echo $rows["ev"] ?></td>
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