<?php
include_once('../main/connect.php');
$sql ="SELECT film.filmcim, mozi.mozinev, mozi.irszam, mozi.cim
FROM mozi INNER JOIN (film INNER JOIN hely ON film.fkod = hely.fkod) ON mozi.moziazon = hely.moziazon
GROUP BY film.filmcim, mozi.mozinev, mozi.irszam, mozi.cim
HAVING (((mozi.irszam) Between 1130 And 1139))";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13. kerületi mozik</title>
    <link rel="stylesheet" href="../main/style2.css">
</head>

<body>
    <div class="header">
        <H1>13. kerületi mozik</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php" >Francia filmek</a>
        <a href="../B/b.php">Lakótársat keresünk</a>
        <a href="../C/c.php">Fekete-fehér filmek</a>
        <a href="../D/d.php">Nem vetítenek</a>
        <a href="../E/e.php">Feliratos vígjátékok</a>
        <a href="../F/f.php">Leghosszabb film</a>
        <a href="../G/g.php" class="active">13. kerületi mozik</a>
    </div>


    <div class="row">
        <div class="side">
            <h2>13. kerületi mozik</h2>
            <p>Az alábbi filmeket lehet megtekinteni, a 13. kerületi mozikban.</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>filmcím</th>
                    <th>mozinév</th>
                    <th>irszám</th>
                    <th>cím</th>
                </tr>
                <?php
                    while($rows = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $rows['filmcim'] ?></td>
                            <td><?php echo $rows['mozinev'] ?></td>
                            <td><?php echo $rows['irszam'] ?></td>
                            <td><?php echo $rows['cim'] ?></td>
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