<?php
include_once('../main/connect.php');
$sql ="SELECT DISTINCT mozi.mozinev
FROM mozi INNER JOIN (film INNER JOIN hely ON film.fkod = hely.fkod) ON mozi.moziazon = hely.moziazon
WHERE (((film.szines)=False))";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fekete-fehér filmek</title>
    <link rel="stylesheet" href="../main/style2.css">
</head>

<body>
    <div class="header">
        <H1>Fekete-fehér filmek</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php" >Francia filmek</a>
        <a href="../B/b.php">Lakótársat keresünk</a>
        <a href="../C/c.php" class="active">Fekete-fehér filmek</a>
        <a href="../D/d.php">Nem vetítenek</a>
        <a href="../E/e.php">Feliratos vígjátékok</a>
        <a href="../F/f.php">Leghosszabb film</a>
        <a href="../G/g.php">13. kerületi mozik</a>
    </div>

    <div class="row">
        <div class="side">
            <h2>Fekete-fehér filmek</h2>
            <p>Az alábbi mozik vetítenek fekete-fehér filmeket.</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>mozinév</th>
                </tr>
                <?php
                    while($rows = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $rows['mozinev'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
            </table>
        </div>
    </div>

    <div class="footer">
        <h2>ProjekMunka2</h2>
        <h4>készítette:</h4>
        <h5>Ádom Bence</h5>
        <h5>Balogh Gábor</h5>
        <h5>Maknyik Márk</h5>
    </div>
</body>

</html>