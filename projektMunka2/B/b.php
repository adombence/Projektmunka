<?php
include_once('../main/connect.php');
$sql ="SELECT mozi.*
FROM mozi INNER JOIN (film INNER JOIN hely ON film.fkod = hely.fkod) ON mozi.moziazon = hely.moziazon
WHERE (((film.filmcim)='Lakótársat keresünk'))";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lakótársat keresünk</title>
    <link rel="stylesheet" href="../main/style2.css">
</head>

<body>
    <div class="header">
        <H1>Lakótársat keresünk</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php">Francia filmek</a>
        <a href="../B/b.php" class="active">Lakótársat keresünk</a>
        <a href="../C/c.php">Fekete-fehér filmek</a>
        <a href="../D/d.php">Nem vetítenek</a>
        <a href="../E/e.php">Feliratos vígjátékok</a>
        <a href="../F/f.php">Leghosszabb film</a>
        <a href="../G/g.php">13. kerületi mozik</a>
    </div>


    <div class="row">
        <div class="side">
            <h2>Lakótársat keresünk</h2>
            <p>Az alábbi mozik vetítik a "Lakótársat keresünk" című filmet.</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>moziazon</th>
                    <th>mozinév</th>
                    <th>irszám</th>
                    <th>cím</th>
                    <th>telefon</th>
                </tr>
                <?php
                    while($rows = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $rows['moziazon'] ?></td>
                            <td><?php echo $rows['mozinev'] ?></td>
                            <td><?php echo $rows['irszam'] ?></td>
                            <td><?php echo $rows['cim'] ?></td>
                            <td><?php echo $rows['telefon'] ?></td>
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